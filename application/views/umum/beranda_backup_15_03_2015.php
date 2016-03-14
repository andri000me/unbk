<?php
	date_default_timezone_set('Asia/Jakarta');
	$currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
	if ($currentTime > mktime(0, 0, 0, 7, 7, 2015)):
?>
<div class="row info-content">
	<div class="col-sm-12">
		<div class="row">
			<style>.link-penting {color :white; font-style: italic;} .link-penting:hover{color :white; font-style: italic; text-decoration: underline;}</style>
			<div class="col-sm-12 bg-danger" style="padding: 15px 10px 15px 10px; color:white;">
				<ul>
					<li><h3>Pengumuman Pemenuhan Pagu PPDB Jalur Umum Gelombang I dapat dilihat pada menu Pengumuman Pemenuhan Pagu atau lihat di <a class="link-penting" href="<?php echo site_url('/umum/pengumumanpemenuhanpagu');?>">pengumuman pemenuhan pagu PPDB jalur umum gelombang I</a>.</h3></li>
					<li>Daftar Ulang Pemenuhan Pagu PPDB Jalur Umum Gelombang I dilaksanakan pada 11 Juli 2015 di sekolah tempat diterima.</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php else: ?>
 <div class="row info-content">
	<div class="col-sm-12">
		<div class="row" id="header-isi">
		  <div class="col-sm-12">
		    <div>
		        <h2><b>Informasi</b> Penting</h2>
		    </div>
		  </div>
		</div>
		<div class="row">
			<style>.link-penting {color :white; font-style: italic;} .link-penting:hover{color :white; font-style: italic; text-decoration: underline;}</style>
		    <div class="col-sm-12 bg-danger" style="padding: 15px 10px 15px 10px; color:white;">
		    	<ul>
		    		<li>Daftar ulang pemenuhan pagu sekolah kawasan dimulai Sabtu tanggal 5 Juli 2015 hingga Senin 7 Juli 2015 pukul 14.00 WIB di sekolah tujuan.</li>

		    		<li>Terdapat lima SMA Sekolah Kawasan yang membuka pendaftaaran Jalur Umum. Diantaranya SMAN 3, SMAN 13, SMAN 19, SMAN 20, dan SMAN 21. Pagu Luar Kota dan Pagu Rekomendasi Dalam Kota di SMAN 13, SMAN 20, dan SMAN 21 sudah penuh oleh hasil seleksi Pendaftaran Kawasan. Pada SMAN 3 Pagu Luar Kota tersisa 2 dan Pagu Rekomendasi Dalam Kota tersisa 1. Pada SMAN 19 Pagu Luar Kota tersisa 1.</li>
		    		<hr>
		    		<li>Pengumuman pemenuhan pagu PPDB Sekolah Kawasan dapat dilihat pada menu <b>Pengumuman Pemenuhan Pagu</b> atau lihat di  <a class="link-penting" href="<?php echo site_url('umum/pengumumanpemenuhanpagu');?>"> pengumuman pemenuhan pagu.</a></li>
		    		<li>Daftar ulang PPDB Sekolah Kawasan dilakukan pada 3 Juli 2015 pukul 08.00 - 14.00 dan 4 Juli 2015 pukul 08.00 - 14.00. Bagi siswa yang diterima pada PPDB Sekolah Kawasan dapat mengunduh bukti seleksi di  <a class="link-penting" href="<?php echo site_url('umum/pilihhasil');?>"> pengumuman PPDB Sekolah Kawasan.</a></li>
		    		<li>PPDB SD diakses melalui <a class="link-penting" href="http://9c0e96.sd.ppdbsurabaya.net/">ini</a></li>
		   			<br/><small style="font-style: italic;">tanggal perubahan informasi : 2 Juli 2015</small>
		   			
		    	</ul>
		     </div>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- 
<div class="row info-content">
	<div class="row" id="header-isi">
	    <div class="col-sm-12">
	        <div>
	            <h1>Sambutan</h1>
	            <h3>Kepala Dinas Pendidikan Kota Surabaya</h3>
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-sm-12">
	        <img src="<?php echo URL_STATIC;?>/img/kadin2.jpg" style="float: left; margin-right: 20px; margin-bottom: 20px; " />
	        <p align="justify">Assalamu’alaikum  Wr. Wb,</p>

	        <p align="justify">Puji syukur kami panjatkan ke hadirat Allah SWT yang telah membimbing Dinas Pendidikan Kota Surabaya untuk kembali diberi kesempatan melayani Calon Peserta Didik Baru berupa Program Penerimaan Peserta Didik Baru <i>Paperless On line</i> tahun pelajaran 2015/2015</p>
	        <p align="justify">Penerimaan Peserta Didik Baru (PPDB), yang masih banyak disebut sebagai Penerimaan Siswa Baru (PSB), sering membuat orang tua (masyarakat) resah memikirkan putra-putrinya untuk mendaftarkan ke sekolah yang lebih tinggi, yaitu lulusan SD ke jenjang SMP atau lulusan SMP ke jenjang SMA/SMK
	        <a href="<?php echo site_url('umum/sambutan')?>"> ... baca selengkapnya</a>
	        </p>          
	    </div>
	</div>  
</div>    

<div class="row info-content">
	<div class="col-sm-12">
		<div class="row" id="header-isi">
		  <div class="col-sm-12">
		    <div>
		        <h2>Jalur PPDB Surabaya</h2>
		    </div>
		  </div>
		</div>
		<div class="row">
	        <div class="panel panel-success">
	          	<div class="panel-body">
	          		 <div class="row">
						<div class="col-sm-12">
							<div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
								<iframe allowfullscreen="" src="http://www.youtube.com/embed/lSaYXboP1G8?feature=player_detailpage" frameborder="0" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" height="500"></iframe>
							</div>
						</div>
					</div>  
	          	</div>
	        </div>
		</div>
        <div class="row">
            <div class="col-xs-6 col-md-3">
            <a href="<?php echo site_url('umum/video');?>#video1" class="thumbnail">
              <img src="<?php echo URL_STATIC;?>/img/video1.png" alt="...">
            </a>
            </div>
            <div class="col-xs-6 col-md-3">
            <a href="<?php echo site_url('umum/video');?>#video2" class="thumbnail">
              <img src="<?php echo URL_STATIC;?>/img/video2.png" alt="...">
            </a>
            </div>
            <div class="col-xs-6 col-md-3">
            <a href="<?php echo site_url('umum/video');?>#video3" class="thumbnail">
              <img src="<?php echo URL_STATIC;?>/img/video3.png" alt="...">
            </a>
            </div>
            <a href="<?php echo site_url('umum/video');?>" >Lihat video lainnya...</a>
        </div>

	</div>
</div> -->

<div class="row info-content">
	<div class="col-sm-12">

		 <?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(0, 0, 0, 6, 26, 2015);
            $end = mktime(23, 59, 59, 6, 28, 2015);
            if (($currentTime < $end) && ($currentTime > $start))
            {?>
		        <div class="row" id="header-isi">
				  	<div class="col-sm-12">
					    <div>
					        <h2><b>Pendaftaran</b> PPDB Sekolah Kawasan</h2>
					    </div>
				 	</div>
				</div>
				<div class="row">
				    <div class="col-sm-4">
				    	<a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=kawasan&jenjang=smp');?>">
					        <div class="panel panel-success">
					          <div class="panel-heading">
					            <h3 class="panel-title">Pendaftaran SMP Jalur Kawasan</h3>
					          </div>
					          	<div class="panel-body">
				                    <div class="icon" style="border:none; float:left; margin-right:10px;">
				                        <img src="<?php echo URL_STATIC;?>/img/icon_smp.png" height="45">
				                    </div>
				                    <div>
				                        <p class="fg-color-black">Pendaftaran Jalur Sekolah Kawasan</p>
				                    </div>
					          	</div>
					        </div>
				        </a>
				      </div>

				      <div class="col-sm-4">
				      	<a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=kawasan&jenjang=sma');?>">
					        <div class="panel panel-info">
					          <div class="panel-heading">
					            <h3 class="panel-title">Pendaftaran SMA Jalur Kawasan</h3>
					          </div>
					          	<div class="panel-body">
				                    <div class="icon" style="border:none; float:left; margin-right:3px;">
				                        <img src="<?php echo URL_STATIC;?>/img/icon_sma.png" height="45">
				                    </div>
				                    <div>
				                        <p class="fg-color-black">Pendaftaran Jalur Sekolah Kawasan</p>
				                    </div>
					          	</div>
					        </div>
				        </a>
				      </div>
				</div>
		<?php }?>
 		<?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(0, 0, 0, 7, 3, 2015);
            $end = mktime(23, 59, 59, 7, 6, 2015);
            if (($currentTime < $end) && ($currentTime > $start))
            {?>
		        <div class="row" id="header-isi">
				  <div class="col-sm-12">
				    <div>
				        <h2><b>Pendaftaran</b> PPDB Jalur Umum</h2>
				    </div>
				 </div>
				</div>
				<div class="row">
				    <div class="col-sm-4">
				    	<a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=umum&jenjang=smp');?>">
					        <div class="panel panel-success">
					          <div class="panel-heading">
					            <h3 class="panel-title">Pendaftaran SMP Jalur Umum</h3>
					          </div>
					          	<div class="panel-body">
				                    <div class="icon" style="border:none; float:left; margin-right:10px;">
				                        <img src="<?php echo URL_STATIC;?>/img/icon_smp.png" height="45">
				                    </div>
				                    <div>
				                        <p class="fg-color-black">Pendaftaran Jalur Sekolah Umum</p>
				                    </div>
					          	</div>
					        </div>
				        </a>
				      </div>

				      <div class="col-sm-4">
				      	<a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=umum&jenjang=sma');?>">
					        <div class="panel panel-info">
					          <div class="panel-heading">
					            <h3 class="panel-title">Pendaftaran SMA Jalur Umum</h3>
					          </div>
					          	<div class="panel-body">
				                    <div class="icon" style="border:none; float:left; margin-right:3px;">
				                        <img src="<?php echo URL_STATIC;?>/img/icon_sma.png" height="45">
				                    </div>
				                    <div>
				                        <p class="fg-color-black">Pendaftaran Jalur Sekolah Umum</p>
				                    </div>
					          	</div>
					        </div>
				        </a>
				      </div>

				      <div class="col-sm-4">
				      	<a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=umum&jenjang=smk');?>">
					        <div class="panel panel-warning">
						        <div class="panel-heading">
						        	<h3 class="panel-title">Pendaftaran SMK Jalur Umum</h3>
						        </div>
			          			<div class="panel-body">
			                   		<div class="icon" style="border:none; float:left; margin-right:10px;">
		                        		<img src="<?php echo URL_STATIC;?>/img/icon_smk.png" height="45">
			                    	</div>
				                    <div>
				                        <p class="fg-color-black">Pendaftaran Jalur Sekolah Umum</p>
				                    </div>
			         		 	</div>
					        </div>
				        </a>
				      </div> 
				</div>
		<?php }?>

	</div>
</div>

<div class="row info-content">
	<div class="col-sm-12">
		<?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(0, 0, 0, 6, 26, 2015);
            if ($currentTime > $start)
            {?>
				<div class="row" id="header-isi">
				  <div class="col-sm-12">
				    <div>
				        <h2><b>Rekap</b> Pendaftaran PPDB</h2>
				    </div>
				  </div>
				</div>
		<?php } ?>

		<?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(0, 0, 0, 7, 3, 2015);
            if ($currentTime > $start)
            {?>
				<div class="row">
				    <div class="col-sm-4">
				        <a href="<?php echo site_url('rekap/lihat/smp/umum');?>">
				          <div class="panel panel-success">
				            <div class="panel-heading">
				              <h3 class="panel-title">Rekap Pendaftaran SMP</h3>
				            </div>
				            <div class="panel-body">
				                <div class="icon" style="border:none; float:left; margin-right:10px;">
				                    <img src="<?php echo URL_STATIC;?>/img/icon_smp.png" height="45">
				                </div>
				                <div>
				                    <p class="fg-color-black">Rekap Pendaftaran Jalur Sekolah Umum</p>
				                </div>
				            </div>
				          </div>
				        </a>
				      </div>

				      <div class="col-sm-4">
				        <a href="<?php echo site_url('rekap/lihat/sma/umum');?>">
				          <div class="panel panel-info">
				            <div class="panel-heading">
				              <h3 class="panel-title">Rekap Pendaftaran SMA</h3>
				            </div>
				            <div class="panel-body">
				                <div class="icon" style="border:none; float:left; margin-right:3px;">
				                    <img src="<?php echo URL_STATIC;?>/img/icon_sma.png" height="45">
				                </div>
				                <div>
				                    <p class="fg-color-black">Rekap Pendaftaran Jalur Sekolah Umum</p>
				                </div>
				            </div>
				          </div>
				        </a>
				      </div>

				      <div class="col-sm-4">
				        <a href="<?php echo site_url('rekap/lihat/smk/umum');?>">
				          <div class="panel panel-warning">
				            <div class="panel-heading">
				              <h3 class="panel-title">Rekap Pendaftaran SMK</h3>
				            </div>
				            <div class="panel-body">
				                <div class="icon" style="border:none; float:left; margin-right:10px;">
				                    <img src="<?php echo URL_STATIC;?>/img/icon_smk.png" height="45">
				                </div>
				                <div>
				                    <p class="fg-color-black">Rekap Pendaftaran Jalur Sekolah Umum</p>
				                </div>
				            </div>
				          </div>
				        </a>
				    </div>
				</div>
		<?php } ?>
		
		<?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(0, 0, 0, 6, 26, 2015);
            if ($currentTime > $start)
            {?>
				<div class="row">
				    <div class="col-sm-4">
				        <a href="<?php echo site_url('rekap/lihat/smp/kawasan');?>">
				          <div class="panel panel-success">
				            <div class="panel-heading">
				              <h3 class="panel-title">Rekap Pendaftaran SMP</h3>
				            </div>
				            <div class="panel-body">
				                <div class="icon" style="border:none; float:left; margin-right:10px;">
				                    <img src="<?php echo URL_STATIC;?>/img/icon_smp.png" height="45">
				                </div>
				                <div>
				                    <p class="fg-color-black">Rekap Pendaftaran Sekolah Kawasan</p>
				                </div>
				            </div>
				          </div>
				        </a>
				      </div>

				      <div class="col-sm-4">
				        <a href="<?php echo site_url('rekap/lihat/sma/kawasan');?>">
				          <div class="panel panel-info">
				            <div class="panel-heading">
				              <h3 class="panel-title">Rekap Pendaftaran SMA</h3>
				            </div>
				            <div class="panel-body">
				                <div class="icon" style="border:none; float:left; margin-right:3px;">
				                    <img src="<?php echo URL_STATIC;?>/img/icon_sma.png" height="45">
				                </div>
				                <div>
				                    <p class="fg-color-black">Rekap Pendaftaran Sekolah Kawasan</p>
				                </div>
				            </div>
				          </div>
				        </a>
				      </div>
				</div>
		<?php } ?>
		
	</div>
</div>

<div class="row info-content">
	<div class="col-sm-12">
		<div class="row" id="header-isi">
		  <div class="col-sm-12">
		    <div>
		        <h2><b>Pendaftaran</b> PPDB SD Negeri</h2>
		    </div>
		  </div>
		</div>
		<div class="row">
		    <div class="col-sm-12">
		    	<a href="http://9c0e96.sd.ppdbsurabaya.net/" target="_blank">
			        <div class="panel panel-danger">
			          <div class="panel-heading">
			            <h3 class="panel-title">Pendaftaran SDN</h3>
			          </div>
			          	<div class="panel-body">
		                    <div class="icon" style="border:none; float:left; margin-right:10px;">
		                        <img src="<?php echo URL_STATIC;?>/img/icon_sd.png" height="45">
		                    </div>
		                    <div>
		                        <p class="fg-color-black">Pendaftaran PPDB SD Negeri</p>
		                    </div>
			          	</div>
			        </div>
		        </a>
		    </div>
		</div>
	</div>
</div>

<div class="row info-content">
    <div class="col-sm-12">
        <div class="row" id="header-isi">
          <div class="col-sm-12">
            <div>
                <h2><b>Pengumuman PPDB</b></h2>
            </div>
          </div>
        </div>
        
                <?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(0, 0, 0, 7, 3, 2015);
            if ($currentTime > $start)
            {?>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/smp/umum');?>">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h3 class="panel-title">Jalur Umum</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span><b>HASIL AKHIR PPDB</b> Jalur Umum SMP</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/sma/umum');?>">
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Jalur Umum</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span><b>HASIL AKHIR PPDB</b> Jalur Umum SMA</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/smk/umum');?>">
                            <div class="panel panel-warning">
                              <div class="panel-heading">
                                <h3 class="panel-title">Jalur Umum</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span><b>HASIL AKHIR PPDB</b> Jalur Umum SMK</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        <?php } ?>

        <?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(12, 0, 0, 7, 2, 2015);
            if ($currentTime > $start)
            {?>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/smp/kawasan');?>">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h3 class="panel-title">Sekolah Kawasan</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pengumuman PPDB Sekolah Kawasan SMP</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                     <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/sma/kawasan');?>">
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Sekolah Kawasan</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pengumuman PPDB Sekolah Kawasan SMA</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        <?php } ?>

        <div class="row">
            <div class="col-sm-4">
                <a href="<?php echo site_url('umum/pengumumanmitrawarga/smp');?>">
                    <div class="panel panel-success">
                      <div class="panel-heading">
                        <h3 class="panel-title">Jalur Mitra Warga</h3>
                      </div>
                        <div class="panel-body">
                            <div>
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pengumuman Jalur Mitra Warga SMP</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

             <div class="col-sm-4">
                <a href="<?php echo site_url('umum/pengumumanmitrawarga/sma');?>">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">Jalur Mitra Warga</h3>
                      </div>
                        <div class="panel-body">
                            <div>
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pengumuman Jalur Mitra Warga SMA</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="<?php echo site_url('umum/pengumumanmitrawarga/smk');?>">
                    <div class="panel panel-warning">
                      <div class="panel-heading">
                        <h3 class="panel-title">Jalur Mitra Warga</h3>
                      </div>
                        <div class="panel-body">
                            <div>
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pengumuman Jalur Mitra Warga SMK</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4">
                <a href="<?php echo site_url('umum/satulokasi');?>">
                    <div class="panel panel-success">
                      <div class="panel-heading">
                        <h3 class="panel-title">Jalur Satu Lokasi</h3>
                      </div>
                        <div class="panel-body">
                            <div>
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pengumuman Jalur Satu Lokasi</p>
                            </div>
                        </div>
                    </div>
                </a>
              </div>
        </div>
    </div>
</div>


<div class="row info-content">
    <div class="col-sm-12">
        <div class="row" id="header-isi">
          <div class="col-sm-12">
            <div>
                <h2><b>Pengumuman Pemenuhan Pagu PPDB</b></h2>
            </div>
          </div>
        </div>
        
        <?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(16, 0, 0, 7, 10, 2015);
            if ($currentTime > $start)
            {?>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo site_url('/hasil/pemenuhanpagu/umum/smp/1');?>">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Jalur Umum</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB SMP Jalur Umum Gelombang 1</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('/hasil/pemenuhanpagu/umum/sma/1');?>">
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Jalur Umum</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB SMA Jalur Umum Gelombang 1</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('/hasil/pemenuhanpagu/umum/smk/1');?>">
                            <div class="panel panel-warning">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Jalur Umum</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB SMK Jalur Umum Gelombang 1</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        <?php } ?>

        <?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(16, 0, 0, 7, 4, 2015);
            if ($currentTime > $start)
            {?>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/pemenuhanpagu/kawasan/smp');?>">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Sekolah Kawasan</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB Sekolah Kawasan SMP</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/pemenuhanpagu/kawasan/sma');?>">
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Sekolah Kawasan</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB Sekolah Kawasan SMA</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
       	<?php } ?>


	</div>
</div>

<!-- <div class="info-content">
    <h2 class="info-title">Ruang Lingkup PPDB</h2>
    <p class="padding5 text-justify">PPDB Surabaya 2015 memiliki 2 situs utama, yakni <a href="http://www.ppdbsurabaya.net">www.ppdbsurabaya.net</a> dan <a target="_blank" href="http://www.ppdbsd-surabaya.net">www.ppdbsd-surabaya.net</a>. Dinas Pendidikan Kota Surabaya melakukan kerjasama dengan ITS hanya untuk situs <a href="http://ppdbsurabaya.net">ppdbsurabaya.net</a> yang melingkupi pendaftaran SMPN, SMAN, dan SMKN.</p>
</div> -->

