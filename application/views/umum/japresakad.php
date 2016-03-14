<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1><small>Pengumuman Hasil Seleksi</small></h1>
        <h2>PPDB Jalur Prestasi Akademis</h2>

        <ol> 
            <li>Daftar Ulang tanggal 27 Juni 2015 di sekolah tujuan.</li> 
            <li>Membawa fotokopi surat keterangan lulus/UN/US dengan menunjukkan aslinya.</li> 
            <li>Membawa fotokopi sertifikat kejuaraan dengan menunjukkan aslinya.</li> 
            <li>Membawa fotokopi kartu keluarga dengan menunjukkan aslinya.</li>
        </ol>
        <br/>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="page-control" data-role="page-control">
           <!--  <span class="menu-pull"></span>
            <div class="menu-pull-bar">Hasil Seleksi</div> -->
            
            <ul class="nav nav-tabs">
                <li class="active nav-list green-light"><a href="#smp">SMP</a></li>
                <li class="nav-list green-light"><a href="#sma">SMA</a></li>
            </ul>

            <div class="frames tab-content">
                <div class="frame tab-pane active" id="smp">
                    <h2>Hasil Seleksi PPDB Jalur Prestasi Akademis SMP Negeri</h2>
                    <table class="table table-striped table-hover" id="table-smp">
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th>NAMA</th>
                          <th>ASAL SEKOLAH</th>
                          <th>SEKOLAH TUJUAN</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>NI NYOMAN TRIANA WIDHIASTUTI</td>
                          <td>SDN KALISARI II</td>
                          <td>SMPN 6</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>BAGUS NARENDRA</td>
                          <td>SD MENTARI KASIH</td>
                          <td>SMPN 1</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>IGNATIUS PHUAN JHATU AHIMSA</td>
                          <td>SDN MANUKAN KULON</td>
                          <td>SMPN 26</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="frame tab-pane" id="sma">
                    <h2>Hasil Seleksi PPDB Jalur Prestasi Akademis SMA Negeri</h2>
                    <table class="table table-striped table-hover" id="table-sma">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>ASAL SEKOLAH</th>
                            <th>SEKOLAH TUJUAN</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>ANBIYA NAWFAL ALFINA</td>
                            <td>SMP AL-AZHAR 13</td>
                            <td>SMAN 2</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>DHIA FAIRUZ SHABRINA</td>
                            <td>SMPN 1</td>
                            <td>SMAN 5</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>KHARISM KHODIJA KUSNADI</td>
                            <td>SMPN 9</td>
                            <td>SMAN 5</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>NAUFAL ACHMAD TSANY DAFFA</td>
                            <td>SMPN 1 </td>
                            <td>SMAN 5</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>AMARTHYA BENIGNA ACHMADI</td>
                            <td>SMPN 1</td>
                            <td>SMAN 5</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>MARSHA NABILAH WIBOWO</td>
                            <td>SMPN 1</td>
                            <td>SMAN 5</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
      $('#table-sma').dataTable( {
        "bLengthChange": false
      } );

      $('#table-smp').dataTable( {
        "bLengthChange": false
      } );
  } );
</script>