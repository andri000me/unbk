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
                    <h2>Hasil Seleksi SMPN 46</h2>
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
                            <td>11505014060249</td>
                            <td>ELIZABETH SEPHIA OCTA TIARA SEVEN TEN TWO</td>
                            <td>263.00</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>11505014060578</td>
                            <td>AISYAH SALSA BILA</td>
                            <td>250.50</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>11505014060356</td>
                            <td>RENDY JHONATAN ALEXANDER</td>
                            <td>248.50</td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>11505014060134</td>
                            <td>FEBRIANTI HERWAHYUNI</td>
                            <td>245.50</td>
                            </tr>
                            <tr>
                            <td>5</td>
                            <td>11505014060827</td>
                            <td>SITI ROSITA OKTAVIA</td>
                            <td>245.00</td>
                            </tr>
                            <tr>
                            <td>6</td>
                            <td>11505014061307</td>
                            <td>TIARA NAYLA SAKTI</td>
                            <td>243.50</td>
                            </tr>
                            <tr>
                            <td>7</td>
                            <td>11505014060605</td>
                            <td>KEMALA AYU ADE FITRIANSYAH</td>
                            <td>242.50</td>
                            </tr>
                            <tr>
                            <td>8</td>
                            <td>11505014060534</td>
                            <td>SEIKA AYU FERNANDA</td>
                            <td>240.00</td>
                            </tr>
                            <tr>
                            <td>9</td>
                            <td>11505014060027</td>
                            <td>AZZAHRA FIRDA AMALIA</td>
                            <td>239.00</td>
                            </tr>
                            <tr>
                            <td>10</td>
                            <td>11505014060392</td>
                            <td>AULIA AZZAHRAH AKHYAK PUTRI</td>
                            <td>239.00</td>
                            </tr>
                            <tr>
                            <td>11</td>
                            <td>11505014061094</td>
                            <td>ACHMAD GHOZALI KUBRO</td>
                            <td>238.00</td>
                            </tr>
                            <tr>
                            <td>12</td>
                            <td>11505014060267</td>
                            <td>FRISCA CAHYONO</td>
                            <td>237.50</td>
                            </tr>
                            <tr>
                            <td>13</td>
                            <td>11505014060107</td>
                            <td>VIRDA PRAWESTI DEWI ARIMBI</td>
                            <td>237.00</td>
                            </tr>
                            <tr>
                            <td>14</td>
                            <td>11505014060214</td>
                            <td>ADISTY KUSUMA NINGTYAS</td>
                            <td>237.00</td>
                            </tr>
                            <tr>
                            <td>15</td>
                            <td>11505014061005</td>
                            <td>VITO SAVERO CHRISTIYADI</td>
                            <td>237.00</td>
                            </tr>
                            <tr>
                            <td>16</td>
                            <td>11505014061103</td>
                            <td>AVIANTO DWI NUGROHO</td>
                            <td>237.00</td>
                            </tr>
                            <tr>
                            <td>17</td>
                            <td>11505014061432</td>
                            <td>ARIENTYA SALSABILLA</td>
                            <td>237.00</td>
                            </tr>
                            <tr>
                            <td>18</td>
                            <td>11505014060347</td>
                            <td>ZEFANYA YUSTINUS MARTIN</td>
                            <td>236.50</td>
                            </tr>
                            <tr>
                            <td>19</td>
                            <td>11505014060507</td>
                            <td>MERCY FADILA RAMADANI</td>
                            <td>235.00</td>
                            </tr>
                            <tr>
                            <td>20</td>
                            <td>11505014061156</td>
                            <td>SAUSAN KAMILA ZAIN</td>
                            <td>234.50</td>
                            </tr>
                            <tr>
                            <td>21</td>
                            <td>11505014060329</td>
                            <td>YOHANES OKTAVIANTO</td>
                            <td>232.00</td>
                            </tr>
                            <tr>
                            <td>22</td>
                            <td>11505014060383</td>
                            <td>AL-FIAH FEBRIYANA</td>
                            <td>232.00</td>
                            </tr>
                            <tr>
                            <td>23</td>
                            <td>11505014060889</td>
                            <td>FIDELA EVELYNA SALSABILA</td>
                            <td>231.50</td>
                            </tr>
                            <tr>
                            <td>24</td>
                            <td>11505014060632</td>
                            <td>PUTERI CIPTA MULIA</td>
                            <td>231.00</td>
                            </tr>
                            <tr>
                            <td>25</td>
                            <td>11505014061245</td>
                            <td>ABDULLAH MUHAMMAD YAHYA</td>
                            <td>231.00</td>
                            </tr>
                            <tr>
                            <td>26</td>
                            <td>11505014061227</td>
                            <td>NI PUTU EKA HESTIANI</td>
                            <td>228.50</td>
                            </tr>
                            <tr>
                            <td>27</td>
                            <td>11505014060445</td>
                            <td>NURUL JANNAH WAHID DIAH</td>
                            <td>227.50</td>
                            </tr>
                            <tr>
                            <td>28</td>
                            <td>11505014060783</td>
                            <td>DEVANIA AJENG KUSWARDANINGTYAS</td>
                            <td>227.00</td>
                            </tr>
                            <tr>
                            <td>29</td>
                            <td>11505014060294</td>
                            <td>DEVITA ARDENIA</td>
                            <td>226.50</td>
                            </tr>
                            <tr>
                            <td>30</td>
                            <td>11505014060694</td>
                            <td>KRISNA AYU MUTIARA</td>
                            <td>226.50</td>
                            </tr>
                            <tr>
                            <td>31</td>
                            <td>11505014060552</td>
                            <td>MOCHAMMAD RIZKY YOGA PRATAMA</td>
                            <td>224.50</td>
                            </tr>
                            <tr>
                            <td>32</td>
                            <td>11505014061254</td>
                            <td>ANANDA RAFI PRATAMA</td>
                            <td>224.50</td>
                            </tr>
                            <tr>
                            <td>33</td>
                            <td>11505014060436</td>
                            <td>MOCH. NABIL DAFFA FAUZAN YUNUS</td>
                            <td>224.00</td>
                            </tr>
                            <tr>
                            <td>34</td>
                            <td>11505014060587</td>
                            <td>FEBRIANTO NUGROHO</td>
                            <td>221.50</td>
                            </tr>
                            <tr>
                            <td>35</td>
                            <td>11505014060872</td>
                            <td>EXCELINO DWI SUPRISTIAWAN</td>
                            <td>221.50</td>
                            </tr>
                            <tr>
                            <td>36</td>
                            <td>11505014060125</td>
                            <td>ARDA LENA ARI PURWANTI</td>
                            <td>221.00</td>
                            </tr>
                            <tr>
                            <td>37</td>
                            <td>11505014060169</td>
                            <td>RETNO EKA DEWI JULI PAMULIANTI</td>
                            <td>221.00</td>
                            </tr>
                            <tr>
                            <td>38</td>
                            <td>11505014060774</td>
                            <td>DENIS RACHMADTULLAH BASUKI</td>
                            <td>219.00</td>
                            </tr>
                            <tr>
                            <td>39</td>
                            <td>11505014060543</td>
                            <td>RADEN MOHAMMAD ZAKY AR-RAFI</td>
                            <td>218.50</td>
                            </tr>
                            <tr>
                            <td>40</td>
                            <td>11505014061352</td>
                            <td>MUHAMMAD DWI CAHYONO</td>
                            <td>218.50</td>
                            </tr>
                            <tr>
                            <td>41</td>
                            <td>11505014060836</td>
                            <td>AMELINDA SURYA WARDHANI</td>
                            <td>218.00</td>
                            </tr>
                            <tr>
                            <td>42</td>
                            <td>11505014060374</td>
                            <td>ADYTIA ROCHMANSYAH</td>
                            <td>217.50</td>
                            </tr>
                            <tr>
                            <td>43</td>
                            <td>11505014060916</td>
                            <td>PUTRI KIREY RAMADHANI</td>
                            <td>217.50</td>
                            </tr>
                            <tr>
                            <td>44</td>
                            <td>11505014060489</td>
                            <td>AZ ZAKIYYAH ATHIFA TSABITA WARDHANI</td>
                            <td>215.50</td>
                            </tr>
                            <tr>
                            <td>45</td>
                            <td>11505014060312</td>
                            <td>FITRA EKA NURYANA</td>
                            <td>214.00</td>
                            </tr>
                            <tr>
                            <td>46</td>
                            <td>11505014060427</td>
                            <td>MARCELL RAVI KUNCORO</td>
                            <td>214.00</td>
                            </tr>
                            <tr>
                            <td>47</td>
                            <td>11505014060303</td>
                            <td>DINAR RAMADHANI SAPUTRI</td>
                            <td>213.50</td>
                            </tr>
                            <tr>
                            <td>48</td>
                            <td>11505014060987</td>
                            <td>NAJ'MA AURELIA RACHMAN</td>
                            <td>212.00</td>
                            </tr>
                            <tr>
                            <td>49</td>
                            <td>11505014061147</td>
                            <td>MUHAMMAD RIDHWAN SYAKIR</td>
                            <td>212.00</td>
                            </tr>
                            <tr>
                            <td>50</td>
                            <td>11505014060187</td>
                            <td>SHAMGAR BRYAN EBENHEAZER  DONESLY</td>
                            <td>212.00</td>
                            </tr>
                            <tr>
                            <td>51</td>
                            <td>11505014060054</td>
                            <td>MOCHAMAD RICO SAPUTRA</td>
                            <td>211.50</td>
                            </tr>
                            <tr>
                            <td>52</td>
                            <td>11505014060472</td>
                            <td>AKBAR FAJARIYANTO</td>
                            <td>211.50</td>
                            </tr>
                            <tr>
                            <td>53</td>
                            <td>11505014060276</td>
                            <td>MOCHAMMAD ZAKHARIA</td>
                            <td>210.50</td>
                            </tr>
                            <tr>
                            <td>54</td>
                            <td>11505014060569</td>
                            <td>ADITYA CAHYA PUTRA SUSANTO</td>
                            <td>209.50</td>
                            </tr>
                            <tr>
                            <td>55</td>
                            <td>11505014060845</td>
                            <td>ARYA ANDRIANTO</td>
                            <td>209.50</td>
                            </tr>
                            <tr>
                            <td>56</td>
                            <td>11505014060338</td>
                            <td>YO VIAN CHRISTIAN JALU</td>
                            <td>209.00</td>
                            </tr>
                            <tr>
                            <td>57</td>
                            <td>11505014060809</td>
                            <td>RADITYA PRASETYO PUTRA</td>
                            <td>209.00</td>
                            </tr>
                            <tr>
                            <td>58</td>
                            <td>11505014061218</td>
                            <td>MUHAMMAD OSCAR APRIANSYAH</td>
                            <td>209.00</td>
                            </tr>
                            <tr>
                            <td>59</td>
                            <td>11505014060454</td>
                            <td>RAFI GREATAKBAR REWARESMI</td>
                            <td>208.00</td>
                            </tr>
                            <tr>
                            <td>60</td>
                            <td>11505014060685</td>
                            <td>ERLANGGA SATRIO YUDHA</td>
                            <td>207.00</td>
                            </tr>
                            <tr>
                            <td>61</td>
                            <td>11505014061209</td>
                            <td>MOCH. RAIHAN MUZAKKI OKTAVIANSYAH</td>
                            <td>207.00</td>
                            </tr>
                            <tr>
                            <td>62</td>
                            <td>11505014060525</td>
                            <td>RAFI ADITYA EFFENDI</td>
                            <td>206.00</td>
                            </tr>
                            <tr>
                            <td>63</td>
                            <td>11505014060996</td>
                            <td>SATRIA BAGUS KURNIAWAN</td>
                            <td>206.00</td>
                            </tr>
                            <tr>
                            <td>64</td>
                            <td>11505014060463</td>
                            <td>RAIS RAJAB BINATARA</td>
                            <td>204.50</td>
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