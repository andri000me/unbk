<h2>Langkah-langkah Pendaftaran</h2>
<ol class="progtrckr" data-progtrckr-steps="6">
    <li class="progtrckr-done">(1)</li><!--
 --><li class="progtrckr-done">(2)</li><!--
 --><li class="progtrckr-doing">(3)</li><!--
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
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div><span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span><b>Input Nomor UN/US</b></div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-doing">
                        <div>
                            <div>
                                <p><span style="margin-right:10px;" class="fa fa-refresh"></span><b>Login Pendaftaran</b></p>
                                <p style="color:#000000; margin:auto auto auto 25px;">
                                    <?php if ($jenisSiswaState->isBelumDiketahui()) {?>
                                    Masukkan tanggal lahir untuk melanjutkan proses pendaftaran
                                    <?php }
                                    else{?>
                                    <!-- Isi dengan PIN pada surat PIN yang telah dibagikan oleh sekolah -->
                                    Isi dengan Tanggal Lahir Anda (Dalam Format: ddmmyy)
                                    <?php } ?>
                                </p>
                            </div>
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
                <h3>Login Pendaftaran</h3>
                <h3>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?> Kategori <b class="red"><?php echo $kategori; ?></b></h3>
                <hr/>

                <?php echo form_open($formAction, array('id' => 'inputPinForm', 'class'=>'form-horizontal', 'role'=>'form')); ?>

                <?php
                if ($jenisSiswaState->isBelumDiketahui()) {
                ?>
                <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir:</label>
                    <div class="col-sm-6">
                        <?php
                        echo form_input(array(
                            'class' => 'form-control',
                            'name' => 'tgl_lahir',
                            'id' => 'tgl_lahir',
                            'value' => set_value('tgl_lahir')
                        ));
                        ?>
                    Masukkan dengan format tahun-bulan-tanggal (yyyy-mm-dd). Contoh: <?php echo $jenjangState->contoh['tgl_lahir']; ?>
                    </div>
                </div>

                <?php
                } else {
                ?>
                <div class="form-group">
                    <label for="pin" class="col-sm-2 control-label">PIN:</label>
                    <div class="col-sm-9">
                        <?php
                        echo form_password(array(
                            'class' => 'form-control',
                            'name' => 'pin',
                            'id' => 'pin',
                        ));
                        ?>
                    <span><strong>Informasi :</strong></span> &nbsp;
                    Gunakan PIN pada surat PIN yang telah dibagikan oleh sekolah.
                    <!-- Isi dengan Tanggal Lahir Anda (Dalam Format: ddmmyy). -->
                    </div>
                </div>
                <?php
                }
                ?>

                 <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="red col-sm-9">
                        <?php echo $errors; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-9">
                        <p>
                            <?php
                            $attributes2 = 'class = "btn btn-danger"';
                            $attributes = 'class = "btn btn-primary"';
                            echo form_submit('submit', 'Lanjut', $attributes).' '.anchor('pendaftaran/batal', 'Batalkan Pendaftaran', $attributes2);
                            ?>
                        </p>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
