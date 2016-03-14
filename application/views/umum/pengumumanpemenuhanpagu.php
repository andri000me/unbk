<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Peringkat Pemenuhan Pagu</h1>
    </div>
</div>
<br/>

<div class="row">
    <div class="col-sm-12">
                <?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(18, 0, 0, 7, 12, 2015);
            if ($currentTime > $start)
            {?>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo site_url('/hasil/pemenuhanpagu/umum/smp/1');?>">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Jalur Umum SMP</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB Jalur Umum SMP</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('/hasil/pemenuhanpagu/umum/sma/1');?>">
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Jalur Umum SMA</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB Jalur Umum SMA</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('/hasil/pemenuhanpagu/umum/smk/1');?>">
                            <div class="panel panel-warning">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Jalur Umum SMK</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB Jalur Umum SMK</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <hr/>
        <?php } ?>

        <?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
            $start = mktime(0, 0, 0, 7, 9, 2015);
            if ($currentTime > $start)
            {?>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/pemenuhanpagu/kawasan/smp');?>">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Jalur Kawasan</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB Jalur Kawasan SMP</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="<?php echo site_url('hasil/pemenuhanpagu/kawasan/sma');?>">
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemenuhan Pagu PPDB Jalur Kawasan</h3>
                              </div>
                                <div class="panel-body">
                                    <div>
                                        <p class="fg-color-black"><span style="margin-right:10px;" class="fa fa-list"></span>Pemenuhan Pagu PPDB Jalur Kawasan SMA</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>
