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
                                    <h1>Pengumuman Hasil</h1>
                                    <h2>Pemenuhan Pagu PPDB SMA Jalur Sekolah Kawasan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9 bg-color-green padding10">
                                <?php echo form_open('hasil/pemenuhanpagu/kawasan/sma', array('id' => 'formCari')); ?> 
                                    <div class="input-control text">
                                        <label class="fg-color-white"><strong>Nama Sekolah : </strong></label>
                                        <?php $options= array(''=>'- Pilih Sekolah -', 'SMA1' => 'SMA NEGERI 1', 'SMA2' => 'SMA NEGERI 2', 'SMA3' => 'SMA NEGERI 3', 'SMA5' => 'SMA NEGERI 5', 'SMA6' => 'SMA NEGERI 6', 'SMA11' => 'SMA NEGERI 11', 'SMA13' => 'SMA NEGERI 13', 'SMA15' => 'SMA NEGERI 15', 'SMA16' => 'SMA NEGERI 16', 'SMA19' => 'SMA NEGERI 19', 'SMA20' => 'SMA NEGERI 20', 'SMA21' => 'SMA NEGERI 21'); 
                                        echo form_dropdown('sekolah', $options, '', 'style="width:50%;"'); ?>
                                        <span class="button place-right" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><i class="icon-search"></i>Cari</span>
                                    </div>
                                <?php echo form_close(); ?> 
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