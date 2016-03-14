<div class="row">
    <div class="col-sm-12">
        <div class="row" id="header-isi">
            <div class="col-sm-12">
                <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
                <h1>Pengumuman</h1>
                <h2>Nilai UN/US: SD/MI, SMP/MTs, SMA/MA, SMK dan Kejar Paket C Kota Surabaya Tahun 2015</h2>
            </div>
        </div>
        <div class="row">
           <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 blue-light-nohover">
                        <b>Pengumuman Hasil Ujian Nasional Kejar Paket C</b><hr>
                        <a target="_blank" href="<?php echo URL_STATIC;?>/download/pengumuman_Kejar_paket_C.pdf" class="btn btn-info" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-download"></span>Download Pengumuman Hasil Ujian Nasional Kejar Paket C</a>
                    </div>
                </div>
                <div class="row">
                    <br/>
                    <div class="col-sm-12 blue-light-nohover">
                        <b>Informasi</b><hr>
                        Masukkan <strong>14 digit</strong> Nomor UN/US Anda dan tekan tombol Lihat Nilai untuk melihat nilai ujian Anda. <br>Format Nomor UN/US 14 Digit :<br>
                        <small style="margin-left:15px;">Lulus SD/MI sekarang, ditambahkan  11505</small><br>
                        <small style="margin-left:15px;">Lulus SMP/MTs sekarang, ditambahkan  21505</small><br>
                        <small style="margin-left:15px;">Lulus SMA/MA sekarang, ditambahkan  31505</small><br>
                        <small style="margin-left:15px;">Lulus SMK sekarang, ditambahkan  41505</small><br>
                        <small style="margin-left:15px;">Lulus kejar paket A sekarang, ditambahkan A1505</small><br>
                        <small style="margin-left:15px;">Lulus kejar paket B sekarang, ditambahkan B1505</small><br>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12 bg-color-blue">
                        <?php echo form_open('un/lihat', array('id' => 'formCari', 'class' => "form-inline", 'role' => "form")); ?>
                            <div>
                                <label style="margin-right:10px;"><strong>No UN/US: </strong></label><input class="form-control" type="text" placeholder="Masukkan Nomor UN/US" maxlength="14" name="noUn" id="noUn" value="<?php echo (isset($noUn)?$noUn:''); ?>" style="width: 50%;">
                                <span class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Lihat Nilai</span>
                            </div>
                        <?php echo form_close(); ?>
                        </form>
                    </div>
                </div>
                <?php if(!empty($noUn)){?>
                <div class="row">
                    <div class="col-sm-12 bg-color-blueLight">
                    <?php if(isset($siswa) && count($siswa) > 0) { ?>
                        <h2>Hasil Nilai UN/US</h2><hr>
                    <table class="table table-striped table-hover table-responsive table-bordered ">
                        <?php if($j=="sma") {?>
                        <tr><td style="width:40%;"><strong>Nomor Ujian</strong></td><td><strong><?php echo $siswa[0][$j.'_uasbn'];?></strong></td></tr>
                        <tr><td>Nilai UN Bahasa Indonesia</td><td><?php echo $siswa[0][$j.'_nu_bind'];?></td></tr>
                        <tr><td>Nilai UN Bahasa Inggris</td><td><?php echo $siswa[0][$j.'_nu_bing'];?></td></tr>
                        <tr><td>Nilai UN Matematika</td><td><?php echo $siswa[0][$j.'_nu_mat'];?></td></tr>
                        <tr><td>Nilai UN Fisika/Ekonomi/Sastra Indonesia</td><td><?php echo $siswa[0][$j.'_nu_jurusan1'];?></td></tr>
                        <tr><td>Nilai UN Kimia/Sosiologi/Antropologi</td><td><?php echo $siswa[0][$j.'_nu_jurusan2'];?></td></tr>
                        <tr><td>Nilai UN Biologi/Geografi/Bahasa Asing</td><td><?php echo $siswa[0][$j.'_nu_jurusan3'];?></td></tr>
                        <tr><td><strong>Nilai UN Total</strong></td><td><strong><?php echo $siswa[0][$j.'_nu_total'];?></strong></td></tr>
                        <tr><td>Nilai US Bahasa Indonesia</td><td><?php echo $siswa[0][$j.'_ns_bind'];?></td></tr>
                        <tr><td>Nilai US Bahasa Inggris</td><td><?php echo $siswa[0][$j.'_ns_bing'];?></td></tr>
                        <tr><td>Nilai US Matematika</td><td><?php echo $siswa[0][$j.'_ns_mat'];?></td></tr>
                        <tr><td>Nilai US Fisika/Ekonomi/Sastra Indonesia</td><td><?php echo $siswa[0][$j.'_ns_jurusan1'];?></td></tr>
                        <tr><td>Nilai US Kimia/Sosiologi/Antropologi</td><td><?php echo $siswa[0][$j.'_ns_jurusan2'];?></td></tr>
                        <tr><td>Nilai US Biologi/Geografi/Bahasa Asing</td><td><?php echo $siswa[0][$j.'_ns_jurusan3'];?></td></tr>
                        <tr><td><strong>Nilai US Total</strong></td><td><strong><?php echo $siswa[0][$j.'_ns_total'];?></strong></td></tr>
                        <?php } else if($j=="smk"){?>
                        <tr><td style="width:40%;"><strong>Nomor Ujian</strong></td><td><strong><?php echo $siswa[0][$j.'_uasbn'];?></strong></td></tr>
                        <tr><td>Nilai Bahasa Indonesia</td><td><?php echo $siswa[0][$j.'_nu_bind'];?></td></tr>
                        <tr><td>Nilai Bahasa Inggris</td><td><?php echo $siswa[0][$j.'_nu_bing'];?></td></tr>
                        <tr><td>Nilai Matematika</td><td><?php echo $siswa[0][$j.'_nu_mat'];?></td></tr>
                        <tr><td>Nilai Kompetensi</td><td><?php echo $siswa[0][$j.'_nu_komp'];?></td></tr>
                        <tr><td><strong>Nilai Total</strong></td><td><strong><?php echo $siswa[0][$j.'_nu_total'];?></strong></td></tr>
                        <?php } else if($j=="smp"){?>
                        <tr><td style="width:40%;"><strong>Nomor Ujian</strong></td><td><strong><?php echo $siswa[0][$j.'_uasbn'];?></strong></td></tr>
                        <tr><td>Nilai Bahasa Indonesia</td><td><?php echo $siswa[0][$j.'_nu_bind'];?></td></tr>
                        <tr><td>Nilai Bahasa Inggris</td><td><?php echo $siswa[0][$j.'_nu_bing'];?></td></tr>
                        <tr><td>Nilai Matematika</td><td><?php echo $siswa[0][$j.'_nu_mat'];?></td></tr>
                        <tr><td>Nilai IPA</td><td><?php echo $siswa[0][$j.'_nu_ipa'];?></td></tr>
                        <tr><td><strong>Nilai Total</strong></td><td><strong><?php echo $siswa[0][$j.'_nu_total'];?></strong></td></tr>
                        <?php } else if($j=="sd"){?>
                        <tr><td style="width:40%;"><strong>Nomor Ujian</strong></td><td><strong><?php echo $siswa[0][$j.'_uasbn'];?></strong></td></tr>
                        <tr><td>Nilai Bahasa Indonesia</td><td><?php echo $siswa[0][$j.'_nu_bind'];?></td></tr>
                        <tr><td>Nilai Matematika</td><td><?php echo $siswa[0][$j.'_nu_mat'];?></td></tr>
                        <tr><td>Nilai IPA</td><td><?php echo $siswa[0][$j.'_nu_ipa'];?></td></tr>
                        <tr><td><strong>Nilai Total</strong></td><td><strong><?php echo $siswa[0][$j.'_nu_total'];?></strong></td></tr>
                        <?php }?>
                    </table>
                        <?php }
                        else {
                            echo "<br><b class='red'>Pencarian tidak ditemukan.</b>";
                        }
                        ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>