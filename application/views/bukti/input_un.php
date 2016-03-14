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
        <?php echo form_open('unduhbukti/submit', array('id' => 'inputNoUnForm', 'class'=>'form-horizontal')); ?>

            <div class="form-group">


                <label for="noUn" class="col-sm-2 control-label">No UN/US</label>
                <div class="col-sm-7">

                    <?php
                    echo form_input(array(
                        'class' => 'form-control',
                        'name' => 'noUn',
                        'maxlength' => '14',
                        'value' => set_value('noUn')
                    ));
                    ?>
                    <br>
                    Masukkan 14 digit nomor peserta UN/US dengan format : JTTPPKKSSSNNNC.
                        <br>

                        <p class="blue-light-nohover">
                            Contoh penambahan <b>lima digit awal</b> pada nomor UN/US:<br>
                            <small style="margin-left:15px;">Lulus SD/MI sekarang, ditambahkan  11505</small><br>
                            <small style="margin-left:15px;">Lulus SMP/MTs sekarang, ditambahkan  21505</small><br>
                            <small style="margin-left:15px;">Lulus SMA/MA sekarang, ditambahkan  31505</small><br>
                            <small style="margin-left:15px;">Lulus SMK sekarang, ditambahkan  41505</small><br>
                            <small style="margin-left:15px;">Lulus kejar paket A sekarang, ditambahkan A1505</small><br>
                            <small style="margin-left:15px;">Lulus kejar paket B sekarang, ditambahkan B1505</small><br>
                        </p>

                        Keterangan lebih lanjut, lihat <a href="<?php echo site_url('umum/faq')?>" target="_blank">menu Informasi Penting</a>
                <div class="red"><?php echo $errors; ?></div>
                <?php $attributes = 'class = "btn btn-primary"';  echo form_submit('submit', 'Lanjutkan', $attributes); ?>

                </div>
            </div>


        <?php echo form_close(); ?>
    </div>
</div>