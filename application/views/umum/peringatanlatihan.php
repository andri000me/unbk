<?php $this->load->view('base/header'); ?>
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
                                    <h1>Menu <?php echo (isset($menu)?ucfirst($menu):"Pendaftaran") ;?></h1>
                                </div>
                                <!--
                                <div class="span2">
                                    <a href=""><button class="bg-color-blue place-right fg-color-white">Download</button></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9">
                                <p>Menu <?php echo (isset($menu)?$menu:"pendaftaran") ;?> ini mulai dapat diakses pada saat latihan. Latihan pertama akan dilaksanakan pada 20 Mei 2013.</p>
                                <p>Untuk informasi pelaksanaan, silakan cek <a href="<?php echo site_url('umum/jadwal');?>">jadwal pelaksanaan</a>.</p>
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
<?php $this->load->view('base/footer'); ?>