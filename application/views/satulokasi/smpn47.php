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
                    <h2>Hasil Seleksi SMPN 47</h2>
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
                        <td>11505014470063</td>
                        <td>APRILIA SUGIARTI</td>
                        <td>281.00</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>11505014470045</td>
                        <td>ARDI FIRMANSYAH</td>
                        <td>281.00</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>11505014470196</td>
                        <td>MOCH. AKBAR MAHENDRA WARDHANA</td>
                        <td>280.00</td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>11505014470187</td>
                        <td>HIKMAL</td>
                        <td>273.50</td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>11505014470312</td>
                        <td>SURYA PRADIPTA ASH-SHIDDIQ MAHABAHULLAH</td>
                        <td>272.50</td>
                        </tr>
                        <tr>
                        <td>6</td>
                        <td>11505014470294</td>
                        <td>SYAIFULLAH YUSUF</td>
                        <td>265.50</td>
                        </tr>
                        <tr>
                        <td>7</td>
                        <td>11505014470552</td>
                        <td>RAHMA DWI NOVITASARI</td>
                        <td>264.50</td>
                        </tr>
                        <tr>
                        <td>8</td>
                        <td>11505014470347</td>
                        <td>ACHMAD RIDHO ILHAM FIRMANSYAH</td>
                        <td>264.50</td>
                        </tr>
                        <tr>
                        <td>9</td>
                        <td>11505014470605</td>
                        <td>THALIA INTAN KIRANA</td>
                        <td>261.50</td>
                        </tr>
                        <tr>
                        <td>10</td>
                        <td>11505014470223</td>
                        <td>MOCHAMMAD RIFQI SYA ' BAN</td>
                        <td>261.00</td>
                        </tr>
                        <tr>
                        <td>11</td>
                        <td>11505014470374</td>
                        <td>AMANDA FARADINA ANISA</td>
                        <td>259.50</td>
                        </tr>
                        <tr>
                        <td>12</td>
                        <td>11505014470338</td>
                        <td>ABIEMANYU SHAKTI</td>
                        <td>257.50</td>
                        </tr>
                        <tr>
                        <td>13</td>
                        <td>11505014470232</td>
                        <td>MOCHAMMAD RIZQI SYA ' BAN</td>
                        <td>255.50</td>
                        </tr>
                        <tr>
                        <td>14</td>
                        <td>11505014470169</td>
                        <td>FAHMI PUTRA ALFIE</td>
                        <td>255.00</td>
                        </tr>
                        <tr>
                        <td>15</td>
                        <td>11505014470543</td>
                        <td>RAIHAN ATALA</td>
                        <td>254.50</td>
                        </tr>
                        <tr>
                        <td>16</td>
                        <td>11505014470623</td>
                        <td>FERDIAN RIZKI SETIAWAN</td>
                        <td>254.50</td>
                        </tr>
                        <tr>
                        <td>17</td>
                        <td>11505014470383</td>
                        <td>ANISA DWI PITALOKA</td>
                        <td>253.00</td>
                        </tr>
                        <tr>
                        <td>18</td>
                        <td>11505014470178</td>
                        <td>FIQI HAIKAL IMAN</td>
                        <td>251.50</td>
                        </tr>
                        <tr>
                        <td>19</td>
                        <td>11505014470392</td>
                        <td>ARDIANSYAH ENDIAS RAMA SYAHPUTRA</td>
                        <td>250.00</td>
                        </tr>
                        <tr>
                        <td>20</td>
                        <td>11505014470249</td>
                        <td>NABILA INDIRA KUSUMADEWI</td>
                        <td>249.00</td>
                        </tr>
                        <tr>
                        <td>21</td>
                        <td>11505014470089</td>
                        <td>ACHMAD BAGAS DJUAN RAJENDRA</td>
                        <td>249.00</td>
                        </tr>
                        <tr>
                        <td>22</td>
                        <td>11505014470427</td>
                        <td>BAYU SETIYOAJI</td>
                        <td>247.00</td>
                        </tr>
                        <tr>
                        <td>23</td>
                        <td>11505014470445</td>
                        <td>BUDI PRASETYO</td>
                        <td>245.00</td>
                        </tr>
                        <tr>
                        <td>24</td>
                        <td>11505014470098</td>
                        <td>DAVID ANGGA KUSUMA</td>
                        <td>244.00</td>
                        </tr>
                        <tr>
                        <td>25</td>
                        <td>11505014470267</td>
                        <td>NADYA AROFAH PUSPITASARI</td>
                        <td>243.50</td>
                        </tr>
                        <tr>
                        <td>26</td>
                        <td>11505014470525</td>
                        <td>NUNGKI LARASATI</td>
                        <td>243.00</td>
                        </tr>
                        <tr>
                        <td>27</td>
                        <td>11505014470472</td>
                        <td>HASAN BASRI</td>
                        <td>250.00</td>
                        </tr>
                        <tr>
                        <td>28</td>
                        <td>11505014470418</td>
                        <td>BAGUS RAMADHANI</td>
                        <td>242.50</td>
                        </tr>
                        <tr>
                        <td>29</td>
                        <td>11505014470303</td>
                        <td>SOFIA LAUREND MATITAPUTTY</td>
                        <td>242.00</td>
                        </tr>
                        <tr>
                        <td>30</td>
                        <td>11505014470036</td>
                        <td>AISYAH KURNIA SALMA</td>
                        <td>242.00</td>
                        </tr>
                        <tr>
                        <td>31</td>
                        <td>11505014470578</td>
                        <td>RIO JULIANSYAH PUTRA</td>
                        <td>241.50</td>
                        </tr>
                        <tr>
                        <td>32</td>
                        <td>11505014470569</td>
                        <td>RINA CAHYANINGRUM</td>
                        <td>237.50</td>
                        </tr>
                        <tr>
                        <td>33</td>
                        <td>11505014470516</td>
                        <td>NOVIANA SRI LESTARI</td>
                        <td>238.50</td>
                        </tr>
                        <tr>
                        <td>34</td>
                        <td>11505014470258</td>
                        <td>NABILA INDRA PRINCESSA LUKMADITIA</td>
                        <td>236.00</td>
                        </tr>
                        <tr>
                        <td>35</td>
                        <td>11505014470454</td>
                        <td>CHOIRUL ANAM</td>
                        <td>234.50</td>
                        </tr>
                        <tr>
                        <td>36</td>
                        <td>11505014470054</td>
                        <td>ARFI YAHYA NUR JANNAH</td>
                        <td>230.50</td>
                        </tr>
                        <tr>
                        <td>37</td>
                        <td>11505014470596</td>
                        <td>SAIFUL ANAM</td>
                        <td>229.50</td>
                        </tr>
                        <tr>
                        <td>38</td>
                        <td>11505014470507</td>
                        <td>M. DINI MAULANA FIRMANSYA</td>
                        <td>229.00</td>
                        </tr>
                        <tr>
                        <td>39</td>
                        <td>11505014470587</td>
                        <td>SALSABILLA INDAH AGISTINE</td>
                        <td>228.00</td>
                        </tr>
                        <tr>
                        <td>40</td>
                        <td>11505014470134</td>
                        <td>DHIMAS RIYANTO PUTRA</td>
                        <td>239.50</td>
                        </tr>
                        <tr>
                        <td>41</td>
                        <td>11505014470534</td>
                        <td>PUTRI NAOMI TATIWAKENG</td>
                        <td>218.50</td>
                        </tr>
                        <tr>
                        <td>42</td>
                        <td>11505014470285</td>
                        <td>SELFON AN YU ' AMMARA LIBRA ANANTA</td>
                        <td>202.00</td>
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