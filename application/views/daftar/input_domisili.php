<h2>Langkah-langkah Pendaftaran</h2>
<ol class="progtrckr" data-progtrckr-steps="6">
    <li class="progtrckr-doing">(1)</li><!--
 --><li class="progtrckr-todo">(2)</li><!--
 --><li class="progtrckr-todo">(3)</li><!--
 --><li class="progtrckr-todo">(4)</li><!--
 --><li class="progtrckr-todo">(5)</li><!--
 --><li class="progtrckr-todo">(6)</li>
</ol>
<hr>

<div class="row">
	<div class="col-md-3">
		<div class="sidebar">
			<div style="padding-right: 5px;">
				<ol>
				    <li class="sidebar-list step-daftar-doing">
				    	<div>
					    	<p><span style="margin-right:10px;" class="fa fa-refresh"></span><b>Pilih Kategori</b></p>
                            <p style="color:#000000; margin:auto auto auto 25px;">
                                Pilih kategori Anda sesuai dengan nomor KK Anda.
                            </p>
				    	</div>
				    </li>
                    <li class="sidebar-list step-daftar">
						<div>
					    	<div>Input Nomor UN/US</div>
				    	</div>
				    </li>
                    <li class="sidebar-list step-daftar">
				    	<div>
					    	<div>Login Pendaftaran</div>
				    	</div>
				    </li>
                    <li class="sidebar-list step-daftar">
				    	<div>
					    	<div>Form Pendaftaran</div>
				    	</div>
				    </li>
                    <li class="sidebar-list step-daftar">
				    	<div>
					    	<div>Konfirmasi Akhir Pendaftaran</div>
				    	</div>
				    </li>
                    <li class="sidebar-list step-daftar">
				    	<div>
					    	<div>Bukti Pendaftaran</div>
				    	</div>
				    </li>
				</ol>
			</div>
		</div>
	</div>
    <div class="col-md-8">
        <div class="row" style="padding:10px;">
          <div class="col-sm-12">
            <div class="row">
              <h3>Pilih Kategori Calon Peserta Didik Baru</h3>
              <h3>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?></h3>
              <hr/>
              <?php echo form_open('pendaftaran', array('id' => 'inputDomisili', 'class'=>'form-horizontal', 'role'=>'form', 'method'=>'get')); ?>
              <!--<?php echo "<form id='inputDomisili' class='form-horizontal' action='"; echo base_url(); echo"/pendaftaran' method='get'>";?>-->
                <?php
                date_default_timezone_set('Asia/Jakarta');
                $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
                $endTime = $currentTime;
                if ($jalur == 'kawasan') {
                    $endTime = mktime(14, 0, 0, 7, 3, 2015);
                } else if ($jalur == 'umum') {
                    $endTime = mktime(14, 0, 0, 7, 9, 2015);
                }
                if ($currentTime > $endTime) $isClosed = true;
                else $isClosed = false;
                ?>
                <?php if ($isClosed): ?>
                <div class="row">
                  <div>
                    <label class="col-md-6">
                       <div class="panel panel-success">
                        <div class="panel-heading">
                            <b>Kategori Dalam Kota</b>
                        </div>
                        <div class="panel-body">
                            KK Surabaya - Lulusan Sekolah Surabaya
                                  <a class="green-tosca2" href="<?php echo site_url('umum/ketentuan#dalam_kota');?>" target="_blank"><small>(klik untuk melihat penjelasan tambahan!)</small></a>
                            <br>
                            <br>
                            <a class="btn-sm btn-info pull-right" href="#" onclick="cek_kk('1','1');">Daftar Kategori Dalam Kota</a>

                        </div>
                      </div>
                     </label>
                  </div>
                  <div>
                    <label class="col-md-6">
                       <div class="panel panel-danger">
                        <div class="panel-heading">
                            <b>Kategori Rekomendasi Dalam Kota</b>
                        </div>
                        <div class="panel-body">
                            KK Luar Surabaya - Lulusan Sekolah Surabaya
                                  <a class="green-tosca2" href="<?php echo site_url('umum/ketentuan#rekom_dalam');?>" target="_blank"><small>(klik untuk melihat penjelasan!)</small></a>
                            <br>
                            <br>
                            <a class="btn-sm btn-info pull-right" href="#" onclick="cek_kk('1','2');">Daftar Kategori Rekomendasi Dalam Kota</a>

                        </div>
                      </div>
                     </label>
                  </div>
                </div>
                <?php else: ?>
                <div class="row">
                  <div>
                    <label class="col-md-6">
                       <div class="panel panel-success">
                        <div class="panel-heading">
                            <b>Kategori Dalam Kota</b>
                        </div>
                        <div class="panel-body">
                            KK Surabaya - Lulusan Sekolah Surabaya
                                  <a class="green-tosca2" href="<?php echo site_url('umum/ketentuan#dalam_kota');?>" target="_blank"><small>(klik untuk melihat penjelasan tambahan!)</small></a>
                            <br>
                            <br>
                            <a class="btn-sm btn-info pull-right" href="#" onclick="cek_kk('1','1');">Daftar Kategori Dalam Kota</a>

                        </div>
                      </div>
                     </label>
                  </div>

                  <div>
                    <label class="col-md-6">
                       <div class="panel panel-success">
                        <div class="panel-heading">
                            <b>Kategori Mutasi</b>
                        </div>
                        <div class="panel-body">
                            KK Surabaya - Lulusan Sekolah Luar Surabaya
                                  <a class="green-tosca2" href="<?php echo site_url('umum/ketentuan#mutasi');?>" target="_blank"><small>(klik untuk melihat penjelasan!)</small></a>
                            <br>
                            <br>
                            <a class="btn-sm btn-info pull-right" href="#" onclick="cek_kk('2','1');">Daftar Kategori Mutasi</a>

                        </div>
                      </div>
                     </label>
                  </div>
                </div>
                <div class="row">
                  <div>
                    <label class="col-md-6">
                       <div class="panel panel-danger">
                        <div class="panel-heading">
                            <b>Kategori Rekomendasi Dalam Kota</b>
                        </div>
                        <div class="panel-body">
                            KK Luar Surabaya - Lulusan Sekolah Surabaya
                                  <a class="green-tosca2" href="<?php echo site_url('umum/ketentuan#rekom_dalam');?>" target="_blank"><small>(klik untuk melihat penjelasan!)</small></a>
                            <br>
                            <br>
                            <a class="btn-sm btn-info pull-right" href="#" onclick="cek_kk('1','2');">Daftar Kategori Rekomendasi Dalam Kota</a>

                        </div>
                      </div>
                     </label>
                  </div>
                  <div>
                    <label class="col-md-6">
                       <div class="panel panel-danger">
                        <div class="panel-heading">
                            <b>Kategori Luar Kota</b>
                        </div>
                        <div class="panel-body">
                            KK Luar Surabaya - Lulusan Sekolah Luar Surabaya
                                  <a class="green-tosca2" href="<?php echo site_url('umum/ketentuan#luar_kota');?>" target="_blank"><small>(klik untuk melihat penjelasan!)</small></a>
                            <br>
                            <br>
                            <a class="btn-sm btn-info pull-right" href="#" onclick="cek_kk('2','2');">Daftar Kategori Luar Kota</a>

                        </div>
                      </div>
                     </label>
                  </div>
                </div>
                <div class="row">
                  <div>
                    <label class="col-md-12">
                       <div class="panel panel-warning">
                        <div class="panel-heading">
                            <b>Kategori Dalam Kota ( Lulusan Tahun Lalu / Kejar Paket )</b>
                        </div>
                        <div class="panel-body">
                            Lulusan Tahun Lalu Dalam Kota dan Lulusan Kejar Paket A/B Dalam Kota
                            <br>
                            <br>
                            <a class="btn-sm btn-info pull-right" href="#" onclick="cek_kk('3','1');">Daftar Kategori Lulusan Tahun Lalu</a>

                        </div>
                      </div>
                     </label>
                  </div>
                </div>
                <?php endif; ?>
              </div>
              <br>

              <br>
              <p>
                  <?php
                  $attributes = 'class = "btn btn-danger"';
                  echo anchor('pendaftaran/batal', 'Batalkan Pendaftaran', $attributes);
                  ?>
              </p>

              <?php echo form_close(); ?>
          </div>
        </div>


    </div>
</div>

<div id="latihan" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
          </div>
          <div class="row">
            <center class="red">
              <h2><b>Pendaftaran Versi Latihan!</b></h2>
              <p>Data yang Anda masukkan pada pendaftaran versi latihan tidak akan disimpan dan digunakan dalam pendaftaran sebenarnya.</p>

              <button class="btn btn-info" data-dismiss="modal">Lanjut</button>
            </center>
          </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
 $(window).load(function(){
        // $('#latihan').modal('show');
        // $('#latihan').modal({backdrop:'static',keyboard:false, show:true});
    });

  function cek_kk(sekolah, kk)
    {
        var pesan='';

        if (kk==1){
            if(sekolah==1){
                pesan = "Apakah benar Anda merupakan warga Surabaya (dibuktikan dengan Kartu Keluarga Surabaya) atau Anda memenuhi ketentuan calon peserta didik kategori Dalam Kota seperti yang dijelaskan pada ketentuan <a class='green-tosca2' href='<?php echo site_url('umum/ketentuan#dalam_kota');?>' target='_blank'><b>nomor 1.b</b></a>?";
            }
            else if (sekolah==2){
                pesan = "Apakah benar Anda merupakan warga Surabaya (dibuktikan dengan Kartu Keluarga Surabaya) atau Anda memenuhi ketentuan <a class='green-tosca2' href='<?php echo site_url('umum/ketentuan#mutasi');?>' target='_blank'><b>nomor 2.b</b></a>?";
            }
            else {
                pesan = "Apakah benar Anda merupakan warga Surabaya (dibuktikan dengan Kartu Keluarga Surabaya) atau Anda memenuhi ketentuan calon peserta didik kategori Dalam Kota seperti yang dijelaskan pada ketentuan <a class='green-tosca2' href='<?php echo site_url('umum/ketentuan#dalam_kota');?>' target='_blank'><b>nomor 1.b</b></a>?";
            }
        }else if (kk==2){
            pesan = "Apakah benar Anda <b class='red'>BUKAN</b> merupakan warga Surabaya (tidak memiliki Kartu Keluarga Surabaya) ?";
        }

        bootbox.dialog({
        message: pesan,
        buttons: {
          main: {
            label: "Ya, Benar",
            className: "btn-primary",
            callback: function() {
                cek_sekolah(sekolah, kk);
            }
          },
          danger: {
            label: "Tidak, Salah",
            className: "btn-danger",
            callback: function() {
                cek_ulang();
            }
          }
        }
      });
    }

    function cek_ulang()
    {
        bootbox.dialog({
        message: "<b class='red'>Pilih Kategori Pendaftaran dengan seksama!<br/> Sesuaikan kembali kategori pendaftaran dengan wilayah asal sekolah dan Kartu Keluarga Anda!</b>",
      });
    }

  function cek_sekolah(sekolah, kk)
    {
        if (sekolah==1){
            pesan = "Apakah benar Anda merupakan lulusan sekolah di wilayah Kota Surabaya?";
        }else if (sekolah==2){
            pesan = "Apakah benar Anda <b class='red'>BUKAN</b> merupakan lulusan sekolah di wilayah Kota Surabaya?";
        }else if (sekolah==3){
            pesan = "Apakah benar Anda merupakan lulusan tahun lalu atau lulusan kerjar paket A/B sekolah di wilayah Kota Surabaya?";
        }

        bootbox.dialog({
        message:pesan,
        buttons: {
          main: {
            label: "Ya, Benar",
            className: "btn-primary",
            callback: function() {
              window.location = "<?php echo site_url('pendaftaran?jalur='.$jalur.'&jenjang='.$jenjang);?>"+"&kk="+kk+"&sekolah="+sekolah;
            }
          },
          danger: {
            label: "Tidak, Salah",
            className: "btn-danger",
            callback: function() {
                cek_ulang();
            }
          }
        }
      });
    }
</script>

