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
                        echo form_dropdown('sekolah', $options, 'SMP22', 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="max-height: 500px; overflow-y: auto;">
                <h2>Hasil Pemenuhan Pagu SMP Negeri 22</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr><th>NO</th><th>NO UN</th> <th>NAMA</th><th>ASAL SEKOLAH</th><th>NILAI</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>11405016910552</td>
                          <td>PASA HOBI DERMAWAN SUPRIYADI</td>
                          <td>SDN GAYUNGAN II/423</td>
                          <td>129.03</td>
                         </tr>
                         <tr>
                          <td>2</td>
                          <td>11405016860765</td>
                          <td>RACHMAD ANGGA PRIANDONO</td>
                          <td>SDN DUKUH MENANGGAL II/425</td>
                          <td>128.97</td>
                         </tr>
                         <tr>
                          <td>3</td>
                          <td>11405016930987</td>
                          <td>DHANILA RAHADATUL AISYI</td>
                          <td>SDN KETINTANG I</td>
                          <td>128.85</td>
                         </tr>
                         <tr>
                          <td>4</td>
                          <td>11405013620694</td>
                          <td>DANNISA ALZURA</td>
                          <td>SD AL - FALAH</td>
                          <td>128.81</td>
                         </tr>
                         <tr>
                          <td>5</td>
                          <td>11405114241112</td>
                          <td>USHWATUN CHASANAH<sup>M</sup></td>
                          <td>SD NEGERI GELURAN III</td>
                          <td>128.79</td>
                         </tr>
                         <tr>
                          <td>6</td>
                          <td>11405016860329</td>
                          <td>VISTA RIKA IRIANNA</td>
                          <td>SDN DUKUH MENANGGAL II/425</td>
                          <td>128.68</td>
                         </tr>
                         <tr>
                          <td>7</td>
                          <td>11405014930205</td>
                          <td>FARIZ ADITYA NUGRAHA</td>
                          <td>SDN SIWALANKERTO II / 4</td>
                          <td>128.64</td>
                         </tr>
                         <tr>
                          <td>8</td>
                          <td>11405017020507</td>
                          <td>YUAN ADIKUSUMA YULIANTO</td>
                          <td>SD LABORATORIUM UNESA</td>
                          <td>128.64</td>
                         </tr>
                         <tr>
                          <td>9</td>
                          <td>11405016850232</td>
                          <td>MESAYU NOVI PUTRI RIDHANI</td>
                          <td>SDN DUKUH MENANGGAL I/424</td>
                          <td>128.48</td>
                         </tr>
                         <tr>
                          <td>10</td>
                          <td>11405014920454</td>
                          <td>MUHAMMAD KELVIN AULIA PRADANA ISKANDAR</td>
                          <td>SDN SIWALANKERTO 1</td>
                          <td>128.38</td>
                         </tr>
                         <tr>
                          <td>11</td>
                          <td>11405016800143</td>
                          <td>MARCELLA WIDDIYANA</td>
                          <td>SDN KEBONSARI I/414</td>
                          <td>128.23</td>
                         </tr>
                         <tr>
                          <td>12</td>
                          <td>11405016840036</td>
                          <td>ADAM FIKRI HAIKAL</td>
                          <td>SD DARUL ULUM</td>
                          <td>128.1</td>
                         </tr>
                         <tr>
                          <td>13</td>
                          <td>11405013600178</td>
                          <td>ELANGGA SONY WIDIHARSONO</td>
                          <td>SD HANG TUAH I</td>
                          <td>128.09</td>
                         </tr>
                         <tr>
                          <td>14</td>
                          <td>11405014920134</td>
                          <td>KHANSA HASNA NUR KHAIRUNNISA</td>
                          <td>SDN SIWALANKERTO 1</td>
                          <td>127.97</td>
                         </tr>
                         <tr>
                          <td>15</td>
                          <td>11405016801307</td>
                          <td>NADYA LOVITA SARI</td>
                          <td>SDN KEBONSARI I/414</td>
                          <td>127.97</td>
                         </tr>
                         <tr>
                          <td>16</td>
                          <td>11405016900294</td>
                          <td>RIZAL HENDRAWAN SINGH</td>
                          <td>SDN GAYUNGAN I/422</td>
                          <td>127.93</td>
                         </tr>
                         <tr>
                          <td>17</td>
                          <td>11405115400632</td>
                          <td>AHMAD NAUFAL YUSQI<sup>M</sup></td>
                          <td>SD HANG TUAH 10 SEDATI</td>
                          <td>127.92</td>
                         </tr>
                         <tr>
                          <td>18</td>
                          <td>11405016840107</td>
                          <td>ANNISA SEPTI AMALIYAH</td>
                          <td>SD DARUL ULUM</td>
                          <td>127.92</td>
                         </tr>
                                            </tbody>
                </table>

                Keterangan : <br>
                <b>(M)</b> : Mutasi
            </div>
        </div>
    </div>
</div>