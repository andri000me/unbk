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
                    <h2>Hasil Seleksi SMPN 45</h2>
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
                        <td>11505016150018</td>
                        <td>ANDRIYANTO</td>
                        <td>164.50</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>11505016150027</td>
                        <td>ICHWANUL ACHMAT ZAQI</td>
                        <td>235.00</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>11505016150036</td>
                        <td>ULFAH TRIANA</td>
                        <td>98.50</td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>11505016150045</td>
                        <td>DIMAS HIDAYATUL AKBAR</td>
                        <td>262.50</td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>11505016150072</td>
                        <td>VONY SIRLI ANSHAN</td>
                        <td>168.00</td>
                        </tr>
                        <tr>
                        <td>6</td>
                        <td>11505016150089</td>
                        <td>ADITIYA ANDRE KURNIAWAN</td>
                        <td>178.50</td>
                        </tr>
                        <tr>
                        <td>7</td>
                        <td>11505016150098</td>
                        <td>AFIF NOVAL ACHMAD REFFLI</td>
                        <td>131.50</td>
                        </tr>
                        <tr>
                        <td>8</td>
                        <td>11505016150116</td>
                        <td>AKHMAD FAUZI ERLANGGA</td>
                        <td>252.50</td>
                        </tr>
                        <tr>
                        <td>9</td>
                        <td>11505016150125</td>
                        <td>ALFYTO SUHERTA KURNIAWAN</td>
                        <td>182.00</td>
                        </tr>
                        <tr>
                        <td>10</td>
                        <td>11505016150143</td>
                        <td>BAGUS TRIZKIANTO PURNOMO</td>
                        <td>186.00</td>
                        </tr>
                        <tr>
                        <td>11</td>
                        <td>11505016150152</td>
                        <td>BELLA YULIA PRIHATINI</td>
                        <td>196.00</td>
                        </tr>
                        <tr>
                        <td>12</td>
                        <td>11505016150169</td>
                        <td>CANDRA KUSUMA</td>
                        <td>173.00</td>
                        </tr>
                        <tr>
                        <td>13</td>
                        <td>11505016150178</td>
                        <td>CINDI NURLAILATUS SABBANI</td>
                        <td>211.50</td>
                        </tr>
                        <tr>
                        <td>14</td>
                        <td>11505016150187</td>
                        <td>CITRA PUTRI OKTAVIANI</td>
                        <td>226.50</td>
                        </tr>
                        <tr>
                        <td>15</td>
                        <td>11505016150196</td>
                        <td>DIMAS WAHYU INDRA FIRMANSYAH</td>
                        <td>193.50</td>
                        </tr>
                        <tr>
                        <td>16</td>
                        <td>11505016150205</td>
                        <td>FANI FERDIANSYA</td>
                        <td>206.50</td>
                        </tr>
                        <tr>
                        <td>17</td>
                        <td>11505016150214</td>
                        <td>FANDI ARDIANSYAH</td>
                        <td>231.00</td>
                        </tr>
                        <tr>
                        <td>18</td>
                        <td>11505016150232</td>
                        <td>ISMA AISYA AZZAHRO</td>
                        <td>273.00</td>
                        </tr>
                        <tr>
                        <td>19</td>
                        <td>11505016150249</td>
                        <td>JIDAN AKHMAD AZIZ</td>
                        <td>255.00</td>
                        </tr>
                        <tr>
                        <td>20</td>
                        <td>11505016150258</td>
                        <td>KRISNA</td>
                        <td>227.00</td>
                        </tr>
                        <tr>
                        <td>21</td>
                        <td>11505016150267</td>
                        <td>KARLINA WAHYUNI PUTRI</td>
                        <td>235.00</td>
                        </tr>
                        <tr>
                        <td>22</td>
                        <td>11505016150276</td>
                        <td>LULU TRIMAIDIAN SARI</td>
                        <td>274.00</td>
                        </tr>
                        <tr>
                        <td>23</td>
                        <td>11505016150285</td>
                        <td>MUHAMMAD USAMAH DHIAULHAQ</td>
                        <td>240.00</td>
                        </tr>
                        <tr>
                        <td>24</td>
                        <td>11505016150294</td>
                        <td>M. AGIL APRIL LIANSYAH</td>
                        <td>254.00</td>
                        </tr>
                        <tr>
                        <td>25</td>
                        <td>11505016150303</td>
                        <td>MAYANG OKTA VIANITA</td>
                        <td>194.00</td>
                        </tr>
                        <tr>
                        <td>26</td>
                        <td>11505016150312</td>
                        <td>MOCH. IQBAL RAMDANI</td>
                        <td>235.50</td>
                        </tr>
                        <tr>
                        <td>27</td>
                        <td>11505016150329</td>
                        <td>MUHAMMAD SYAIFUL</td>
                        <td>193.50</td>
                        </tr>
                        <tr>
                        <td>28</td>
                        <td>11505016150347</td>
                        <td>MUHAMMAD IRFAN RAMADHANI</td>
                        <td>221.50</td>
                        </tr>
                        <tr>
                        <td>29</td>
                        <td>11505016150356</td>
                        <td>MUHAMMAD HAMDANI RIZKY AFRIZAL</td>
                        <td>199.50</td>
                        </tr>
                        <tr>
                        <td>30</td>
                        <td>11505016150365</td>
                        <td>MUHAMMAD MAULANA AKBAR</td>
                        <td>242.50</td>
                        </tr>
                        <tr>
                        <td>31</td>
                        <td>11505016150374</td>
                        <td>NAFA ANIZAH</td>
                        <td>256.00</td>
                        </tr>
                        <tr>
                        <td>32</td>
                        <td>11505016150427</td>
                        <td>SAFITRI DWI ANANDA</td>
                        <td>275.50</td>
                        </tr>
                        <tr>
                        <td>33</td>
                        <td>11505016150445</td>
                        <td>SATRIO WAHYU DEANDONO</td>
                        <td>249.00</td>
                        </tr>
                        <tr>
                        <td>34</td>
                        <td>11505016150463</td>
                        <td>SINTA DUWI PURNAMASARI</td>
                        <td>261.50</td>
                        </tr>
                        <tr>
                        <td>35</td>
                        <td>11505016150472</td>
                        <td>RISKA SURYA ANGGRAENI</td>
                        <td>234.50</td>
                        </tr>
                        <tr>
                        <td>36</td>
                        <td>11505016150489</td>
                        <td>TUTUS AINI ANJANI</td>
                        <td>231.00</td>
                        </tr>
                        <tr>
                        <td>37</td>
                        <td>11505016150498</td>
                        <td>VIVIANI</td>
                        <td>222.00</td>
                        </tr>
                        <tr>
                        <td>38</td>
                        <td>11505016150516</td>
                        <td>YULI HARIANTO</td>
                        <td>266.50</td>
                        </tr>
                        <tr>
                        <td>39</td>
                        <td>11505016150525</td>
                        <td>YULIANI FENIAWATI</td>
                        <td>180.50</td>
                        </tr>
                        <tr>
                        <td>40</td>
                        <td>11505016150534</td>
                        <td>OKTA REFANDA BRELYA</td>
                        <td>285.00</td>
                        </tr>
                        <tr>
                        <td>41</td>
                        <td>11505016150543</td>
                        <td>ARYA YOGA SASETYA</td>
                        <td>196.50</td>
                        </tr>
                        <tr>
                        <td>42</td>
                        <td>11505016150552</td>
                        <td>FARKHANUDIN</td>
                        <td>263.00</td>
                        </tr>
                        <tr>
                        <td>43</td>
                        <td>11505016150569</td>
                        <td>DESTIN CHRISTIAN GYMNASTIAR</td>
                        <td>223.00</td>
                        </tr>
                        <tr>
                        <td>44</td>
                        <td>11505016150578</td>
                        <td>ALMIRA YASMIN MARSHANDA</td>
                        <td>258.00</td>
                        </tr>
                        <tr>
                        <td>45</td>
                        <td>11505016150587</td>
                        <td>MUHAMMAD SAVA MAULANA</td>
                        <td>248.50</td>
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