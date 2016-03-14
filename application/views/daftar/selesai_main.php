<h2>Langkah-langkah Pendaftaran</h2>
<ol class="progtrckr" data-progtrckr-steps="6">
    <li class="progtrckr-done">(1)</li><!--
 --><li class="progtrckr-done">(2)</li><!--
 --><li class="progtrckr-done">(3)</li><!--
 --><li class="progtrckr-done">(4)</li><!--
 --><li class="progtrckr-done">(5)</li><!--
 --><li class="progtrckr-doing">(6)</li>
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
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div><span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span><b>Login Pendaftaran</b></div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div>
                                <span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span><b>Form Pendaftaran</b>
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div>
                                <span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span><b>Konfirmasi Akhir Pendaftaran</b>
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-doing">
                        <div>
                            <p><span style="margin-right:10px;" class="fa fa-refresh"></span><b>Bukti Pendaftaran</b></b>
                            <p style="color:#000000; margin:auto auto auto 25px;">
                                Anda telah menyelesaikan proses pendaftaran
                            </p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-md-8">

            <h3>Bukti Pendaftaran</h3>
            <h3>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?> Kategori <b class="red"><?php echo $kategori; ?></b></h3>
            <hr/>

            <div class="row margin10">
                <div id="buktiCetak">
                    <h3 class="padding5">Untuk mencetak bukti pendaftaran silakan mengunduh file bukti dengan menekan tombol <strong>Unduh Bukti</strong>.</h3>
                    <script type="text/javascript">
                        var buktiCetakImgSrc = '<?php echo site_url('pendaftaran/bukti/'.$jalur.'/'.$jenjang); ?>';
                    </script>
                </div>
                <?php echo form_open($formAction, 'id="selesaiForm"'); ?>
                <p>
                    <?php

                    $attributes = 'class = "btn btn-success"';

                    echo
                    form_submit('selesai', 'Selesai', $attributes).' '.
                    form_button(
                                    array(
                                        'id' => 'downloadButton',
                                        'content' => 'Unduh Bukti',
                                        'class' => 'btn btn-primary'
                                    )
                        );
                    ?>
                </p>
            </div>

    </div>
</div>


