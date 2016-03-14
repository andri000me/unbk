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
                        echo form_dropdown('sekolah', $options, 'SMP19', 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="max-height: 500px; overflow-y: auto;">
                <h2>Hasil Pemenuhan Pagu SMP Negeri 19</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr><th>NO</th><th>NO UN</th> <th>NAMA</th><th>ASAL SEKOLAH</th><th>NILAI</th></tr>
                    </thead>
                    <tbody>
                         <tr>
                          <td>1</td>
                          <td>11405015380249</td>
                          <td>MUHAMMAD IQBAL NASRULLAH</td>
                          <td>SDN KLAMPIS NGASEM V-230</td>
                          <td>132.68</td>
                         </tr>
                         <tr>
                          <td>2</td>
                          <td>11405015071254</td>
                          <td>NANDA WAHYU WARDHANA</td>
                          <td>SDN KALIRUNGKUT I/264</td>
                          <td>132.63</td>
                         </tr>
                         <tr>
                          <td>3</td>
                          <td>11405016220587</td>
                          <td>SITI ZAHRA ZAHIRA SUGIANTARA</td>
                          <td>SDN KALISARI I NO.242</td>
                          <td>132.63</td>
                         </tr>
                         <tr>
                          <td>4</td>
                          <td>11405016490552</td>
                          <td>RANIA MASTURA</td>
                          <td>SDN KENDANGSARI I/276</td>
                          <td>132.59</td>
                         </tr>
                         <tr>
                          <td>5</td>
                          <td>11405016220312</td>
                          <td>ALIEF RIZKY ARIANTO PUTRA</td>
                          <td>SDN KALISARI I NO.242</td>
                          <td>132.5</td>
                         </tr>
                         <tr>
                          <td>6</td>
                          <td>11405016230356</td>
                          <td>DWI FERRY HANDOKO</td>
                          <td>SDN KALISARI II-513</td>
                          <td>132.43</td>
                         </tr>
                         <tr>
                          <td>7</td>
                          <td>11405015400383</td>
                          <td>RADITYA KHANSA ADIFA</td>
                          <td>SDN NGINDEN JANGKUNGAN I NO. 247</td>
                          <td>132.39</td>
                         </tr>
                         <tr>
                          <td>8</td>
                          <td>11405016490392</td>
                          <td>BIANCA ALIFIA PHALOSA</td>
                          <td>SDN KENDANGSARI I/276</td>
                          <td>132.27</td>
                         </tr>
                         <tr>
                          <td>9</td>
                          <td>11405015071698</td>
                          <td>NUR AISYAH SEFTIA SETYOWATI</td>
                          <td>SDN KALIRUNGKUT I/264</td>
                          <td>132.22</td>
                         </tr>
                         <tr>
                          <td>10</td>
                          <td>11405015300747</td>
                          <td>KARTIKA APRILIA DEWI</td>
                          <td>SDN MENUR PUMPUNGAN</td>
                          <td>132.06</td>
                         </tr>
                         <tr>
                          <td>11</td>
                          <td>11405015420756</td>
                          <td>TIARA TRI SETIYOWATI</td>
                          <td>SDN MEDOKAN SEMAMPIR I/259</td>
                          <td>132.01</td>
                         </tr>
                         <tr>
                          <td>12</td>
                          <td>11405016230374</td>
                          <td>RUDI FEBRIANTO</td>
                          <td>SDN KALISARI II-513</td>
                          <td>132.01</td>
                         </tr>
                         <tr>
                          <td>13</td>
                          <td>11405015420329</td>
                          <td>WIDYA DHARMAWAN</td>
                          <td>SDN MEDOKAN SEMAMPIR I/259</td>
                          <td>131.98</td>
                         </tr>
                         <tr>
                          <td>14</td>
                          <td>11405015190178</td>
                          <td>IRDINA MAZAYA HARIADI</td>
                          <td>SDN PENJARINGANSARI II/608</td>
                          <td>131.9</td>
                         </tr>
                         <tr>
                          <td>15</td>
                          <td>11405015300347</td>
                          <td>BAGUS MUHAMAD SHOBIRIN</td>
                          <td>SDN MENUR PUMPUNGAN</td>
                          <td>131.84</td>
                         </tr>
                         <tr>
                          <td>16</td>
                          <td>11405510840445</td>
                          <td>AISYAH DESRAVI PUTRI</td>
                          <td>MIN MEDOKAN AYU</td>
                          <td>131.83</td>
                         </tr>
                         <tr>
                          <td>17</td>
                          <td>11405016700116</td>
                          <td>BINTANG TIARA PRAMESTI</td>
                          <td>SD AL ISLAH</td>
                          <td>131.66</td>
                         </tr>
                         <tr>
                          <td>18</td>
                          <td>11405015220605</td>
                          <td>SAFINA BULAN KOESASIH</td>
                          <td>SDN MEDOKAN AYU II/615</td>
                          <td>131.58</td>
                         </tr>
                    </tbody>
                </table>

                Keterangan : <br>
                <b>(M)</b> : Mutasi
            </div>
        </div>
    </div>
</div>