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
                    <h2>Hasil Seleksi SMPN 51</h2>
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
                        <td>11505017040356</td>
                        <td>NANDA EKO PRASTYA</td>
                        <td>281.50</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>11505017040116</td>
                        <td>CHEISA PUTRI ARDIAN</td>
                        <td>250.50</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>11505017040125</td>
                        <td>CINDY NUR KHOLIFATUS SHOLICHA</td>
                        <td>248.50</td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>11505017040614</td>
                        <td>MEITANTI PRAMESTY SEKAR ARUM</td>
                        <td>238.50</td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>11505017040783</td>
                        <td>YUDHO AJI WIJAYA</td>
                        <td>235.50</td>
                        </tr>
                        <tr>
                        <td>6</td>
                        <td>11505017040596</td>
                        <td>IRMA NOVIA RAMADHANI</td>
                        <td>230.00</td>
                        </tr>
                        <tr>
                        <td>7</td>
                        <td>11505017040178</td>
                        <td>FAISAL SETIA BUDI RAHMAN</td>
                        <td>227.50</td>
                        </tr>
                        <tr>
                        <td>8</td>
                        <td>11505017040454</td>
                        <td>ASEP RENDY PRASETYO</td>
                        <td>226.00</td>
                        </tr>
                        <tr>
                        <td>9</td>
                        <td>11505017040436</td>
                        <td>ALIF SYAH MAULANA</td>
                        <td>226.00</td>
                        </tr>
                        <tr>
                        <td>10</td>
                        <td>11505017040792</td>
                        <td>ADITYA RAMADHANI</td>
                        <td>224.50</td>
                        </tr>
                        <tr>
                        <td>11</td>
                        <td>11505017040996</td>
                        <td>OCTAVIA DWI PRAHENI</td>
                        <td>224.50</td>
                        </tr>
                        <tr>
                        <td>12</td>
                        <td>11505017041085</td>
                        <td>RIFKY AZIZA</td>
                        <td>224.00</td>
                        </tr>
                        <tr>
                        <td>13</td>
                        <td>11505017041014</td>
                        <td>PUJA DEVI MULYA SANDY</td>
                        <td>224.00</td>
                        </tr>
                        <tr>
                        <td>14</td>
                        <td>11505017040925</td>
                        <td>IRFAN FAISAL FARDANI</td>
                        <td>221.00</td>
                        </tr>
                        <tr>
                        <td>15</td>
                        <td>11505017040809</td>
                        <td>AFIFA DWI WULANDARI</td>
                        <td>218.00</td>
                        </tr>
                        <tr>
                        <td>16</td>
                        <td>11505017040854</td>
                        <td>DHEVAN ERY SUSANTO</td>
                        <td>217.50</td>
                        </tr>
                        <tr>
                        <td>17</td>
                        <td>11505017040089</td>
                        <td>AULIA ANDINI</td>
                        <td>217.00</td>
                        </tr>
                        <tr>
                        <td>18</td>
                        <td>11505017040818</td>
                        <td>ARI EKA PRATIWI</td>
                        <td>216.50</td>
                        </tr>
                        <tr>
                        <td>19</td>
                        <td>11505017040934</td>
                        <td>LINDA WAHYUNI</td>
                        <td>216.00</td>
                        </tr>
                        <tr>
                        <td>20</td>
                        <td>11505017041023</td>
                        <td>PUPUT MELDIANSA</td>
                        <td>216.00</td>
                        </tr>
                        <tr>
                        <td>21</td>
                        <td>11505017040685</td>
                        <td>SALSABILA BALQIS</td>
                        <td>214.50</td>
                        </tr>
                        <tr>
                        <td>22</td>
                        <td>11505017041094</td>
                        <td>RISKY ADE RAMDANI</td>
                        <td>213.00</td>
                        </tr>
                        <tr>
                        <td>23</td>
                        <td>11505017040703</td>
                        <td>SEFTIAN FERDY ANDI PRASASTI</td>
                        <td>213.00</td>
                        </tr>
                        <tr>
                        <td>24</td>
                        <td>11505017040418</td>
                        <td>AISYAH YOGI AZHAROH</td>
                        <td>210.50</td>
                        </tr>
                        <tr>
                        <td>25</td>
                        <td>11505017040143</td>
                        <td>DENIS YUSNIAWATI</td>
                        <td>208.50</td>
                        </tr>
                        <tr>
                        <td>26</td>
                        <td>11505017040427</td>
                        <td>AKHMAD ZAINAL JULIANTO</td>
                        <td>199.50</td>
                        </tr>
                        <tr>
                        <td>27</td>
                        <td>11505017040889</td>
                        <td>DWI APRIANTO</td>
                        <td>196.00</td>
                        </tr>
                        <tr>
                        <td>28</td>
                        <td>11505017041076</td>
                        <td>RIDUWAN ZAINURI</td>
                        <td>190.50</td>
                        </tr>
                        <tr>
                        <td>29</td>
                        <td>11505017040712</td>
                        <td>SEYDINA AYU VITRIANI WIJAYA DN</td>
                        <td>195.00</td>
                        </tr>
                        <tr>
                        <td>30</td>
                        <td>11505017040632</td>
                        <td>NAVARELYA SYAKIRAH</td>
                        <td>194.50</td>
                        </tr>
                        <tr>
                        <td>31</td>
                        <td>11505017040516</td>
                        <td>MOCH. DIDIK IRAWAN</td>
                        <td>192.00</td>
                        </tr>
                        <tr>
                        <td>32</td>
                        <td>11505017040916</td>
                        <td>IMELDA AGUSTINA PUTRI</td>
                        <td>197.00</td>
                        </tr>
                        <tr>
                        <td>33</td>
                        <td>11505017040765</td>
                        <td>YUDHA PRASETIAWAN</td>
                        <td>191.00</td>
                        </tr>
                        <tr>
                        <td>34</td>
                        <td>11505017040658</td>
                        <td>PUPUT INDAH LESTARI</td>
                        <td>187.50</td>
                        </tr>
                        <tr>
                        <td>35</td>
                        <td>11505017040898</td>
                        <td>DWI NUR MUHIM</td>
                        <td>184.50</td>
                        </tr>
                        <tr>
                        <td>36</td>
                        <td>11505017040472</td>
                        <td>AZIZ YULIONO</td>
                        <td>182.50</td>
                        </tr>
                        <tr>
                        <td>37</td>
                        <td>11505017040578</td>
                        <td>FENNY ANGGRAENI</td>
                        <td>181.50</td>
                        </tr>
                        <tr>
                        <td>38</td>
                        <td>11505017040845</td>
                        <td>DEVY NOVITA SARI</td>
                        <td>180.50</td>
                        </tr>
                        <tr>
                        <td>39</td>
                        <td>11505017040569</td>
                        <td>ESA AGUSTINA</td>
                        <td>184.00</td>
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