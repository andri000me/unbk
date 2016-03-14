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
                    <h2>Hasil Seleksi SMPN 28</h2>
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
                        <td>11505015990578</td>
                        <td>FIRZYA FEBRIYAN IKA ARVIANITA</td>
                        <td>281.00</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>11505015990223</td>
                        <td>NIKEN LARASATI</td>
                        <td>280.50</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>11505015990889</td>
                        <td>ADELIA TRI ANGGRAENI</td>
                        <td>279.50</td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>11505015990463</td>
                        <td>ANADIA SERANYANA</td>
                        <td>277.50</td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>11505015990347</td>
                        <td>YOAN CINDHO MAHARANI</td>
                        <td>276.00</td>
                        </tr>
                        <tr>
                        <td>6</td>
                        <td>11505015990703</td>
                        <td>RISKA SAFIRA ARDY PUTRI</td>
                        <td>274.50</td>
                        </tr>
                        <tr>
                        <td>7</td>
                        <td>11505015990054</td>
                        <td>ATHARIQ KRESNA NUR FATTAH</td>
                        <td>274.50</td>
                        </tr>
                        <tr>
                        <td>8</td>
                        <td>11505015991218</td>
                        <td>ABEIGAIL PRINCESS KEHZIANA LESAR</td>
                        <td>274.00</td>
                        </tr>
                        <tr>
                        <td>9</td>
                        <td>11505015990409</td>
                        <td>SHAKILA PUTRI NUR AMINI</td>
                        <td>273.50</td>
                        </tr>
                        <tr>
                        <td>10</td>
                        <td>11505015990498</td>
                        <td>BAIHAQI HAKIM</td>
                        <td>273.50</td>
                        </tr>
                        <tr>
                        <td>11</td>
                        <td>11505015990907</td>
                        <td>AISYAH PUTRI ANDINI</td>
                        <td>272.00</td>
                        </tr>
                        <tr>
                        <td>12</td>
                        <td>11505015990356</td>
                        <td>YOGIS MAULANA</td>
                        <td>270.00</td>
                        </tr>
                        <tr>
                        <td>13</td>
                        <td>11505015990747</td>
                        <td>TEGAR SETYA BAKTI AL-FIKRI</td>
                        <td>268.50</td>
                        </tr>
                        <tr>
                        <td>14</td>
                        <td>11505015990196</td>
                        <td>NABILLAH KASIH SOLIKHA</td>
                        <td>268.00</td>
                        </tr>
                        <tr>
                        <td>15</td>
                        <td>11505015991147</td>
                        <td>UDAY SATRIO PENANGSANG</td>
                        <td>267.50</td>
                        </tr>
                        <tr>
                        <td>16</td>
                        <td>11505015990125</td>
                        <td>KHANSA ADE WIRYA</td>
                        <td>266.00</td>
                        </tr>
                        <tr>
                        <td>17</td>
                        <td>11505015990374</td>
                        <td>VIONA ERLANDA</td>
                        <td>265.50</td>
                        </tr>
                        <tr>
                        <td>18</td>
                        <td>11505015991014</td>
                        <td>ISMA' ARIFATUL RAHMA PUTRI</td>
                        <td>264.00</td>
                        </tr>
                        <tr>
                        <td>19</td>
                        <td>11505015990738</td>
                        <td>SHAFIRA DENTA FITRIA</td>
                        <td>263.50</td>
                        </tr>
                        <tr>
                        <td>20</td>
                        <td>11505015990996</td>
                        <td>IFAN SHEVA ARJUNA</td>
                        <td>263.00</td>
                        </tr>
                        <tr>
                        <td>21</td>
                        <td>11505015990827</td>
                        <td>RIZNA WIDIA MAHARANI</td>
                        <td>261.50</td>
                        </tr>
                        <tr>
                        <td>22</td>
                        <td>11505015990667</td>
                        <td>NOVA KIRANA PUTRI</td>
                        <td>260.00</td>
                        </tr>
                        <tr>
                        <td>23</td>
                        <td>11505015990312</td>
                        <td>SABINA ANJUNG VERLINDI</td>
                        <td>259.50</td>
                        </tr>
                        <tr>
                        <td>24</td>
                        <td>11505015990143</td>
                        <td>MAULIDINA NUR FADILLA</td>
                        <td>259.50</td>
                        </tr>
                        <tr>
                        <td>25</td>
                        <td>11505015990098</td>
                        <td>GALU ADITYA MADANA</td>
                        <td>258.50</td>
                        </tr>
                        <tr>
                        <td>26</td>
                        <td>11505015990063</td>
                        <td>BIMA AL-HAFIIDH</td>
                        <td>257.00</td>
                        </tr>
                        <tr>
                        <td>27</td>
                        <td>11505015990392</td>
                        <td>ABDULLAH FATAH</td>
                        <td>256.00</td>
                        </tr>
                        <tr>
                        <td>28</td>
                        <td>11505015990089</td>
                        <td>FARHAN DANISWARA RAMADHAN PRATAMA</td>
                        <td>255.50</td>
                        </tr>
                        <tr>
                        <td>29</td>
                        <td>11505015990614</td>
                        <td>LIVIA ANGGI SAFITRI</td>
                        <td>255.00</td>
                        </tr>
                        <tr>
                        <td>30</td>
                        <td>11505015990507</td>
                        <td>BENITA NOVIA PALASTRI</td>
                        <td>254.00</td>
                        </tr>
                        <tr>
                        <td>31</td>
                        <td>11505015990969</td>
                        <td>DEWI KUSUMANINGSIH</td>
                        <td>251.50</td>
                        </tr>
                        <tr>
                        <td>32</td>
                        <td>11505015991085</td>
                        <td>RESA DWI KRISANDI</td>
                        <td>251.50</td>
                        </tr>
                        <tr>
                        <td>33</td>
                        <td>11505015990978</td>
                        <td>FAISAL RAFFI SUGIARTO</td>
                        <td>251.50</td>
                        </tr>
                        <tr>
                        <td>34</td>
                        <td>11505015990916</td>
                        <td>AISYAH PUTRI MEILINA SARI</td>
                        <td>250.00</td>
                        </tr>
                        <tr>
                        <td>35</td>
                        <td>11505015990036</td>
                        <td>ATTIKAH NURPERMATA GHOZALI</td>
                        <td>249.50</td>
                        </tr>
                        <tr>
                        <td>36</td>
                        <td>11505015991005</td>
                        <td>INTAN AZAHRA SALSABILA</td>
                        <td>249.00</td>
                        </tr>
                        <tr>
                        <td>37</td>
                        <td>11505015990836</td>
                        <td>HAYKAL AZREL PUTRA SUGIJANTO</td>
                        <td>249.00</td>
                        </tr>
                        <tr>
                        <td>38</td>
                        <td>11505015990267</td>
                        <td>PARAMITA MAULIDYA</td>
                        <td>249.00</td>
                        </tr>
                        <tr>
                        <td>39</td>
                        <td>11505015991174</td>
                        <td>ZYOLAIVA ACHMAD FEBRIANTI</td>
                        <td>244.00</td>
                        </tr>
                        <tr>
                        <td>40</td>
                        <td>11505015990489</td>
                        <td>BAGAS FITRAH WITO SAPUTRO</td>
                        <td>240.00</td>
                        </tr>
                        <tr>
                        <td>41</td>
                        <td>11505015990329</td>
                        <td>SAHRUL MU'ARIF</td>
                        <td>239.00</td>
                        </tr>
                        <tr>
                        <td>42</td>
                        <td>11505015990276</td>
                        <td>PRADINA AMANDA PUTRI</td>
                        <td>239.00</td>
                        </tr>
                        <tr>
                        <td>43</td>
                        <td>11505015990729</td>
                        <td>SATRIYO ADI SURYO</td>
                        <td>239.00</td>
                        </tr>
                        <tr>
                        <td>44</td>
                        <td>11505015990045</td>
                        <td>AULIA SAFARINA</td>
                        <td>238.00</td>
                        </tr>
                        <tr>
                        <td>45</td>
                        <td>11505015990543</td>
                        <td>DITA AYU PRASASTI</td>
                        <td>237.00</td>
                        </tr>
                        <tr>
                        <td>46</td>
                        <td>11505015990632</td>
                        <td>NELLA FIRNANDA AMELIA PUTRI</td>
                        <td>236.00</td>
                        </tr>
                        <tr>
                        <td>47</td>
                        <td>11505015990107</td>
                        <td>HARTANTO ADI KUSUMA PUTRA</td>
                        <td>233.50</td>
                        </tr>
                        <tr>
                        <td>48</td>
                        <td>11505015990214</td>
                        <td>NETHANIA CHRISTY</td>
                        <td>231.50</td>
                        </tr>
                        <tr>
                        <td>49</td>
                        <td>11505015990863</td>
                        <td>WIDYA NUR ALIMAH</td>
                        <td>231.50</td>
                        </tr>
                        <tr>
                        <td>50</td>
                        <td>11505015990258</td>
                        <td>PRITA TRIAS KUSUMAWATI</td>
                        <td>231.00</td>
                        </tr>
                        <tr>
                        <td>51</td>
                        <td>11505015991192</td>
                        <td>ZIDAN SUNDAVALENSA RAHMANI</td>
                        <td>229.50</td>
                        </tr>
                        <tr>
                        <td>52</td>
                        <td>11505015990152</td>
                        <td>MISDA LAVIDA SARI</td>
                        <td>229.00</td>
                        </tr>
                        <tr>
                        <td>53</td>
                        <td>11505015990134</td>
                        <td>LIA PUTRI DEWI ILUTAMA</td>
                        <td>229.00</td>
                        </tr>
                        <tr>
                        <td>54</td>
                        <td>11505015990623</td>
                        <td>NARGIS</td>
                        <td>228.50</td>
                        </tr>
                        <tr>
                        <td>55</td>
                        <td>11505015990676</td>
                        <td>NUGRAHA PUTRA MITRANDA</td>
                        <td>228.50</td>
                        </tr>
                        <tr>
                        <td>56</td>
                        <td>11505015990818</td>
                        <td>SABILA RAHMADANI AYU LARASATI</td>
                        <td>227.50</td>
                        </tr>
                        <tr>
                        <td>57</td>
                        <td>11505015990934</td>
                        <td>ALFIN CAHYA FIRMANSYAH</td>
                        <td>226.50</td>
                        </tr>
                        <tr>
                        <td>58</td>
                        <td>11505015990898</td>
                        <td>AGATHA KHARISMA DEWANTI</td>
                        <td>222.50</td>
                        </tr>
                        <tr>
                        <td>59</td>
                        <td>11505015990649</td>
                        <td>NIALIS SAADA AL HIDAYANI</td>
                        <td>221.50</td>
                        </tr>
                        <tr>
                        <td>60</td>
                        <td>11505015991138</td>
                        <td>TANTRA MAHENDRA AMIRULLAH</td>
                        <td>219.50</td>
                        </tr>
                        <tr>
                        <td>61</td>
                        <td>11505015990587</td>
                        <td>HEKSA SABRINA NURAJA</td>
                        <td>218.50</td>
                        </tr>
                        <tr>
                        <td>62</td>
                        <td>11505015990694</td>
                        <td>REGA DWI JOYVANDO ARIFIN</td>
                        <td>218.00</td>
                        </tr>
                        <tr>
                        <td>63</td>
                        <td>11505015990987</td>
                        <td>FEBRA WIDYANANDA</td>
                        <td>218.00</td>
                        </tr>
                        <tr>
                        <td>64</td>
                        <td>11505015990187</td>
                        <td>MUHAMMAD PANCAR SHIDDIQ</td>
                        <td>215.50</td>
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