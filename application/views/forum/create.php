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
                                    <h1>Kirimkan Pertanyaan</h1>
                                </div>
                                <!--<div class="span2">
                                    <a href=""><button class="bg-color-blue place-right fg-color-white">Download</button></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9">
                                <p>Isian dengan tanda (*) harus di isi.</p>
                                <div class="bg-color-blueLight padding10">
                                    <form action="<?php echo site_url('umum/forumcreate'); ;?>" method="post" accept-charset="utf-8"> 
                                        <p>
                                            Nama:<br>
                                            </p>
                                            <div class="input-control text" style="width:200px;">
                                                <input name="nama" value="" placeholder="Nama anda" type="text"> 
                                                <button type="button" tabindex="-1" class="btn-clear"></button>
                                            </div>
                                            <p>
                                            Email:<br>
                                            </p>
                                            <div class="input-control text" style="width:200px;">
                                                <input name="email" value="" placeholder="E-mail Anda" type="text"> 
                                                <button type="button" tabindex="-1" class="btn-clear"></button>
                                            </div>
                                            <p>
                                            Pesan:<br>
                                            </p>
                                            <div class="input-control textarea">
                                                <textarea placeholder="Pesan Anda"></textarea>
                                            </div>
                                        <p>
                                            <input name="submit" value="Kirim" type="submit">
                                        </p>
                                    </form>
                                </div>
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