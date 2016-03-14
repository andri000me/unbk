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
                    <h2>Hasil Seleksi SMPN 50</h2>
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
                          <td>11505017710383</td>
                          <td>FAUNDRA RAHMADANI DWI SAPUTRA</td>
                          <td>205.50</td>
                          </tr>
                          <tr>
                          <td>2</td>
                          <td>11505017710516</td>
                          <td>YUNITA INDAH KUSUMA</td>
                          <td>210.00</td>
                          </tr>
                          <tr>
                          <td>3</td>
                          <td>11505017710187</td>
                          <td>TINA ARURA PUTRI</td>
                          <td>223.00</td>
                          </tr>
                          <tr>
                          <td>4</td>
                          <td>11505017710054</td>
                          <td>DEVONIA SUSTANDIA MUSTOFA</td>
                          <td>265.00</td>
                          </tr>
                          <tr>
                          <td>5</td>
                          <td>11505017710169</td>
                          <td>MOCHAMMAD SLAMET ALVIANO</td>
                          <td>219.50</td>
                          </tr>
                          <tr>
                          <td>6</td>
                          <td>11505017710338</td>
                          <td>TT. RIKE VEBRYYANTI</td>
                          <td>175.50</td>
                          </tr>
                          <tr>
                          <td>7</td>
                          <td>11505017710374</td>
                          <td>DESY FITRIA WAHYU CAHYANI</td>
                          <td>185.50</td>
                          </tr>
                          <tr>
                          <td>8</td>
                          <td>11505017710205</td>
                          <td>YUSRIL ACHMAD AFFANDI</td>
                          <td>174.00</td>
                          </tr>
                          <tr>
                          <td>9</td>
                          <td>11505017710472</td>
                          <td>PUTRI SEJATI YUSRON ALFAJARI</td>
                          <td>245.00</td>
                          </tr>
                          <tr>
                          <td>10</td>
                          <td>11505017710463</td>
                          <td>MOHAMMAD CHANDRA ARDIANSYAH</td>
                          <td>201.00</td>
                          </tr>
                          <tr>
                          <td>11</td>
                          <td>11505017710356</td>
                          <td>ANDI FADLI SULISTYO</td>
                          <td>187.50</td>
                          </tr>
                          <tr>
                          <td>12</td>
                          <td>11505017710418</td>
                          <td>MUHAMAD RAHUL</td>
                          <td>202.50</td>
                          </tr>
                          <tr>
                          <td>13</td>
                          <td>11505017710454</td>
                          <td>MOH. 'AFI 'ARIFKI</td>
                          <td>188.00</td>
                          </tr>
                          <tr>
                          <td>14</td>
                          <td>11505017710152</td>
                          <td>KIRANA HILDA PRINGGONDHANI</td>
                          <td>211.00</td>
                          </tr>
                          <tr>
                          <td>15</td>
                          <td>11505017710276</td>
                          <td>RANI RAHMA HIDAYATI</td>
                          <td>202.50</td>
                          </tr>
                          <tr>
                          <td>16</td>
                          <td>11505017710045</td>
                          <td>AISYAH NUR HABIBAH</td>
                          <td>240.50</td>
                          </tr>
                          <tr>
                          <td>17</td>
                          <td>11505017710089</td>
                          <td>MOCH. IQBAL DWI SAPUTRA</td>
                          <td>195.50</td>
                          </tr>
                          <tr>
                          <td>18</td>
                          <td>11505017710507</td>
                          <td>SRI GUNARTI</td>
                          <td>191.50</td>
                          </tr>
                          <tr>
                          <td>19</td>
                          <td>11505017710498</td>
                          <td>SUCI OKTAVIANI PUTRI</td>
                          <td>228.00</td>
                          </tr>
                          <tr>
                          <td>20</td>
                          <td>11505017710409</td>
                          <td>MERCYLIA EKA PUTRI RAMADHANI</td>
                          <td>245.50</td>
                          </tr>
                          <tr>
                          <td>21</td>
                          <td>11505017710223</td>
                          <td>MAHEN TIMOTHY DWI YANA</td>
                          <td>198.00</td>
                          </tr>
                          <tr>
                          <td>22</td>
                          <td>11505017710116</td>
                          <td>AHMAD NANANG PUJIANTO</td>
                          <td>186.50</td>
                          </tr>
                          <tr>
                          <td>23</td>
                          <td>11505017710018</td>
                          <td>TONI KARUNIA ILAHI HUSAENI</td>
                          <td>244.00</td>
                          </tr>
                          <tr>
                          <td>24</td>
                          <td>11505017710107</td>
                          <td>SHERLINA OKTAVIA SHANDY</td>
                          <td>212.00</td>
                          </tr>
                          <tr>
                          <td>25</td>
                          <td>11505017710436</td>
                          <td>MAHESA ADITIA IBRAHIM</td>
                          <td>186.50</td>
                          </tr>
                          <tr>
                          <td>26</td>
                          <td>11505017710027</td>
                          <td>ANINDYA RAMADHANI</td>
                          <td>216.50</td>
                          </tr>
                          <tr>
                          <td>27</td>
                          <td>11505017710303</td>
                          <td>ENGGAR SETIAWATI</td>
                          <td>251.00</td>
                          </tr>
                          <tr>
                          <td>28</td>
                          <td>11505017710552</td>
                          <td>DUTA PRATAMA ARIS PUTRA</td>
                          <td>185.50</td>
                          </tr>
                          <tr>
                          <td>29</td>
                          <td>11505017710489</td>
                          <td>REFO ADI SAPUTRA</td>
                          <td>249.50</td>
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