<?php $this->load->view('base/header'); ?>
<div class="page" id="page-index">
    <div class="page-region">
        <div class="page-region-content">
            <div class="grid">
                <div class="row">
                    <div class="span9">
                        <div class="row" id="header-isi">
                            <div class="span9">
                                <div class="span1">
                                    <a href="<?php echo base_url();?>"><h2><i class="icon-arrow-left-3 fg-color-darken padding10" title="kembali ke halaman utama"></i></h2></a>
                                </div>
                                <div class="span8">
                                    <h1>Rekap Pendaftaran</h1>
                                    <h2>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=='kawasan'?'Sekolah Kawasan':  ucfirst($jalur));?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9 bg-color-blue padding10">
                                <?php echo form_open('rekap/lihat/'.$jenjang.'/'.$jalur, array('id' => 'formCari')); ?>
                                    <div class="input-control text">
                                        <label class="fg-color-white"><strong>No UN/US : </strong></label><input type="text" placeholder="Masukkan Nomor UN/US" maxlength="14" name="noUn" id="noUn" value="<?php echo (isset($noUn)?$noUn:''); ?>" style="width: 50%;">
                                        <span class="button place-right" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><i class="icon-search"></i>Cari</span>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        <div class="row">
                            <?php if(isset($rekap) && count($rekap) > 0) { ?>
                            <p class="place-right"><small>Menampilkan <?php echo ($urut+1)."-".($urut+  count($rekap))." dari ".$totalrekap. " hasil";?></small></p>
                            <?php } ?>
                            <div class="span9 bg-color-blueLight padding10">
                                <?php
                                if(isset($rekap) && count($rekap) > 0) {
                                    $nomor = $urut;
                                    ?>
                                    <table class="striped">
                                        <thead>
                                            <tr><td>NO</td><td>NO. UN</td><td>NAMA </td><td>SEKOLAH ASAL</td><td style="width: 10%;">NILAI TOTAL</td><td>WAKTU DAFTAR</td></tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($rekap as $row){ ?>
                                            <tr><td><?php echo ++$nomor;?></td><td><?php echo $row['input_uasbn']?></td><td><?php echo $row['input_nama_siswa']?></td><td><?php echo $row['input_asal_sekolah']?></td><td><?php echo $row['input_nilai_uan']?></td><td><?php echo $row['input_timestamp']?></td></tr>
                                            <?php } ?>
                                         </tbody>
                                    </table>
                                <?php
                                if(count($rekap==1) && $rekap[0]['input_status_validasi'] == 0) echo "<div class=\"padding10 red\"><h3 class=\"fg-color-yellow\">Peringatan!!</h3><span class=\"fg-color-white\">Data Calon peserta didik <strong>belum diverifikasi</strong>. Proses verifikasi data calon peserta dapat dilakukan di SMP/SMA/SMK Negeri terdekat dengan melampirkan berkas berikut:<ol>
                                    <li>Ijasah/SKUASBN/SKHUN</li><li>Kartu Keluarga (KK)</li><li>Bukti Pendaftaran Online</li></ol></span></div>";
                                echo $this->pagination->create_links(); ?>
                                <?php }
                                else{
                                    echo "Tidak ditemukan data pendaftaran.";
                                }
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