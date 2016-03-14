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
                        echo form_dropdown('sekolah', $options, 'SMP12', 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="max-height: 500px; overflow-y: auto;">
                <h2>Hasil Pemenuhan Pagu SMP Negeri 12</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr><th>NO</th><th>NO UN</th> <th>NAMA</th><th>ASAL SEKOLAH</th><th>NILAI</th></tr>
                    </thead>
                    <tbody>
                         <tr>
                          <td>1</td>
                          <td>11405016801058</td>
                          <td>ANGGARNIS DWIKALYANA ARDYANI</td>
                          <td>SDN KEBONSARI I/414</td>
                          <td>137.06</td>
                         </tr>
                         <tr>
                          <td>2</td>
                          <td>11405013590098</td>
                          <td>HAKIM BIMA ARDIMAS ALAM</td>
                          <td>SD PUTRA WIJAYA IV</td>
                          <td>133.79</td>
                         </tr>
                         <tr>
                          <td>3</td>
                          <td>11405013730125</td>
                          <td>FAKHRUDDIN FAHRI</td>
                          <td>SD DEWI SARTIKA</td>
                          <td>133.74</td>
                         </tr>
                         <tr>
                          <td>4</td>
                          <td>11405010780818</td>
                          <td>RIZQUINA ALDILA PUTRI</td>
                          <td>SDN DR. SUTOMO V / 327</td>
                          <td>133.7</td>
                         </tr>
                         <tr>
                          <td>5</td>
                          <td>11405013620543</td>
                          <td>NADHILA QISTHY NUR SHABRINA</td>
                          <td>SD AL - FALAH</td>
                          <td>133.61</td>
                         </tr>
                         <tr>
                          <td>6</td>
                          <td>11405016930774</td>
                          <td>NABILA PUTRI CAHYA KHAIRUNNISA</td>
                          <td>SDN KETINTANG I</td>
                          <td>133.58</td>
                         </tr>
                         <tr>
                          <td>7</td>
                          <td>11405013780072</td>
                          <td>DIENA NORMA AZIZAH</td>
                          <td>SD MUHAMMADIYAH 6</td>
                          <td>133.33</td>
                         </tr>
                         <tr>
                          <td>8</td>
                          <td>11405013560063</td>
                          <td>ANAS MAULANA MUFIT</td>
                          <td>SDN NGAGELREJO X/623</td>
                          <td>133.25</td>
                         </tr>
                         <tr>
                          <td>9</td>
                          <td>11405114720232</td>
                          <td>FAIZ PUTRA DJATMIKO<sup>MT</sup></td>
                          <td>SD NEGERI SEMAMBUNG II GEDANGAN</td>
                          <td>133.17</td>
                         </tr>
                         <tr>
                          <td>10</td>
                          <td>11405013450169</td>
                          <td>MUHAMMAD ABRIELLIAN DELANI</td>
                          <td>SDN JAGIR I/393</td>
                          <td>133.17</td>
                         </tr>
                         <tr>
                          <td>11</td>
                          <td>11405010840107</td>
                          <td>ANASTASYA<span style='mso-spacerun:yes'>  </span>BUNGA DWI PERMATASARI</td>
                          <td>SDN TEGALSARI I / 321</td>
                          <td>133.07</td>
                         </tr>
                         <tr>
                          <td>12</td>
                          <td>11405014960125</td>
                          <td>STEVEN ABEL ABEDNEGO</td>
                          <td>SDN SIDOSERMO I/427</td>
                          <td>133</td>
                         </tr>
                         <tr>
                          <td>13</td>
                          <td>11405013600267</td>
                          <td>OKTA CAHYA NINGTYAS</td>
                          <td>SD HANG TUAH I</td>
                          <td>132.94</td>
                         </tr>
                         <tr>
                          <td>14</td>
                          <td>11405014820125</td>
                          <td>REVANDA AMELIA AGATHA</td>
                          <td>SDN MARGOREJO III/ 405</td>
                          <td>132.8</td>
                         </tr>
                         <tr>
                          <td>15</td>
                          <td>11405013510356</td>
                          <td>BAHTIAR IKHSANI</td>
                          <td>SDN NGAGELREJO III</td>
                          <td>132.77</td>
                         </tr>
                         <tr>
                          <td>16</td>
                          <td>11405013510312</td>
                          <td>EKA SAPUTRI</td>
                          <td>SDN NGAGELREJO III</td>
                          <td>132.77</td>
                         </tr>
                    </tbody>
                </table>

                Keterangan : <br>
                <b>(M)</b> : Mutasi
            </div>
        </div>
    </div>
</div>