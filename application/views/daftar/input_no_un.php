<h2>Langkah-langkah Pendaftaran</h2>
<ol class="progtrckr" data-progtrckr-steps="6">
    <li class="progtrckr-done">(1)</li><!--
 --><li class="progtrckr-doing">(2)</li><!--
 --><li class="progtrckr-todo">(3)</li><!--
 --><li class="progtrckr-todo">(4)</li><!--
 --><li class="progtrckr-todo">(5)</li><!--
 --><li class="progtrckr-todo">(6)</li>
</ol>
<hr>

<div class="row">
    <div class="col-md-3">
        <div class="sidebar">
            <div style="padding-right: 5px;">
                <ol>
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div><span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span><b>Pilih Kategori</b></div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-doing">
                        <div>
                            <P><span style="margin-right:10px;" class="fa fa-refresh"></span><b>Input Nomor UN/US</b></P>
                            <p style="color:#000000; margin:auto auto auto 25px;">Masukkan nomor UN/US dan masukkan kembali kode CAPTCHA.</p>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar">
                        <div>
                            <div>Login Pendaftaran</div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar">
                        <div>
                            <div>Form Pendaftaran</div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar">
                        <div>
                            <div>Konfirmasi Akhir Pendaftaran</div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar">
                        <div>
                            <div>Bukti Pendaftaran</div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-sm-12">
                <h3>Input Nomor UN/US</h3>
                <h3>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?> Kategori <b class="red"><?php echo $kategori; ?></b></h3>
                <hr/>
                <?php echo form_open($formAction, array('id' => 'inputNoUnForm', 'class'=>'form-horizontal', 'role'=>'form')); ?>

                <p>
                    *) Harus diisi.
                </p>



                <div class="form-group">
                    <label for="no_un" class="col-sm-3 control-label">Nomor UN/US*</label>
                    <div class="col-sm-9">
                        <?php
                        echo form_input(array(
                            'class' => 'form-control',
                            'name' => 'no_un',
                            'id' => 'no_un',
                            'maxlength' => '14',
                            'value' => set_value('no_un')
                        ));
                        ?>
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
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Kode CAPTCHA</label>
                    <div class="col-sm-9">
                        <?php echo $captchaImage; ?>
                        <script type="text/javascript">
                            function onRecaptcha() {
                                if (document.readyState !== 'complete')
                                    return;
                                document.getElementById('formEvent').value = 'onRecaptcha';
                                document.getElementById('inputNoUnForm').submit();
                            }
                        </script>
                        <br>
                        <a href="#"onclick="onRecaptcha();">Ubah kode CAPTCHA</a>
                    </div>
                </div>

                <div class="form-group">
                    <label for="captcha" class="col-sm-3 control-label">Ketik kembali kode di atas*:</label>
                    <div class="col-sm-9">
                        <?php
                        echo form_input(array(
                            'class' => 'form-control',
                            'name' => 'captcha',
                            'id' => 'captcha',
                        ));
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-3"></div>
                    <div class="red col-sm-9">
                        <?php echo $errors; ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-3"></div>
                    <div class="red col-sm-9">
                        <?php
                            $attributes = 'class = "btn btn-danger"';

                            echo form_button(
                                array(
                                    'id' => 'submitButton',
                                    'content' => 'Lanjut',
                                    'onclick' => 'onSubmit();',
                                    'class' => 'btn btn-primary'
                                )
                            ).' '.anchor('pendaftaran/batal', 'Batalkan Pendaftaran', $attributes);
                        ?>
                    </div>
                </div>

                <input id="formEvent" type="hidden" name="event" />
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>