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
                                <div class="span8">
                                    <h1>Forum Tanya Jawab</h1>
                                </div>
                                <!--<div class="span2">
                                    <a href=""><button class="bg-color-blue place-right fg-color-white">Download</button></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9">
                                <p>Media ini dapat digunakan untuk menyampaikan pertanyaan anda seputar pelaksanaan PPDB Surabaya 2013 kepada panitia penyelenggara. </p>
                                <div class="bg-color-blueLight padding10">
                                    <p>Forum ini akan aktif di saat pelaksanaan latihan. Latihan pertama dimulai pada tanggal 20 Mei 2013.</p>
                                    <p>Informasi terkait pelaksanaan, lihat pada <a href="<?php echo site_url('umum/jadwal'); ?>">jadwal</a>.</p>
                                    <!--<p>Sampaikan pertanyaan Anda seputar PPDB Surabaya 2013 kepada kami. </p>
                                    <a href="<?php echo site_url('umum/forumcreate'); ?>"><button><i class="icon-help"></i>Buat Pertanyaan</button></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('base/footer'); ?>