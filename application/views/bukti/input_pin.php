<div class="row" id="header-isi">
    <div class="col-sm-12">
        <div>
            <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
            <h2 class="fg-color-white">Bukti Pendaftaran</h2>
            <h2 class="fg-color-white">PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?></h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php echo form_open('unduhbukti/submit', array('id' => 'inputPinForm', 'class'=>'form-horizontal')); ?>

        <div class="form-group">
            <?php
            if (!$belumDiketahui) {
            ?>
                <label for="noUn" class="col-sm-2 control-label">PIN</label>
                <div class="col-sm-5">
                <?php
                echo form_password(array(
                    'class' => 'form-control',
                    'name' => 'pin',
                    'value' => set_value('pin')
                ));
                ?><br />
            <p>
            Gunakan PIN pada surat PIN yang telah dibagikan oleh sekolah.
            <!-- Isi dengan Tanggal Lahir Anda (Dalam Format: ddmmyy). -->
            </p>
            <?php
            } else {
            ?>
                <label for="noUn" class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-5">
                <?php
                echo form_input(array(
                    'class' => 'form-control',
                    'name' => 'tglLahir',
                    'value' => set_value('tglLahir')
                ));
                ?><br />
                <P>Masukkan dengan format tahun-bulan-tanggal (yyyy-mm-dd). Contoh: 2013-06-16
            </p>
            <?php
            }
            ?>
            <div class="red"><?php echo $errors; ?></div>
            <?php $attributes = 'class = "btn btn-primary"'; echo form_submit('submit', 'Lanjutkan', $attributes); ?>
            <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>