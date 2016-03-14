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
                                    <h1>Tips dan Saran</h1>
                                </div>
                                <!--<div class="span2">
                                    <a href=""><button class="bg-color-blue place-right fg-color-white">Download</button></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9">
                                <p>Berikut adalah tips jika mengalami permasalahan pada sistem : </p>
                                <div class="bg-color-white" style="width: 100%">
                                    <div class="bg-color-lighten padding10">
                                        <h2>Tidak bisa mendaftar </h2>
                                        <p>
                                            Baca dan pelajari kembali <a href="<?php echo site_url('umum/prosedur');?>">Prosedur Pendaftaran</a>
                                        </p>

                                    </div>
                                    <div class="bg-color-blueLight padding10">
                                        <h2>Tidak bisa login </h2>
                                        <p>
                                            Periksa kembali apakah nomor UN/US anda sesuai format, lihat <a href="<?php echo site_url('umum/faq');?>">faq</a>
                                        </p>

                                    </div>
                                    <div class="bg-color-lighten padding10">
                                        <h2>Loading Lama </h2>
                                        <p>
                                            Periksa kembali koneksi internet anda, pastikan menggunakan koneksi internet yang stabil.
                                        </p>
                                        <p>
                                            Disarankan tidak menggunakan proxy.
                                        </p>
                                         <p>
                                            Disarankan menggunakan PC atau laptop dengan menggunakan browser yang direkomendasikan.
                                        </p>


                                    </div>
                                    <div class="bg-color-blueLight padding10">
                                        <h2 >Tampilan Tidak Keluar (Captcha tidak muncul, kode wilayah tidak muncul, tampilan hanya muncul setengah)</h2>
                                        <p>
                                             Bersihkan cache pada browser dengan menekan CTRL + F5 atau CTRL + Shift + Del
                                        </p>
                                        <p>
                                             Untuk captcha dapat melakukan kode ulang captcha jika captcha tidak muncul atau tidak terbaca
                                        </p>
                                         <p>
                                             Harap bersabar pada saat proses pemilihan sekolah tujuan sampai proses loading wilayah selesai. Hal ini agar mengurangin beban request pada server.
                                        </p>


                                    </div>
                                    <div class="bg-color-lighten padding10">
                                        <h2>Sesi Telah Habis</h2>
                                        <p>
                                            Kembali ke menu utama  dan lakukan pendaftaran kembali
                                        </p>

                                    </div>
                                    <div class="bg-color-blueLight padding10">
                                        <h2 >Muncul Tulisan Error</h2>
                                        <p>
                                            Mohon lampirkan tulisan error pada forum tanya jawab
                                        </p>

                                    </div>
                                    <div class="bg-color-lighten padding10">
                                        <h2 >Lupa Mencetak</h2>
                                        <p>
                                            Silahkan login kembali untuk mengunduh bukti cetak menggunakan no UN pada jalur yang telah diikuti
                                        </p>

                                    </div>

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