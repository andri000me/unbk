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
                    <h2>Hasil Seleksi SMPN 48</h2>
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
                        <td>11505013530303</td>
                        <td>LAVENIA FLORENTINA AGUSTINA</td>
                        <td>267.50</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>11505013530578</td>
                        <td>FARDHAN FALAH</td>
                        <td>262.50</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>11505013530018</td>
                        <td>ABIDION MUKTI WICAKSONO BAIHAQI</td>
                        <td>262.00</td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>11505013530614</td>
                        <td>SILVIA DEVI MEITASARI</td>
                        <td>258.00</td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>11505013530507</td>
                        <td>RAYNANDO ARYA HENDANA</td>
                        <td>257.50</td>
                        </tr>
                        <tr>
                        <td>6</td>
                        <td>11505013530676</td>
                        <td>MOCH. FAJAR SATRIA AGUNG MUSTOFA</td>
                        <td>255.50</td>
                        </tr>
                        <tr>
                        <td>7</td>
                        <td>11505013530178</td>
                        <td>BAGUS MULYA PRATAMA</td>
                        <td>254.50</td>
                        </tr>
                        <tr>
                        <td>8</td>
                        <td>11505013530312</td>
                        <td>ABDUL AZIZ FILARDHI</td>
                        <td>254.00</td>
                        </tr>
                        <tr>
                        <td>9</td>
                        <td>11505013530383</td>
                        <td>MUGHNIY RAAFI'U AHADYA</td>
                        <td>253.00</td>
                        </tr>
                        <tr>
                        <td>10</td>
                        <td>11505013530107</td>
                        <td>SATRIO YOGA PAMUNGKAS ISKANDAR</td>
                        <td>252.50</td>
                        </tr>
                        <tr>
                        <td>11</td>
                        <td>11505013530649</td>
                        <td>TEGAR WAHYU PRAYOGA</td>
                        <td>250.00</td>
                        </tr>
                        <tr>
                        <td>12</td>
                        <td>11505013530516</td>
                        <td>MUHAMMAD ARIF HIDAYAT</td>
                        <td>249.50</td>
                        </tr>
                        <tr>
                        <td>13</td>
                        <td>11505013530667</td>
                        <td>MAUIDHOTUL PUTRI KHASANAH</td>
                        <td>247.00</td>
                        </tr>
                        <tr>
                        <td>14</td>
                        <td>11505013530569</td>
                        <td>RIDHO PANGESTU</td>
                        <td>244.50</td>
                        </tr>
                        <tr>
                        <td>15</td>
                        <td>11505013530143</td>
                        <td>VENANDA WIDYA SUCI PRATIWI</td>
                        <td>242.50</td>
                        </tr>
                        <tr>
                        <td>16</td>
                        <td>11505013530134</td>
                        <td>MUHAMAD IQBAL RIKHWANODIN</td>
                        <td>239.00</td>
                        </tr>
                        <tr>
                        <td>17</td>
                        <td>11505013530223</td>
                        <td>NURUL FAIZAH</td>
                        <td>239.00</td>
                        </tr>
                        <tr>
                        <td>18</td>
                        <td>11505013530454</td>
                        <td>KHOIRUN NISA ALFASANAH</td>
                        <td>237.50</td>
                        </tr>
                        <tr>
                        <td>19</td>
                        <td>11505013530392</td>
                        <td>KHOFIFAH NUR AZIZAH</td>
                        <td>236.00</td>
                        </tr>
                        <tr>
                        <td>20</td>
                        <td>11505013530409</td>
                        <td>MUHAMMAD YANUAR EKO SAPUTRO</td>
                        <td>208.50</td>
                        </tr>
                        <tr>
                        <td>21</td>
                        <td>11505013530098</td>
                        <td>LASYIFA ILANTA</td>
                        <td>230.50</td>
                        </tr>
                        <tr>
                        <td>22</td>
                        <td>11505013530249</td>
                        <td>AMALIA VIRGINIAWATI</td>
                        <td>228.00</td>
                        </tr>
                        <tr>
                        <td>23</td>
                        <td>11505013530205</td>
                        <td>ILHAM YULIADI</td>
                        <td>227.50</td>
                        </tr>
                        <tr>
                        <td>24</td>
                        <td>11505013530525</td>
                        <td>MOCH. FIKRY FIRDAUS</td>
                        <td>226.50</td>
                        </tr>
                        <tr>
                        <td>25</td>
                        <td>11505013530232</td>
                        <td>RAFI BINTANG JUNIAR EFENDI</td>
                        <td>225.50</td>
                        </tr>
                        <tr>
                        <td>26</td>
                        <td>11505013530356</td>
                        <td>REKSA DIRGANTARA CAESAR PUTRA</td>
                        <td>224.00</td>
                        </tr>
                        <tr>
                        <td>27</td>
                        <td>11505013530534</td>
                        <td>ACHMAD SULTHAN SYARIF</td>
                        <td>223.50</td>
                        </tr>
                        <tr>
                        <td>28</td>
                        <td>11505013530329</td>
                        <td>ERICKO VALENTINO DAMAR WIDAGDO</td>
                        <td>223.00</td>
                        </tr>
                        <tr>
                        <td>29</td>
                        <td>11505013530436</td>
                        <td>ELZA SEPTIANI DWI ANGGRAENI</td>
                        <td>219.50</td>
                        </tr>
                        <tr>
                        <td>30</td>
                        <td>11505013530027</td>
                        <td>ANDI KURNIAWAN</td>
                        <td>216.00</td>
                        </tr>
                        <tr>
                        <td>31</td>
                        <td>11505013530587</td>
                        <td>ILYAS YULIANTO</td>
                        <td>215.50</td>
                        </tr>
                        <tr>
                        <td>32</td>
                        <td>11505013530427</td>
                        <td>AHMAD FAHRUL SETIAWAN</td>
                        <td>212.50</td>
                        </tr>
                        <tr>
                        <td>33</td>
                        <td>11505013530258</td>
                        <td>GISELLA ANGGRAINI AZ ZAHRA</td>
                        <td>212.00</td>
                        </tr>
                        <tr>
                        <td>34</td>
                        <td>11505013530543</td>
                        <td>SYAHIDAH HASBIULLAH NI ALAKHANZA</td>
                        <td>211.50</td>
                        </tr>
                        <tr>
                        <td>35</td>
                        <td>11505013530374</td>
                        <td>PUTRI KAMALIA</td>
                        <td>211.00</td>
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