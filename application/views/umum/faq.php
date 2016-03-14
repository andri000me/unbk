<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Informasi FAQ <small>(Pertanyaan yang diajukan)</small></h1>

    </div>
</div>

<div class="row">
    <div class="col-sm-12" id="contentfaq">
            <p><small>Menampilkan <?php echo ($urutan+(count($faq)>0?1:0))."-".($urutan+  count($faq))." dari ".$totalfaq. " hasil";?></small></p>
            <div class="col-sm-12">
                <?php $nomor = 0; foreach ($faq as $b){?>
                <div class="bg-color-<?php echo((++$nomor)%2==0?'lightBlue':'darkGreen');?> info-content" style="margin-bottom:15px;">
                    <span class="bg-warning">Pertanyaan: </span><br/> <b><?php echo $b['isi_pertanyaan'] ;?></b><hr/>
                    <div style="margin-left: 20px; margin-bottom:20px;">
                        <span class="bg-success">Jawaban: </span><br/>
                        <?php echo $b['jawaban'] ;?>
                    </div>
                </div>
                <?php } ?>
                <?php echo '<center>'.$pagelink.'</center>'; ?>
            </div>
    </div>                               
</div>