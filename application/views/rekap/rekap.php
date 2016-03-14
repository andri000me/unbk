<h2>Langkah-langkah Pendaftaran</h2>
<ol class="progtrckr" data-progtrckr-steps="6">
    <li class="progtrckr-done">(1)</li><!--
 --><li class="progtrckr-done">(2)</li><!--
 --><li class="progtrckr-done">(3)</li><!--
 --><li class="progtrckr-done">(4)</li><!--
 --><li class="progtrckr-done">(5)</li><!--
 --><li class="progtrckr-done">(6)</li>
</ol>
<hr>

<div class="row">
    <div class="col-md-3">
        <div class="sidebar">
            <div style="padding-right: 5px;">
                <ol>
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div><span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span>Pilih Kategori</div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div><span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span>Input Nomor UN/US</div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div><span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span>Login Pendaftaran</div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div>
                                <span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span>Form Pendaftaran
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div>
                                <span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span>Periksa data pendaftaran sebelum disimpan permanen
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span>Bukti Pendaftaran
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>

     <div class="col-md-8">
        <div class="row">
            <div class="row margin10" id="header-isi">
                <div>
                    <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
                </div>
            </div>

            <h2>Rekap Pendaftaran</h2>
            <h2>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?></h2>
            <hr/>

            <div class="row">
                <div class="col-md-12">
                    <?php echo form_open('rekap/lihat/'.$jenjang.'/'.$jalur, array('id' => 'formCari','class' => 'form-inline')); ?>
                        <div class="input-control text">
                            <label><strong>No UN/US &nbsp;&nbsp;&nbsp;</strong></label><input type="text" placeholder="Masukkan Nomor UN/US" maxlength="14" name="noUn" id="noUn" value="<?php echo (isset($noUn)?$noUn:''); ?>" class="form-control ">
                            <span class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><i class="icon-search"></i>Cari</span>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

            <div class="row margin10">
                <p>Calon peserta didik dapat melakukan pencarian untuk memastikan data telah masuk ke dalam sistem dengan memasukkan nomor UN/US anda. <br/>**Catatan : calon peserta didik kategori luar kota, mutasi, tahun lalu, paket A dan paket B yang belum melakukan verifikasi belum masuk dalam rekap pendaftaran ini. Verifikasi dapat dilakukan di sekolah (SMP/SMA/SMK Negeri) terdekat.</p>
                <br>
                <?php if(isset($rekap) && count($rekap) > 0) { ?>
                <p class="place-right"><small>Menampilkan <?php echo ($urut+1)."-".($urut+  count($rekap))." dari ".$totalrekap. " hasil";?></small></p>
                <?php } ?>
                <div>
                    <?php
                    if(isset($rekap) && count($rekap) > 0) {
                        $nomor = $urut;
                        ?>
                        <table class="table table-hover table-striped">
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
                        <li>Ijasah/SKUASBN/SKHUN asli 1 buah dan fotokopi terlegalisir 1 buah</li><li>Kartu Keluarga (KK) asli 1 buah dan fotokopi terlegalisir 1 buah</li><li>Bukti Pendaftaran Online 1 buah</li></ol></span></div>";
                    echo $this->pagination->create_links(); ?>
                    <?php }
                    else{
                        echo "Tidak ditemukan data pendaftaran.";
                    }
                    ?>
                </div>
            </div>
            <div class="row margin10" id="header-isi">
                <div>
                    <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
                </div>
            </div>
        </div>
    </div>
</div>