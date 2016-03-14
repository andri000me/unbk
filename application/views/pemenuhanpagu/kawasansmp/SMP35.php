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
                        echo form_dropdown('sekolah', $options, 'SMP35', 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="max-height: 500px; overflow-y: auto;">
                <h2>Hasil Pemenuhan Pagu SMP Negeri 35</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr><th>NO</th><th>NO UN</th> <th>NAMA</th><th>ASAL SEKOLAH</th><th>NILAI</th></tr>
                    </thead>
                    <tbody>
                           <tr>
                            <td>1</td>
                            <td>11405015210507</td>
                            <td>MOCH. TOTTI FAUSTA</td>
                            <td>SDN MEDOKAN AYU I/270</td>
                            <td>125.27</td>
                           </tr>
                           <tr>
                            <td>2</td>
                            <td>11405015250258</td>
                            <td>DINDA TRI HULJANAH</td>
                            <td>SD WACHID HASYIM</td>
                            <td>125.25</td>
                           </tr>
                           <tr>
                            <td>3</td>
                            <td>11405016671405</td>
                            <td>YUSUF ADI SYAIFULLAH</td>
                            <td>SDN RUNGKUT MENANGGAL I/582</td>
                            <td>125.2</td>
                           </tr>
                           <tr>
                            <td>4</td>
                            <td>11405015110063</td>
                            <td>ADAM MAULANA ARIF PUTRA</td>
                            <td>SDN KENDANGSARI III/278</td>
                            <td>125.2</td>
                           </tr>
                           <tr>
                            <td>5</td>
                            <td>11405016690134</td>
                            <td>MUHAMAD BRILLIANT FIKRI NANDA HARTADI</td>
                            <td>SDN GUNUNGANYAR TAMBAK / 62</td>
                            <td>125.02</td>
                           </tr>
                           <tr>
                            <td>6</td>
                            <td>11405510840765</td>
                            <td>ZULFALAILA RAMADANI</td>
                            <td>MIN MEDOKAN AYU</td>
                            <td>124.96</td>
                           </tr>
                           <tr>
                            <td>7</td>
                            <td>11405121430036</td>
                            <td>ADI PURBO WICAKSONO<sup>MT</sup></td>
                            <td>SDN BETRO KEC. KEMLAGI KAB. MOJOKERTO</td>
                            <td>124.93</td>
                           </tr>
                           <tr>
                            <td>8</td>
                            <td>11405016170374</td>
                            <td>ALIFIA DIVAYANTI ACHMAD</td>
                            <td>SDN MANYAR SABRANGAN II/231</td>
                            <td>124.89</td>
                           </tr>
                           <tr>
                            <td>9</td>
                            <td>11405015100605</td>
                            <td>SALMA AYU DEWI</td>
                            <td>SDN KALIRUNGKUT IV/580</td>
                            <td>124.86</td>
                           </tr>
                           <tr>
                            <td>10</td>
                            <td>11405015160658</td>
                            <td>REYHAN DAFFA ALHAFIDZ</td>
                            <td>SDN KEDUNG BARUK I/275</td>
                            <td>124.79</td>
                           </tr>
                           <tr>
                            <td>11</td>
                            <td>11405015200169</td>
                            <td>AVILYUN ELENA INDRIESTA</td>
                            <td>SDN WONOREJO 274</td>
                            <td>124.71</td>
                           </tr>
                           <tr>
                            <td>12</td>
                            <td>11405015071423</td>
                            <td>ANGELINA CORNELIA DEVINA SARI</td>
                            <td>SDN KALIRUNGKUT I/264</td>
                            <td>124.47</td>
                           </tr>
                           <tr>
                            <td>13</td>
                            <td>11405115201547</td>
                            <td>FITRIA WIDIYANI<sup>MT</sup></td>
                            <td>SD NEGERI TAMBAKREJO</td>
                            <td>124.46</td>
                           </tr>
                           <tr>
                            <td>14</td>
                            <td>11405016730765</td>
                            <td>HANDLY MICHAEL BACKER LEEGSTRA</td>
                            <td>SD KATOLIK SANTA MARIA REGINA</td>
                            <td>124.42</td>
                           </tr>
                           <tr>
                            <td>15</td>
                            <td>11405016470232</td>
                            <td>RAFLI SATRIA ISWANDARU</td>
                            <td>SDN TENGGILIS MEJOYO I</td>
                            <td>124.35</td>
                           </tr>
                           <tr>
                            <td>16</td>
                            <td>11405015120392</td>
                            <td>ALIFIA IKA RAHMAYANTI</td>
                            <td>SDN KENDANGSARI IV/279</td>
                            <td>124.32</td>
                           </tr>
                           <tr>
                            <td>17</td>
                            <td>11405016470303</td>
                            <td>YUNIAR NUR ARBABA</td>
                            <td>SDN TENGGILIS MEJOYO I</td>
                            <td>124.21</td>
                           </tr>
                           <tr>
                            <td>18</td>
                            <td>11405016670516</td>
                            <td>MUHAMMAD FATHUR ROZIK</td>
                            <td>SDN RUNGKUT MENANGGAL I/582</td>
                            <td>124.15</td>
                           </tr>
                           <tr>
                            <td>19</td>
                            <td>11405015220152</td>
                            <td>DEWI NUR ARIFAH</td>
                            <td>SDN MEDOKAN AYU II/615</td>
                            <td>124.14</td>
                           </tr>
                           <tr>
                            <td>20</td>
                            <td>11405015150312</td>
                            <td>RYAN RIZALDI</td>
                            <td>SDN RUNGKUT KIDUL III/612</td>
                            <td>124.04</td>
                           </tr>
                           <tr>
                            <td>21</td>
                            <td>11405510840756</td>
                            <td>SHOFI RAHMADANI</td>
                            <td>MIN MEDOKAN AYU</td>
                            <td>123.84</td>
                           </tr>
                           <tr>
                            <td>22</td>
                            <td>11405015070463</td>
                            <td>FLORENCIA MARGARETHA BASSORY</td>
                            <td>SDN KALIRUNGKUT I/264</td>
                            <td>123.78</td>
                           </tr>
                    </tbody>
                </table>

                Keterangan : <br>
                <b>(M)</b> : Mutasi
            </div>
        </div>
    </div>
</div>