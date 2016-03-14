<div class="row" id="header-isi">
  <div class="col-sm-12">
    <div>
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Bukti Pendaftaran</h1>
    </div>
  </div>
</div>

<?php
    date_default_timezone_set('Asia/Jakarta');
    $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
    $start = mktime(0, 0, 0, 7, 6, 2015);
    $end = mktime(23, 59, 59, 7, 9, 2015);
    if ($currentTime > $start)
    {?>
    <div class="row info-content">
        <div class="col-sm-4">
            <a href="<?php echo site_url('unduhbukti?jalur=umum&jenjang=smp');?>">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Bukti Pendaftaran SMP Umum</h3>
                </div>
                <div class="panel-body">
                  <div class="icon" style="border:none; float:left; margin-right:10px;">
                    <img src="<?php echo URL_STATIC;?>/img/icon_smp.png" height="45">
                  </div>
                  <div>
                      <p class="fg-color-black">Bukti Pendaftaran Jalur Sekolah Umum</p>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4">
            <a href="<?php echo site_url('unduhbukti?jalur=umum&jenjang=sma');?>">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Bukti Pendaftaran SMA Umum</h3>
                </div>
                <div class="panel-body">
                  <div class="icon" style="border:none; float:left; margin-right:10px;">
                    <img src="<?php echo URL_STATIC;?>/img/icon_sma.png" height="45">
                  </div>
                  <div>
                      <p class="fg-color-black">Bukti Pendaftaran Jalur Sekolah Umum</p>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4">
            <a href="<?php echo site_url('unduhbukti?jalur=umum&jenjang=smk');?>">
              <div class="panel panel-warning">
                <div class="panel-heading">
                  <h3 class="panel-title">Bukti Pendaftaran SMK Umum</h3>
                </div>
                <div class="panel-body">
                  <div class="icon" style="border:none; float:left; margin-right:10px;">
                    <img src="<?php echo URL_STATIC;?>/img/icon_smk.png" height="45">
                  </div>
                  <div>
                      <p class="fg-color-black">Bukti Pendaftaran Jalur Sekolah Umum</p>
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
    $end = mktime(23, 59, 59, 7, 3, 2015);
    if ($currentTime > $start)
    {?>
    <div class="row info-content">
        <div class="col-sm-4">
            <a href="<?php echo site_url('unduhbukti?jalur=kawasan&jenjang=smp');?>">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Bukti Pendaftaran SMP Kawasan</h3>
                </div>
                <div class="panel-body">
                  <div class="icon" style="border:none; float:left; margin-right:10px;">
                    <img src="<?php echo URL_STATIC;?>/img/icon_smp.png" height="45">
                  </div>
                  <div>
                      <p class="fg-color-black">Bukti Pendaftaran Jalur Sekolah Kawasan</p>
                  </div>
                </div>
              </div>
            </a>
        </div>

        <div class="col-sm-4">
          <a href="<?php echo site_url('unduhbukti?jalur=kawasan&jenjang=sma');?>">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Bukti Pendaftaran SMA Kawasan</h3>
              </div>
              <div class="panel-body">
                <div class="icon" style="border:none; float:left; margin-right:10px;">
                  <img src="<?php echo URL_STATIC;?>/img/icon_sma.png" height="45">
                </div>
                <div>
                    <p class="fg-color-black">Bukti Pendaftaran Jalur Sekolah Kawasan</p>
                </div>
              </div>
            </div>
          </a>
        </div>
    </div>
<?php } ?>