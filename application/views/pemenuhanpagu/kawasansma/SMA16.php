<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Pengumuman Hasil</h1>
        <h2>Pemenuhan Pagu PPDB SMA Sekolah Kawasan</h2>
        <ol>
            <li>Daftar ulang pemenuhan pagu sekolah kawasan dimulai Sabtu tanggal 5 Juli 2014 hingga Senin 7 Juli 2014 pukul 14.00 WIB di sekolah tujuan.</li>
            <li>Membawa fotokopi surat keterangan lulus/UN/US dengan menunjukkan aslinya.</li>
            <li>Membawa fotokopi kartu keluarga dengan menunjukkan aslinya.</li>
        </ol>
        <br/>
    </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <h2>Bukti Pemenuhan Pagu Sekolah Kawasan SMA</h2>

    <?php echo form_open('hasil/getpemenuhanbukti/sma/kawasan', array('id' => 'formCari', 'class' => 'form-inline')); ?>
        <div class="input-control text">
            <label class="fg-color-white"><strong>No UN/US : </strong></label>
            <?php
               echo form_input(array(
                        'class' => 'form-control',
                        'name' => 'noUn',
                        'maxlength' => '14',
                    )); ?>
            <button class="btn btn-info"  onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
        </div>
    <?php echo form_close(); ?>
  </div>
</div>
<hr/>

<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <?php echo form_open('hasil/pemenuhanpagu/kawasan/sma', array('id' => 'formCari', 'class' => 'form-inline')); ?>
                    <div class="input-control text">
                        <label class="fg-color-white"><strong>Nama Sekolah : </strong></label>
                        <?php $options= array(''=>'- Pilih Sekolah -', 'SMA1' => 'SMA NEGERI 1', 'SMA2' => 'SMA NEGERI 2', 'SMA3' => 'SMA NEGERI 3','SMA5' => 'SMA NEGERI 5', 'SMA6' => 'SMA NEGERI 6', 'SMA11' => 'SMA NEGERI 11', 'SMA13' => 'SMA NEGERI 13', 'SMA15' => 'SMA NEGERI 15', 'SMA16' => 'SMA NEGERI 16', 'SMA19' => 'SMA NEGERI 19', 'SMA20' => 'SMA NEGERI 20', 'SMA21' => 'SMA NEGERI 21');
                        echo form_dropdown('sekolah', $options, 'SMA16', 'class="form-control"'); ?>
                        <button class="btn btn-info"  onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="max-height: 500px; overflow-y: auto;">
                <h2>Hasil Pemenuhan Pagu SMA Negeri 16</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr><th>NO</th><th>NO UN</th> <th>NAMA</th><th>ASAL SEKOLAH</th><th>NILAI</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>21405011732845</td>
                          <td>MUCHAMAD ILHAM ADITIYANSYAH</td>
                          <td>SMP NEGERI 35 SURABAYA</td>
                          <td>119.94</td>
                         </tr>
                         <tr>
                          <td>2</td>
                          <td>21405011972143</td>
                          <td>ALIFIAH WULANSARI MUSTOFA</td>
                          <td>SMP NEGERI 39 SURABAYA</td>
                          <td>119.34</td>
                         </tr>
                         <tr>
                          <td>3</td>
                          <td>21405010931343</td>
                          <td>HASNA ATHIYYA YUMNA</td>
                          <td>SMP NEGERI 19 SURABAYA</td>
                          <td>119.3</td>
                         </tr>
                         <tr>
                          <td>4</td>
                          <td>21405011730489</td>
                          <td>BIMA KUSUMA ABIRAWA INDRA PUTRA</td>
                          <td>SMP NEGERI 35 SURABAYA</td>
                          <td>119.3</td>
                         </tr>
                         <tr>
                          <td>5</td>
                          <td>21405011732445</td>
                          <td>MOHAMMAD RIO DIKARAMDANI</td>
                          <td>SMP NEGERI 35 SURABAYA</td>
                          <td>119.16</td>
                         </tr>
                         <tr>
                          <td>6</td>
                          <td>21405011970525</td>
                          <td>MOCH.THORIQ ABD.AZIZ</td>
                          <td>SMP NEGERI 39 SURABAYA</td>
                          <td>119.16</td>
                         </tr>
                         <tr>
                          <td>7</td>
                          <td>21405011550925</td>
                          <td>Lintang Probo Sumirat</td>
                          <td>SMP NEGERI 30 SURABAYA</td>
                          <td>119.16</td>
                         </tr>
                         <tr>
                          <td>8</td>
                          <td>21405010810578</td>
                          <td>NADILA FILZA SABRINA</td>
                          <td>SMP NEGERI 17 SURABAYA</td>
                          <td>119.12</td>
                         </tr>
                    </tbody>
                </table>

                Keterangan : <br>
                <b>(M)</b> : Mutasi
            </div>
        </div>
    </div>
</div>