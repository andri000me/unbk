<div class="row" id="header-isi">
    <div class="col-sm-12">
        <div>
            <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
            <h1 class="fg-color-white">Bukti Pendaftaran</h1>
            <h2 class="fg-color-white">PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?></h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php echo form_open('unduhbukti/submit', array('id' => 'selesaiForm', 'class'=>'form-horizontal')); ?> 
        <div>
            <h3>Untuk mencetak bukti pendaftaran silakan mengunduh file bukti dengan menekan tombol <strong>Unduh Bukti</strong>.</h3>
            <script type="text/javascript">
                var buktiCetakImgSrc = '<?php echo site_url('pendaftaran/bukti/'.$jalur.'/'.$jenjang); ?>';
            </script>
        </div>
        <p>
            <?php
            $attributes = 'class = "btn btn-info"';
            echo 
            form_submit('selesai', 'Selesai', $attributes).' '.
            anchor_popup(
                'pendaftaran/bukti/'.$jalur.'/'.$jenjang.'/1',
                'Unduh',
                array('class' => 'btn btn-primary')
            );
            ?> 
        </p>
        <?php echo form_close(); ?> 
    </div>
</div>
