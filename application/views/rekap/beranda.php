<div class="row" id="header-isi">
  <div class="col-sm-12">
    <div>
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Data UNBK Sekolah</h1>
    </div>
  </div>
</div>


<?php
    date_default_timezone_set('Asia/Jakarta');
    $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
    $start = mktime(0, 0, 0, 7, 6, 2015);
    if ($currentTime > $start)
    {?>
      <div class="row info-content">
        <div class="col-sm-4">
            <a href="<?php echo site_url('rekap/lihat/smp/umum');?>">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Data UNBK SMP</h3>
                </div>
                <div class="panel-body">
                    <div class="icon" style="border:none; float:left; margin-right:10px;">
                        <img src="<?php echo URL_STATIC;?>/img/icon_smp.png" height="45">
                    </div>
                    <div>
                        <p class="fg-color-black">Data UNBK Jenjang SMP</p>
                    </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4">
            <a href="<?php echo site_url('rekap/lihat/sma/umum');?>">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Data UNBK SMA</h3>
                </div>
                <div class="panel-body">
                    <div class="icon" style="border:none; float:left; margin-right:3px;">
                        <img src="<?php echo URL_STATIC;?>/img/icon_sma.png" height="45">
                    </div>
                    <div>
                        <p class="fg-color-black">Data UNBK Jenjang SMA</p>
                    </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4">
            <a href="<?php echo site_url('rekap/lihat/smk/umum');?>">
              <div class="panel panel-warning">
                <div class="panel-heading">
                  <h3 class="panel-title">Data UNBK SMK</h3>
                </div>
                <div class="panel-body">
                    <div class="icon" style="border:none; float:left; margin-right:10px;">
                        <img src="<?php echo URL_STATIC;?>/img/icon_smk.png" height="45">
                    </div>
                    <div>
                        <p class="fg-color-black">Data UNBK Jenjang SMK</p>
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
    $start = mktime(0, 0, 0, 7, 1, 2015);
    if ($currentTime > $start)
    {?>
      <div class="row info-content">
        <div class="col-sm-4">
            <a href="<?php echo site_url('rekap/lihat/smp/kawasan');?>">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Panitia UNBK SMP</h3>
                </div>
                <div class="panel-body">
                    <div class="icon" style="border:none; float:left; margin-right:10px;">
                        <img src="<?php echo URL_STATIC;?>/img/icon_smp.png" height="45">
                    </div>
                    <div>
                        <p class="fg-color-black">Daftar Proktor dan Teknisi UNBK Jenjang SMP</p>
                    </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4">
            <a href="<?php echo site_url('rekap/lihat/sma/kawasan');?>">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Panitia UNBK SMA</h3>
                </div>
                <div class="panel-body">
                    <div class="icon" style="border:none; float:left; margin-right:3px;">
                        <img src="<?php echo URL_STATIC;?>/img/icon_sma.png" height="45">
                    </div>
                    <div>
                        <p class="fg-color-black">Daftar Proktor dan Teknisi UNBK Jenjang SMA</p>
                    </div>
                </div>
              </div>
            </a>
          </div>
		  
		  <div class="col-sm-4">
            <a href="<?php echo site_url('rekap/lihat/sma/kawasan');?>">
              <div class="panel panel-warning">
                <div class="panel-heading">
                  <h3 class="panel-title">Panitia UNBK SMK</h3>
                </div>
                <div class="panel-body">
                    <div class="icon" style="border:none; float:left; margin-right:3px;">
                        <img src="<?php echo URL_STATIC;?>/img/icon_smk.png" height="45">
                    </div>
                    <div>
                        <p class="fg-color-black">Daftar Proktor dan Teknisi UNBK Jenjang SMK</p>
                    </div>
                </div>
              </div>
            </a>
          </div>
    </div>
<?php } ?>