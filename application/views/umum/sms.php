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
                                    <h1>Fasilitas SMS</h1>
                                </div>
                                <!--<div class="span2">
                                    <a href=""><button class="bg-color-blue place-right fg-color-white">Download</button></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9">
                                <p>Berikut adalah panduan mendapatkan informasi PPDBSurabaya 2013 melalui SMS : </p>
                                <div class="bg-color-white" style="width: 100%">
                                    <div class="bg-color-green padding10 fg-color-white">
                                        <h2 class="fg-color-white">Nomor Tujuan</h2>
                                        <p><span class="bg-color-blue padding5 fg-color-white">Flexi</span> : 7055 (Tarif : Rp 0,-)</p>
                                        <p><span class="red padding5 fg-color-white">Telkomsel</span> : 3439 (Tarif : Rp 120,-)</p>
                                    </div>
                                    <div class="bg-color-blueLight padding10">
                                        <h2>Informasi Hasil Rangking Siswa </h2>
                                        <p><span class="bg-color-orange padding5 fg-color-white">Ketik</span> : SUB&ltSPASI&gtHASIL&ltSPASI&gtNO UN (*)</p>
                                        <p><span class="bg-color-green padding5 fg-color-white">Contoh</span> : SUB HASIL 21345678901234</p>
                                        <p>
                                            <span class="bg-color-grayDark padding5 fg-color-white">Respon</span> yang akan didapat:<br/>
                                            <ol style="padding-left: 10px;">
                                                <li>No UN/US 21345678901234 posisi sementara di smp 13 urutan 12 dari pagu 324</li>
                                                <li>(JIKA DATA SALAH) No UN/US 21345678901234 tidak ada dalam database, mohon cek kembali no peserta anda</li>
                                            </ol>
                                        </p>
                                    </div>
                                    <div class="bg-color-lighten padding10">
                                        <h2 >Informasi Nilai Sementara Sekolah</h2>
                                        <p><span class="bg-color-orange padding5 fg-color-white">Ketik</span> : SUB&ltSPASI&gtNILAI&ltSPASI&gtSEKOLAH</p>
                                        <p>
                                            <span class="bg-color-green padding5 fg-color-white">Contoh</span> : SUB NILAI SMK2TAV
                                        </p>
                                        <p>
                                            <span class="bg-color-grayDark padding5 fg-color-white">Respon</span> yang akan didapat:<br/>
                                            <ol style="padding-left: 10px;">
                                                <li>SMK 2 Teknik Audio Video nilai sementara tahun 2012: 49,55 – 50,76</li>
                                                <li>(JIKA KODE JURUSAN SMK TIDAK DITEMUKAN) : Jurusan SMK 2 TGB,TPTL, TPM, TMO</li>
                                            </ol>
                                        </p>
                                    </div>
                                    <div class="bg-color-blueLight padding10">
                                        <h2>Informasi Cek Data Peserta</h2>
                                        <p>
                                            <span class="bg-color-orange padding5 fg-color-white">Ketik</span> : SUB&ltSPASI&gtCEK&ltSPASI&gtNO UN (*)
                                        </p>
                                        <p>
                                            <span class="bg-color-green padding5 fg-color-white">Contoh</span> : SUB CEK 21345678901234
                                        </p>
                                        <p>
                                            <span class="bg-color-grayDark padding5 fg-color-white">Respon</span> yang akan didapat:<br/>
                                            <ol style="padding-left: 10px;">
                                                <li>NO UN 21345678901234 An. Roziq Nur Jaman nilai 50.55 data sudah masuk: 1 SMP2 2 SMP1 3 SMP3 4 SMP5</li>
                                                <li>(JIKA DATA SALAH) No UN/US 21345678901234 tidak ada dalam database, mohon cek kembali no peserta anda</li>
                                            </ol>
                                        </p>
                                    </div>
                                    <div class="bg-color-lighten padding10">
                                        <h2 >Informasi Alamat & Pagu Sekolah</h2>
                                        <p>
                                            <span class="bg-color-orange padding5 fg-color-white">Ketik</span> : SUB&ltSPASI&gtINFO&ltSPASI&gtSEKOLAH
                                        </p>
                                        <p>
                                            <span class="bg-color-green padding5 fg-color-white">Contoh</span> : SUB INFO SMP1
                                        </p>
                                        <p>
                                            <span class="bg-color-grayDark padding5 fg-color-white">Respon</span> yang akan didapat:<br/>
                                            <ol style="padding-left: 10px;">
                                                <li>SMP 1 Jl.Pacar No.4-6, Pagu: 228</li>
                                                <li>(JIKA KODE JURUSAN SMK TIDAK DITEMUKAN) : Jurusan SMK 2 TGB,TPTL, TPM, TMO</li>
                                            </ol>
                                        </p>
                                    </div>
                                    <div class="bg-color-blueLight padding10">
                                        <h2>Informasi Validasi (Rekomendasi, Mutasi, dan Tahun Lalu)</h2>
                                        <p>
                                            <span class="bg-color-orange padding5 fg-color-white">Ketik</span> : SUB&ltSPASI&gtVALID&ltSPASI&gtNO UN (*)
                                        </p>
                                        <p>
                                            <span class="bg-color-green padding5 fg-color-white">Contoh</span> : SUB VALID 21345678901234
                                        </p>
                                        <p>
                                            <span class="bg-color-grayDark padding5 fg-color-white">Respon</span> yang akan didapat:<br/>
                                            <ol style="padding-left: 10px;">
                                                <li>No UN/US 21345678901234 a/n Arif Maulana, Sidoarjo, Ortu Mashudi sudah mendaftar dalam luar kota di [wilayah barat/timur/utara/pusat/selatan] / smk tetapi belum tervalidasi</li>
                                                <li>No UN/US 21345678901234 An Arif Maulana, Sidoarjo, Ortu Mashudi sudah mendaftar dalam luar kota di [wilayah barat/timur/utara/pusat/selatan] / smk dan sudah divalidasi</li>
                                            </ol>
                                        </p>
                                    </div>
                                    <div class="bg-color-lighten padding10">
                                        <h2 >Berita/Pengumuman Terakhir di Website PPDBSurabaya.net</h2>
                                        <p>
                                            <span class="bg-color-orange padding5 fg-color-white">Ketik</span> : SUB&ltSPASI&gtBERITA
                                        </p>
                                        <p>
                                            <span class="bg-color-green padding5 fg-color-white">Contoh</span> : SUB BERITA
                                        </p>
                                        <p>
                                            <span class="bg-color-grayDark padding5 fg-color-white">Respon</span> yang akan didapat:<br/>
                                            <ol style="padding-left: 10px;">
                                                <li>Pendaftaran Telah dimulai.<br/>Selengkapnya http://bit.ly/ppdbsurabya</li>
                                            </ol>
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