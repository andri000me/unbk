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
                    <h2>Hasil Seleksi SMPN 44</h2>
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
                          <td>11505012940276</td>
                          <td>LELY PUSPITASARI</td>
                          <td>246.50</td>
                          </tr>
                          <tr>
                          <td>2</td>
                          <td>11505012940632</td>
                          <td>KHARIMATUN NISA</td>
                          <td>246.00</td>
                          </tr>
                          <tr>
                          <td>3</td>
                          <td>11505012940498</td>
                          <td>MARIA ULFA</td>
                          <td>244.00</td>
                          </tr>
                          <tr>
                          <td>4</td>
                          <td>11505012940329</td>
                          <td>RAGIL AYU KUSUMANINGTYAS</td>
                          <td>240.00</td>
                          </tr>
                          <tr>
                          <td>5</td>
                          <td>11505012940249</td>
                          <td>KHOIRUL ANAS</td>
                          <td>235.50</td>
                          </tr>
                          <tr>
                          <td>6</td>
                          <td>11505012940258</td>
                          <td>LAILATUL KOMARIYAH</td>
                          <td>232.00</td>
                          </tr>
                          <tr>
                          <td>7</td>
                          <td>11505012940205</td>
                          <td>ALDI KRISTIAWAN</td>
                          <td>228.00</td>
                          </tr>
                          <tr>
                          <td>8</td>
                          <td>11505012940338</td>
                          <td>RISKA AMELIA</td>
                          <td>227.00</td>
                          </tr>
                          <tr>
                          <td>9</td>
                          <td>11505012940267</td>
                          <td>LAILATUL MAGHFIROH</td>
                          <td>218.50</td>
                          </tr>
                          <tr>
                          <td>10</td>
                          <td>11505012940312</td>
                          <td>RAFI</td>
                          <td>218.50</td>
                          </tr>
                          <tr>
                          <td>11</td>
                          <td>11505012940507</td>
                          <td>SITI MAISAROH</td>
                          <td>217.00</td>
                          </tr>
                          <tr>
                          <td>12</td>
                          <td>11505012941129</td>
                          <td>ROSALINDA LAILI</td>
                          <td>213.50</td>
                          </tr>
                          <tr>
                          <td>13</td>
                          <td>11505012940187</td>
                          <td>MUHAMMAD ROSUL</td>
                          <td>205.00</td>
                          </tr>
                          <tr>
                          <td>14</td>
                          <td>11505012940098</td>
                          <td>ACHMAD MAULANA</td>
                          <td>201.00</td>
                          </tr>
                          <tr>
                          <td>15</td>
                          <td>11505012940463</td>
                          <td>AINUR ROCHMAH</td>
                          <td>195.00</td>
                          </tr>
                          <tr>
                          <td>16</td>
                          <td>11505012940036</td>
                          <td>LUTFIATUL HASANAH</td>
                          <td>192.50</td>
                          </tr>
                          <tr>
                          <td>17</td>
                          <td>11505012940658</td>
                          <td>MOHAMMAD CHOIRUL ANAM</td>
                          <td>192.50</td>
                          </tr>
                          <tr>
                          <td>18</td>
                          <td>11505012940116</td>
                          <td>RENDY PUTRA FIRMANSYAH</td>
                          <td>192.00</td>
                          </tr>
                          <tr>
                          <td>19</td>
                          <td>11505012940827</td>
                          <td>FITRIA</td>
                          <td>192.00</td>
                          </tr>
                          <tr>
                          <td>20</td>
                          <td>11505012940214</td>
                          <td>AMELIA FEBRIANTI</td>
                          <td>191.00</td>
                          </tr>
                          <tr>
                          <td>21</td>
                          <td>11505012940125</td>
                          <td>SIROJUDIN</td>
                          <td>189.00</td>
                          </tr>
                          <tr>
                          <td>22</td>
                          <td>11505012940605</td>
                          <td>FARIDA YUNITA SARI</td>
                          <td>188.00</td>
                          </tr>
                          <tr>
                          <td>23</td>
                          <td>11505012940409</td>
                          <td>TRI AGUSTINA</td>
                          <td>187.50</td>
                          </tr>
                          <tr>
                          <td>24</td>
                          <td>11505012940623</td>
                          <td>INDAH SARI</td>
                          <td>186.00</td>
                          </tr>
                          <tr>
                          <td>25</td>
                          <td>11505012940649</td>
                          <td>LAILATUS SHOLIHA</td>
                          <td>186.00</td>
                          </tr>
                          <tr>
                          <td>26</td>
                          <td>11505012940836</td>
                          <td>FASHA VINDY PERTIWI SETIAWAN</td>
                          <td>186.00</td>
                          </tr>
                          <tr>
                          <td>27</td>
                          <td>11505012940569</td>
                          <td>ADAM BAIHAKI</td>
                          <td>185.50</td>
                          </tr>
                          <tr>
                          <td>28</td>
                          <td>11505012940107</td>
                          <td>AROFA</td>
                          <td>184.50</td>
                          </tr>
                          <tr>
                          <td>29</td>
                          <td>11505012940667</td>
                          <td>MOHAMAD FIKAR AL FARISI</td>
                          <td>181.50</td>
                          </tr>
                          <tr>
                          <td>30</td>
                          <td>11505012941085</td>
                          <td>NADIA RACHMAWATI PUTRI</td>
                          <td>178.00</td>
                          </tr>
                          <tr>
                          <td>31</td>
                          <td>11505012940845</td>
                          <td>MOHAMMAD FARHAN</td>
                          <td>177.50</td>
                          </tr>
                          <tr>
                          <td>32</td>
                          <td>11505012940863</td>
                          <td>MOCHAMAD ALIMAN</td>
                          <td>170.50</td>
                          </tr>
                          <tr>
                          <td>33</td>
                          <td>11505012940907</td>
                          <td>KHUMAIROH</td>
                          <td>165.50</td>
                          </tr>
                          <tr>
                          <td>34</td>
                          <td>11505012940987</td>
                          <td>FEBRIAN PRATAMA SYAHPUTRA</td>
                          <td>165.50</td>
                          </tr>
                          <tr>
                          <td>35</td>
                          <td>11505012941005</td>
                          <td>HILYATUL WARDAH</td>
                          <td>165.00</td>
                          </tr>
                          <tr>
                          <td>36</td>
                          <td>11505012941076</td>
                          <td>MUTIARA NUR AINI AZ ZAHRA</td>
                          <td>163.50</td>
                          </tr>
                          <tr>
                          <td>37</td>
                          <td>11505012940783</td>
                          <td>HAYATI</td>
                          <td>162.50</td>
                          </tr>
                          <tr>
                          <td>38</td>
                          <td>11505012941094</td>
                          <td>NUR AINI</td>
                          <td>158.50</td>
                          </tr>
                          <tr>
                          <td>39</td>
                          <td>11505012940969</td>
                          <td>FAIZUR ROSYAD</td>
                          <td>157.50</td>
                          </tr>
                          <tr>
                          <td>40</td>
                          <td>11505012940596</td>
                          <td>FANI AYU LARASATI</td>
                          <td>156.00</td>
                          </tr>
                          <tr>
                          <td>41</td>
                          <td>11505012940454</td>
                          <td>ADINDA INDRA REFIZA PUTRI</td>
                          <td>153.50</td>
                          </tr>
                          <tr>
                          <td>42</td>
                          <td>11505012940587</td>
                          <td>AYU WULANDARI</td>
                          <td>152.50</td>
                          </tr>
                          <tr>
                          <td>43</td>
                          <td>11505012941014</td>
                          <td>MOCH.ALBAS RIZALDI</td>
                          <td>147.00</td>
                          </tr>
                          <tr>
                          <td>44</td>
                          <td>11505012940712</td>
                          <td>SULTAN B. BADRUS YAMANI</td>
                          <td>144.50</td>
                          </tr>
                          <tr>
                          <td>45</td>
                          <td>11505012941049</td>
                          <td>RIDHOI</td>
                          <td>143.50</td>
                          </tr>
                          <tr>
                          <td>46</td>
                          <td>11505012940196</td>
                          <td>ACHMAD SAFAAT</td>
                          <td>135.50</td>
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