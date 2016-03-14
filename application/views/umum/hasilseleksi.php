<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Hasil Seleksi PPDB</h1>
    </div>
</div>

<div class="row info-content">
    <div class="col-sm-12">

        <?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(0, 0, 0, 7, 6, 2015);
            $end = mktime(0, 1, 30, 7, 10, 2015);
            if ($currentTime > $start)
            {?>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/smp/umum');?>">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Jalur Umum SMP</h3>
                                </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span><b>PERINGKAT <?php echo ($currentTime > $end?'AKHIR':'SEMENTARA')?> PPDB</b> Jalur Umum SMP</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/sma/umum');?>">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Jalur Umum SMA</h3>
                                </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span><b>PERINGKAT <?php echo ($currentTime > $end?'AKHIR':'SEMENTARA')?> PPDB</b> Jalur Umum SMA</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/smk/umum');?>">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Jalur Umum SMK</h3>
                                </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span><b>PERINGKAT <?php echo ($currentTime > $end?'AKHIR':'SEMENTARA')?> PPDB</b> Jalur Umum SMK</p>
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
            $start = mktime(0, 0, 0, 7, 7, 2015);
            if ($currentTime > $start)
            {?>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/smp/kawasan');?>">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Jalur Kawasan SMP</h3>
                                </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Peringkat PPDB Jalur Kawasan SMP</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                     <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/lihat/sma/kawasan');?>">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Jalur Kawasan SMA</h3>
                                </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Peringkat PPDB Jalur Kawasan SMA</p>
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
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Hasil Seleksi Jalur Mitra Warga SMP</p>
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
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Hasil Seleksi Jalur Mitra Warga SMA</p>
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
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Hasil Seleksi Jalur Mitra Warga SMK</p>
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
                        <h3 class="panel-title">Satu Lokasi</h3>
                      </div>
                        <div class="panel-body">
                            <div>
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Hasil Seleksi Jalur Satu Lokasi</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo site_url('umum/pengumumaninklusif');?>">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">Jalur Inklusif</h3>
                      </div>
                        <div class="panel-body">
                            <div>
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Hasil Seleksi Jalur Inklusif</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

         <div class="row">
            <div class="col-sm-4">
                <a href="<?php echo site_url('umum/japres/smp');?>">
                    <div class="panel panel-success">
                      <div class="panel-heading">
                        <h3 class="panel-title">Jalur Olahraga</h3>
                      </div>
                        <div class="panel-body">
                            <div>
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Hasil Seleksi Jalur Olahraga</p>
                            </div>
                        </div>
                    </div>
                </a>
              </div>

              <div class="col-sm-4">
                <a href="<?php echo site_url('umum/japresakad/smp');?>">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">Jalur Akademis</h3>
                      </div>
                        <div class="panel-body">
                            <div>
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Hasil Seleksi Jalur Akademis</p>
                            </div>
                        </div>
                    </div>
                </a>
              </div>

              <div class="col-sm-4">
                <a href="<?php echo site_url('umum/japresnonakad/smp');?>">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Jalur Non Akademis</h3>
                        </div>
                        <div class="panel-body">
                            <div>
                                <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Hasil Seleksi Jalur Non Akademis</p>
                            </div>
                        </div>
                    </div>
                </a>
              </div>
        </div>

    </div>
</div>