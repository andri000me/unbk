<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1><small>Pengumuman Hasil Seleksi</small></h1>
        <h2>PPDB SMP Jalur Satu Lokasi</h2>
        <ol> 
            <li>Daftar ulang tanggal 2 Juli 2015  sampai dengan 3 Juli 2015 pukul 08.00 WIB sampai dengan 16.00 WIB di sekolah tujuan.</li> 
            <li>Membawa fotokopi surat keterangan lulus/UN/US dengan menunjukkan aslinya.</li> 
            <li>Membawa fotokopi kartu keluarga dengan menunjukkan aslinya.</li>
        </ol>
        <br/>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <?php echo form_open('umum/satulokasi', array('id' => 'formCari', 'class' => 'form-inline')); ?>
                    <div class="form-group">
                        <label><strong>Nama Sekolah : </strong></label>
                        <?php $options= array(''=>'- Pilih Sekolah -', 'smpn28' => 'SMPN 28', 'smpn44' => 'SMPN 44', 'smpn45' => 'SMPN 45', 'smpn46' => 'SMPN 46', 'smpn47' => 'SMPN 47', 'smpn48' => 'SMPN 48', 'smpn50' => 'SMPN 50', 'smpn51' => 'SMPN 51', 'smpn52' => 'SMPN 52');
                        echo form_dropdown('sekolah', $options, '', 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>

            <div class="row">
                <div class="col-sm-12">
                    <h2>Hasil Seleksi SMPN 52</h2>
                    <table class="table table-striped table-bordered" id="table-satulokasi">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>NO UN</th>
                            <th>NAMA</th>
                            <th>NILAI</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <td>1</td>
                          <td>11505015420569</td>
                          <td>AJENG NUR ADINDA</td>
                          <td>251.00</td>
                          </tr>
                          <tr>
                          <td>2</td>
                          <td>11505015420063</td>
                          <td>ARIS IKHWAN MAULANA</td>
                          <td>250.00</td>
                          </tr>
                          <tr>
                          <td>3</td>
                          <td>11505015420614</td>
                          <td>BENNY ARIANTO</td>
                          <td>244.50</td>
                          </tr>
                          <tr>
                          <td>4</td>
                          <td>11505015420747</td>
                          <td>NOVITA CAHYA RAMADHIANTI</td>
                          <td>243.50</td>
                          </tr>
                          <tr>
                          <td>5</td>
                          <td>11505015420187</td>
                          <td>NITA PUNGKI RAHAYU</td>
                          <td>241.50</td>
                          </tr>
                          <tr>
                          <td>6</td>
                          <td>11505015420845</td>
                          <td>ERSAL RISKA BAGUS ATMADYA</td>
                          <td>234.50</td>
                          </tr>
                          <tr>
                          <td>7</td>
                          <td>11505015420818</td>
                          <td>ANGGI FEBRIANTO NUGROHO</td>
                          <td>225.00</td>
                          </tr>
                          <tr>
                          <td>8</td>
                          <td>11505015420694</td>
                          <td>MARSE ARYA SAPUTRA ISWAHYUDI</td>
                          <td>222.00</td>
                          </tr>
                          <tr>
                          <td>9</td>
                          <td>11505015420489</td>
                          <td>MUHAMMAD RIZKY FEBRIAN</td>
                          <td>220.50</td>
                          </tr>
                          <tr>
                          <td>10</td>
                          <td>11505015420516</td>
                          <td>SEPTIAN EKA PRAYOGA</td>
                          <td>214.00</td>
                          </tr>
                          <tr>
                          <td>11</td>
                          <td>11505015420125</td>
                          <td>FUADY AGUNG SAPUTRA</td>
                          <td>205.00</td>
                          </tr>
                          <tr>
                          <td>12</td>
                          <td>11505015420089</td>
                          <td>BRILLIAN SEBASHTIAN ANUGERAH ACHMAD</td>
                          <td>204.50</td>
                          </tr>
                          <tr>
                          <td>13</td>
                          <td>11505015420587</td>
                          <td>ANDREAS SETIAWAN</td>
                          <td>204.00</td>
                          </tr>
                          <tr>
                          <td>14</td>
                          <td>11505015420667</td>
                          <td>ICHWAN FARID</td>
                          <td>203.50</td>
                          </tr>
                          <tr>
                          <td>15</td>
                          <td>11505015420232</td>
                          <td>SETITI RAHAYU LESTARI</td>
                          <td>195.50</td>
                          </tr>
                          <tr>
                          <td>16</td>
                          <td>11505015420623</td>
                          <td>CINDY YULIANA</td>
                          <td>192.00</td>
                          </tr>
                          <tr>
                          <td>17</td>
                          <td>11505015420267</td>
                          <td>TEGAR WAHYU WIRATMOKO</td>
                          <td>191.00</td>
                          </tr>
                          <tr>
                          <td>18</td>
                          <td>11505015420249</td>
                          <td>SINTA LOLA AMELIA</td>
                          <td>190.00</td>
                          </tr>
                          <tr>
                          <td>19</td>
                          <td>11505015420018</td>
                          <td>MOCHAMMAD AGUS AJI SETIAWAN</td>
                          <td>186.00</td>
                          </tr>
                          <tr>
                          <td>20</td>
                          <td>11505015420338</td>
                          <td>ACHMAD PRIANTO</td>
                          <td>183.50</td>
                          </tr>
                          <tr>
                          <td>21</td>
                          <td>11505015420632</td>
                          <td>DIMAS SUTRA</td>
                          <td>183.00</td>
                          </tr>
                          <tr>
                          <td>22</td>
                          <td>11505015420472</td>
                          <td>MIFTAKHUL JANNAH</td>
                          <td>180.50</td>
                          </tr>
                          <tr>
                          <td>23</td>
                          <td>11505015420676</td>
                          <td>IKA OCTAVIA HARIYATI</td>
                          <td>180.50</td>
                          </tr>
                          <tr>
                          <td>24</td>
                          <td>11505015420347</td>
                          <td>ADE RIZKI ROMADHON</td>
                          <td>178.50</td>
                          </tr>
                          <tr>
                          <td>25</td>
                          <td>11505015420383</td>
                          <td>ANDIKA YOGI PRATAMA</td>
                          <td>178.00</td>
                          </tr>
                          <tr>
                          <td>26</td>
                          <td>11505015420783</td>
                          <td>KRISDIANTORO</td>
                          <td>177.50</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
      $('#table-satulokasi').dataTable( {
        "bLengthChange": false
      } );
  } );
</script>