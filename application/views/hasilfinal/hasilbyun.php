<?php $this->load->view('base/header');
$colors = array('smp' => 'blue', 'sma' => 'green', 'smk' => 'yellow');
?>
<div class="page" id="page-index">
    <div class="page-region">
        <div class="page-region-content">
            <div class="grid">
                <div class="row">
                    <div class="span9">
                        <div class="row" id="header-isi">
                            <div class="span9">
                                <div class="span1">
                                    <a href="<?php echo base_url()."hasil/lihat/".$jenjang."/".$jalur;?>"><h2><i class="icon-arrow-left-3 fg-color-darken padding10" title="Kembali"></i></h2></a>
                                </div>
                                <div class="span8">
                                    <h1>Hasil Seleksi <?php if($jalur=='umum') echo "Final"?></h1>
                                    <h2>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=='kawasan'?'Sekolah ':'').ucfirst($jalur);?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bg-color-blueLight padding10 border-color-<?php echo $colors[$jenjang];?>">
                              Cari berdasarkan nomor <?php echo ($jenjang=='sd'?'pendaftaran':'UN')?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9 bg-color-<?php echo $colors[$jenjang];?> padding10">
                                <?php echo form_open('hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/un', array('id' => 'formCari2')); ?>
                                    <div class="input-control text">
                                        <label class="fg-color-white"><strong>No <?php echo ($jenjang=='sd'?'pendaftaran':'UN')?> : </strong></label><input type="text" placeholder="Masukkan nomor <?php echo ($jenjang=='sd'?'pendaftaran':'UN')?>" name="noUn" id="noUn" value="<?php echo (isset($noUn)?$noUn:''); ?>" style="width: 50%;">
                                        <span class="button place-right" onclick="document.getElementById('formCari2').submit()" style="cursor: pointer"><i class="icon-search"></i>Cari</span>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9 bg-color-blueLight padding10">
                                <?php
                                $kategori = array('DK' => 'Dalam Kota', 'RD' => 'Rekomendasi Dalam Kota', 'RL' => 'Luar Kota', 'MT' => 'Mutasi');
                                if(isset($siswa)){?>
                                <table class="striped">
                                    <tbody>
                                        <tr><td><strong>Nomor UN/US</strong></td><td><strong><?php echo $siswa['output_uasbn'];?></strong></td></tr>
                                        <tr><td>Nama</td><td><?php echo $siswa['output_nama'];?></td></tr>
                                        <tr><td>Sekolah Asal</td><td><?php echo $siswa['output_asal_sekolah'];?></td></tr>
                                        <tr><td>Kategori</td><td><?php echo $kategori[$siswa['output_jenis_validasi']];?></td></tr>
                                        <tr><td>Nilai UN/US B. Indonesia</td><td><?php echo $siswa['output_nilai_bind'];?></td></tr>
                                        <tr><td>Nilai UN/US Matematika</td><td><?php echo $siswa['output_nilai_mat'];?></td></tr>
                                        <tr><td>Nilai UN/US IPA</td><td><?php echo $siswa['output_nilai_ipa'];?></td></tr>
                                        <?php if ($jenjang!='smp') { ?><tr><td>Nilai UN/US B. Inggris</td><td><?php echo $siswa['output_nilai_bing'];?></td></tr><?php } ?>
                                        <tr><td>Nilai UN/US</td><td><?php echo $siswa['output_nilai_uan'];?></td></tr>

                                        <?php if ($jalur=="kawasan") {?>
                                        <tr><td>Nilai TPA (Total)</td><td><?php echo $siswa['output_nilai_tpa'];?></td></tr>
                                        <tr><td><strong>Nilai Total</strong></td><td><strong><?php echo $siswa['output_nilai_total'];?></strong></td></tr>
                                        <?php } ?>
                                        <tr><td>Waktu Daftar</td><td><?php echo $siswa['output_timestamp'];?></td></tr>
                                        <tr><td><strong>Status Penerimaan <?php if($jalur=="umum") {echo "Final";}?></strong></td><td><strong><?php echo (isset($siswa['output_diterima']) && !empty($siswa['output_diterima']) ? 'Diterima di '. $sekolah [$siswa['output_diterima']] .' (Pilihan '. $siswa['output_pilihan'].')': 'Tidak diterima');?></strong></td></tr>
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
                    <div class="span3">
                        <?php $this->load->view('base/sidebar'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('base/footer'); ?>