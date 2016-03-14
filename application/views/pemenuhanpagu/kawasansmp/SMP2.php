<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Pengumuman Hasil</h1>
        <h2>Pemenuhan Pagu PPDB SMP Sekolah Kawasan</h2>
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
    <h2>Bukti Pemenuhan Pagu Sekolah Kawasan SMP</h2>

    <?php echo form_open('hasil/getpemenuhanbukti/smp/kawasan', array('id' => 'formCari', 'class' => 'form-inline')); ?>
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
                <?php echo form_open('hasil/pemenuhanpagu/kawasan/smp', array('id' => 'formCari', 'class' => 'form-inline')); ?>
                    <div class="input-control text">
                        <label class="fg-color-white"><strong>Nama Sekolah : </strong></label>
                        <?php $options= array(''=>'- Pilih Sekolah -', 'SMP1' => 'SMP NEGERI 1', 'SMP2' => 'SMP NEGERI 2', 'SMP3' => 'SMP NEGERI 3', 'SMP6' => 'SMP NEGERI 6', 'SMP12' => 'SMP NEGERI 12', 'SMP15' => 'SMP NEGERI 15', 'SMP19' => 'SMP NEGERI 19', 'SMP22' => 'SMP NEGERI 22', 'SMP25' => 'SMP NEGERI 25', 'SMP26' => 'SMP NEGERI 26', 'SMP35' => 'SMP NEGERI 35');
                        echo form_dropdown('sekolah', $options, 'SMP2', 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="max-height: 500px; overflow-y: auto;">
                <h2>Hasil Pemenuhan Pagu SMP Negeri 2</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr><th>NO</th><th>NO UN</th> <th>NAMA</th><th>ASAL SEKOLAH</th><th>NILAI</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>11405012830089</td>
                          <td>ANDI VANIA GHALLIYAH PUTRIE</td>
                          <td>SDN WONOKUSUMO VI / 45</td>
                          <td>130.75</td>
                         </tr>
                         <tr>
                          <td>2</td>
                          <td>11405510870178</td>
                          <td>MUHAMMAD AUFAR ZULFIQAR</td>
                          <td>MI MUHAMMADIYAH 25</td>
                          <td>130.65</td>
                         </tr>
                         <tr>
                          <td>3</td>
                          <td>11405012500383</td>
                          <td>AFFAN ZEIN ABDULLAH</td>
                          <td>SD TAMIRIYAH</td>
                          <td>130.46</td>
                         </tr>
                         <tr>
                          <td>4</td>
                          <td>11405011140152</td>
                          <td>ARISKA DWI SRISEKARWATI</td>
                          <td>SDN SIDODADI II/154</td>
                          <td>130.44</td>
                         </tr>
                         <tr>
                          <td>5</td>
                          <td>11405011030427</td>
                          <td>ATHALLAH BAGAS PRATAMA</td>
                          <td>SDN SIMOKERTO</td>
                          <td>130.37</td>
                         </tr>
                         <tr>
                          <td>6</td>
                          <td>11405160090116</td>
                          <td>NAUFAL AMANULLAH<sup>MT</sup></td>
                          <td>SDN TANJUNG LAMONGAN</td>
                          <td>130.24</td>
                         </tr>
                         <tr>
                          <td>7</td>
                          <td>11405013060294</td>
                          <td>KOMANG AGESTYA TRISNA DEWI</td>
                          <td>SD HANG TUAH 3</td>
                          <td>130.12</td>
                         </tr>
                         <tr>
                          <td>8</td>
                          <td>11405012650116</td>
                          <td>HAJAR SAFFANA ZUHROH</td>
                          <td>SD NURUL ULUM</td>
                          <td>129.91</td>
                         </tr>
                         <tr>
                          <td>9</td>
                          <td>11405011100392</td>
                          <td>ANGGUN LORY RIZKAWATI</td>
                          <td>SDN KAPASAN V</td>
                          <td>129.88</td>
                         </tr>
                    </tbody>
                </table>

                Keterangan : <br>
                <b>(M)</b> : Mutasi
            </div>
        </div>
    </div>
</div>