<?php
date_default_timezone_set('Asia/Jakarta');
$currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
$pengumuman_kawasan = mktime(0, 0, 0, 7, 7, 2015);
$pengumuman_umum = mktime(0, 1, 30, 7, 10, 2015);
$tutup_ranking = mktime(23, 59, 59, 7, 9, 2015);
?>

<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Peringkat
            <?php
                if ($jalur=='umum'){if ($pengumuman_umum<$currentTime)echo "Akhir"; else echo "Sementara";} else echo "Akhir";
            ?>
        </h1>
        <h2>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=='kawasan'?'Sekolah ':'').ucfirst($jalur);?></h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="blue-light-nohover">
                  Cari berdasarkan nomor <?php echo ($jenjang=='sd'?'pendaftaran':'UN')?>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-sm-12> padding10">
                <?php echo form_open('hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/un', array('id' => 'formCari2', 'class' => 'form-inline')); ?>
                    <div class="input-control text">
                        <label><strong>No <?php echo ($jenjang=='sd'?'pendaftaran':'UN')?> : </strong></label><input maxlength="14" class="form-control" type="text" placeholder="Masukkan nomor <?php echo ($jenjang=='sd'?'pendaftaran':'UN')?>" name="noUn" id="noUn" value="<?php echo (isset($noUn)?$noUn:''); ?>" style="width: 50%;">
                        <button class="btn btn-info"  onclick="document.getElementById('formCari2').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <p class="pull-right">
                    <?php if ($waktuRAnking && $jalur == 'umum' && ($currentTime<$tutup_ranking))
                    {
                        $waktu = explode(" ", $waktuRAnking); echo "Hasil peringkat tertanggal :".$waktu[1]." pukul  ".$waktu[0];
                    }
                    else {
                        echo "Hasil peringkat tertanggal 09/07/2015 pukul 23:59:59";
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php
                $kategori = array('DK' => 'Dalam Kota', 'RD' => 'Rekomendasi Dalam Kota', 'RL' => 'Luar Kota', 'MT' => 'Mutasi');
                if(isset($siswa)){?>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr><td><strong>Nomor UN/US</strong></td><td><strong><?php echo $siswa['output_uasbn'];?></strong></td></tr>
                        <tr><td>Nama</td><td><?php echo $siswa['output_nama_siswa'];?></td></tr>
                        <tr><td>Sekolah Asal</td><td><?php echo $siswa['output_asal_sekolah'];?></td></tr>
                        <tr><td>Kategori</td><td><?php echo $kategori[$siswa['output_jenis_validasi']];?></td></tr>
                        <tr><td>Nilai UN/US B. Indonesia</td><td><?php echo $siswa['output_nilai_bind'];?></td></tr>
                        <tr><td>Nilai UN/US Matematika</td><td><?php echo $siswa['output_nilai_mat'];?></td></tr>
                        <tr><td>Nilai UN/US IPA</td><td><?php echo $siswa['output_nilai_ipa'];?></td></tr>
                        <?php if ($jenjang!='smp') { ?><tr><td>Nilai UN/US B. Inggris</td><td><?php echo $siswa['output_nilai_bing'];?></td></tr><?php } ?>
                        <tr><td>Nilai UN/US</td><td><?php echo $siswa['output_nilai_uan'];?> <?php if ($jalur=="kawasan") echo "(40%)";?> </td></tr>

                        <?php if ($jalur=="kawasan") {?>
                        <tr><td>Nilai TPA (Total)</td><td><?php echo $siswa['output_nilai_tpa'];?> (60%)</td></tr>
                        <tr><td><strong>Nilai Total</strong></td><td><strong><?php echo $siswa['output_nilai_total'];?></strong></td></tr>
                        <?php } ?>
                        <tr><td>Waktu Daftar</td><td><?php echo $siswa['output_timestamp'];?></td></tr>
                        <tr><td><strong>Status Penerimaan <?php if ($jalur=='umum'){if ($pengumuman_umum<$currentTime)echo "Akhir"; else echo "Sementara";}?></strong></td><td><strong><?php
                            if (isset($siswa['output_diterima']) && !empty($siswa['output_diterima'])) {
                                echo 'Diterima di '. $sekolah [$siswa['output_diterima']] .' (Pilihan '. $siswa['output_pilihan'].')';
                            } else if ($jalur == 'umum') {
                                echo 'Anda Tidak diterima pada Jalur Umum.';
                            } else {
                                echo 'Anda Tidak diterima pada Jalur Sekolah Kawasan. Selanjutnya anda dapat mendaftar di Jalur Umum.';
                            }
                        ?></strong></td></tr>
                        <?php
                        if (($currentTime > $pengumuman_umum) && ($jalur=="umum"))
                        {?>
                        <tr><td></td><td><?php echo anchor('/hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/bukti/'.$noUn, '<span class="btn btn-info"><span class="fa fa-download" style="margin-right:10px;"></span>Unduh Bukti Seleksi</span>') ?></td></tr>
                        <?php }
                        if (($currentTime > $pengumuman_kawasan) && ($jalur=="kawasan") && isset($siswa['output_diterima']) && !empty($siswa['output_diterima']))
                        {?>
                        <tr><td>Detail Nilai Silahkan Download Bukti Penerimaan</td><td><?php echo anchor('/hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/bukti/'.$noUn, '<span class="btn btn-info"><span class="fa fa-download" style="margin-right:10px;"></span>Unduh Bukti Seleksi</span>') ?></td></tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if($jalur=="kawasan") { ?>
                Keterangan :<br>
                Nilai Total = 40% Nilai UN/US + 60% Nilai TPA<br>
                <!-- <small>*) Skala Nilai UN/US disesuaikan dengan skala nilai TPA</small> -->
                <?php } ?>

                <?php }
                else{ ?>
                <p>Calon peserta didik dengan nomor <?php echo $noUn; ?> tidak ditemukan.</p>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>