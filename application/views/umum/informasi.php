<?php $this->load->view('base/header'); ?>
<div class="page" id="page-index">
    <div class="page-region">
        <div class="page-region-content">
            <div class="grid">
                <div class="row">
                    <div class="span3">
                        <?php $this->load->view('base/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="row" id="header-isi">
                            <div class="span9">
                                <div class="span1">
                                    <a href="<?php echo base_url();?>"><h2><i class="icon-arrow-left-3 fg-color-darken padding10" title="kembali ke halaman utama"></i></h2></a>
                                </div>
                                <div class="span6">
                                    <h1><?php echo (isset ($header)? $header:'');?></h1>
                                </div>
                                <!--
                                <div class="span2">
                                    <a href=""><button class="bg-color-blue place-right fg-color-white">Download</button></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9">
                                <p><?php echo (isset ($content)? $content:'');?></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('base/footer'); ?>