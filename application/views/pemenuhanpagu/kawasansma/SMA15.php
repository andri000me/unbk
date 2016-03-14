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
                        echo form_dropdown('sekolah', $options, 'SMA15', 'class="form-control"'); ?>
                        <button class="btn btn-info"  onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="max-height: 500px; overflow-y: auto;">
                <h2>Hasil Pemenuhan Pagu SMA Negeri 15</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr><th>NO</th><th>NO UN</th> <th>NAMA</th><th>ASAL SEKOLAH</th><th>NILAI</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>21405011090889</td>
                          <td>FANDI WAHYU RUSYDI</td>
                          <td>SMP NEGERI 21 SURABAYA</td>
                          <td>145.1</td>
                         </tr>
                         <tr>
                          <td>2</td>
                          <td>21405011120249</td>
                          <td>I PUTU ARDI WATA</td>
                          <td>SMP NEGERI 22 SURABAYA</td>
                          <td>137.4</td>
                         </tr>
                         <tr>
                          <td>3</td>
                          <td>21405011141138</td>
                          <td>ALI HAKIM AKBAR NASUTION</td>
                          <td>SMP AL HIKMAH SURABAYA</td>
                          <td>114.63</td>
                         </tr>
                         <tr>
                          <td>4</td>
                          <td>21405010560952</td>
                          <td>GISTYA HAYU KRIDHANI PRAMESWARI</td>
                          <td>SMP NEGERI 12 SURABAYA</td>
                          <td>114.54</td>
                         </tr>
                         <tr>
                          <td>5</td>
                          <td>21405010611849</td>
                          <td>Tia Ayu Novitasari</td>
                          <td>SMP NEGERI 13 SURABAYA</td>
                          <td>114.4</td>
                         </tr>
                         <tr>
                          <td>6</td>
                          <td>21405011821138</td>
                          <td>EGA AYUNDA ASHAR</td>
                          <td>SMP NEGERI 36 SURABAYA</td>
                          <td>114.31</td>
                         </tr>
                         <tr>
                          <td>7</td>
                          <td>21405011140685</td>
                          <td>DANDHIE VEGA PRADANA</td>
                          <td>SMP AL HIKMAH SURABAYA</td>
                          <td>114.22</td>
                         </tr>
                         <tr>
                          <td>8</td>
                          <td>21405011610516</td>
                          <td>FAUZAN NABALA KANDORA</td>
                          <td>SMP NEGERI 32 SURABAYA</td>
                          <td>113.76</td>
                         </tr>
                         <tr>
                          <td>9</td>
                          <td>21405111362872</td>
                          <td>ALZA DINDA SWARDHANY<sup>M</sup></td>
                          <td>SMP NEGRI 1 BUDURAN</td>
                          <td>113.25</td>
                         </tr>
                         <tr>
                          <td>10</td>
                          <td>21405111011574</td>
                          <td>NABIR CLAUDIA TOFANI<sup>M</sup></td>
                          <td>SMP NEGERI 1 TAMAN</td>
                          <td>113.21</td>
                         </tr>
                         <tr>
                          <td>11</td>
                          <td>21405011123458</td>
                          <td>YORANDIKA YOVIAN</td>
                          <td>SMP NEGERI 22 SURABAYA</td>
                          <td>113.11</td>
                         </tr>
                         <tr>
                          <td>12</td>
                          <td>21405011092569</td>
                          <td>ZAZID MIFTAHUL ULUM</td>
                          <td>SMP NEGERI 21 SURABAYA</td>
                          <td>112.88</td>
                         </tr>
                         <tr>
                          <td>13</td>
                          <td>21405015082934</td>
                          <td>Aldinda Cikawalrani</td>
                          <td>MTS UNGGULAN PP. AMANATUL UMMAH</td>
                          <td>112.88</td>
                         </tr>
                         <tr>
                          <td>14</td>
                          <td>21405011611396</td>
                          <td>MUZADIN ZIDAN BATUTAH</td>
                          <td>SMP NEGERI 32 SURABAYA</td>
                          <td>112.84</td>
                         </tr>
                         <tr>
                          <td>15</td>
                          <td>21405110091316</td>
                          <td>PRIAKARSA ICHSAN MULYA<sup>M</sup></td>
                          <td>SMP NEGERI 3 SIDOARJO</td>
                          <td>112.65</td>
                         </tr>
                         <tr>
                          <td>16</td>
                          <td>21405011091254</td>
                          <td>HABIBAH ISNA HARUN</td>
                          <td>SMP NEGERI 21 SURABAYA</td>
                          <td>112.46</td>
                         </tr>
                         <tr>
                          <td>17</td>
                          <td>21405010610667</td>
                          <td>Nur Aulia Noviyana</td>
                          <td>SMP NEGERI 13 SURABAYA</td>
                          <td>112.24</td>
                         </tr>
                         <tr>
                          <td>18</td>
                          <td>21405011091663</td>
                          <td>MARCHEL ABEDNEGO SEPTA KRISYANTO</td>
                          <td>SMP NEGERI 21 SURABAYA</td>
                          <td>111.18</td>
                         </tr>
                         <tr>
                          <td>19</td>
                          <td>21405011090516</td>
                          <td>HANAFI PRAYOGO</td>
                          <td>SMP NEGERI 21 SURABAYA</td>
                          <td>110.95</td>
                         </tr>
                         <tr>
                          <td>20</td>
                          <td>21405013330472</td>
                          <td>ARYO BHASUDEWO</td>
                          <td>SMP AL - FALAH</td>
                          <td>110.39</td>
                         </tr>
                         <tr>
                          <td>21</td>
                          <td>21405011140765</td>
                          <td>YUSRI FATHURRAHMAN</td>
                          <td>SMP AL HIKMAH SURABAYA</td>
                          <td>109.98</td>
                         </tr>
                    </tbody>
                </table>

                Keterangan : <br>
                <b>(M)</b> : Mutasi
            </div>
        </div>
    </div>
</div>