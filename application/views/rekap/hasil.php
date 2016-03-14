<div class="page" id="page-index">
    <div class="page-region">
        <div class="page-region-content">
            <div class="grid">
                <div class="row">
                    <div class="span9">
                        <div class="row" id="header-isi">
                            <div class="span9">
                                <div class="span1">
                                    <a href="<?php echo base_url();?>"><h2><i class="icon-arrow-left-3 fg-color-darken padding10" title="kembali ke halaman utama"></i></h2></a>
                                </div>
                                <div class="span8">
                                    <h1>Hasil Seleksi</h1>
                                    <h2>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=='kawasan'?'Sekolah Kawasan':  ucfirst($jalur));?></h2>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="span9 bg-color-blueLight padding10">
                                <p>Hasil seleksi akan diumumkan pada tanggal <strong>25 Juni 2013</strong>. Untuk informasi lebih lanjut mengenai pelaksanaan, lihat <a href="/umum/jadwal">Jadwal Pelaksanaan</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <?php $this->load->view('base/sidebar'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>