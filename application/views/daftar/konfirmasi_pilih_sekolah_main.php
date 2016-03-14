<h2>Langkah-langkah Pendaftaran</h2>
<ol class="progtrckr" data-progtrckr-steps="6">
    <li class="progtrckr-done">(1)</li><!--
 --><li class="progtrckr-done">(2)</li><!--
 --><li class="progtrckr-done">(3)</li><!--
 --><li class="progtrckr-done">(4)</li><!--
 --><li class="progtrckr-doing">(5)</li><!--
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
                    <li class="sidebar-list step-daftar-doing">
                        <div>
                            <div>
                                <p><span style="margin-right:10px;" class="fa fa-refresh"></span><b>Konfirmasi Akhir Pendaftaran</b></p>
                                <p style="color:#000000; margin:auto auto auto 25px;">
                                    Periksa data pendaftaran sebelum disimpan permanen
                                </p>
                            </div>
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

            <h3>Konfirmasi Pendaftaran</h3>
            <h3>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?> Kategori <b class="red"><?php echo $kategori; ?></b></h3>
            <hr/>

            <?php echo form_open($formAction, array('id' => 'konfirmasiForm', 'class'=>'form-horizontal', 'role'=>'form')); ?>

            <p>
                Apakah Anda yakin data yang Anda isi di bawah ini benar dan akan Anda simpan secara permanen?
            </p>
             <style>
                table#konfirmasiSekolahTable td:first-child {
                    width: 200px;
                    font-weight: bold;
                }
            </style>
            <table id="konfirmasiSekolahTable">
                <tr>
                    <td>No UN/US</td>
                    <td style="width:10px;">:</td>
                    <td><?php echo $siswa['no_un']; ?></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><?php echo $siswa['nama']; ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $siswa['tmpt_lahir']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $siswa['tgl_lahir']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?php echo $siswa['jenis_kelamin']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Sekolah Asal</td>
                    <td>:</td>
                    <td><?php echo $siswa['sekolah_asal']; ?></td>
                </tr>
                <tr>
                    <td>Tamatan</td>
                    <td>:</td>
                    <td><?php echo $tamatan; ?></td>
                </tr>
                <tr>
                    <td>No. KK</td>
                    <td>:</td>
                    <td class="red"><?php echo $siswa['no_kk']; ?></td>
                </tr>
                <tr>
                    <td>Kategori Siswa</td>
                    <td>:</td>
                    <td class="red"><?php echo $siswa['jenisValidasi']; ?></td>
                </tr>
                <tr>
                    <td>Nama Ortu</td>
                    <td>:</td>
                    <td>
                        <?php echo $siswa['nama_ortu']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?php echo $siswa['alamat']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td>
                        <?php echo $siswa['telepon']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nilai UN/US Bahasa Indonesia</td>
                    <td>:</td>
                    <td class="red"><?php echo $siswa['nuBi']; ?></td>
                </tr>
                <tr>
                    <td>Nilai UN/US Mat</td>
                    <td>:</td>
                    <td class="red"><?php echo $siswa['nuMat']; ?></td>
                </tr>
                <tr>
                    <td>Nilai UN/US IPA</td>
                    <td>:</td>
                    <td class="red"><?php echo $siswa['nuIpa']; ?></td>
                </tr>
                <?php
                if ($jenjangState->getName() != 'smp') {
                ?>
                <tr>
                    <td>Nilai UN/US Bahasa Inggris</td>
                    <td>:</td>
                    <td class="red"><?php echo $siswa['nuBig']; ?></td>
                </tr>
                <?php
                }
                ?>
                <tr>
                    <td>Nilai Total</td>
                    <td>:</td>
                    <td class="red"><?php echo $siswa['nuTot']; ?></td>
                </tr>
                <?php $this->load->view('daftar/konfirmasi_pilih_sekolah_'.$jenjangState->subView()); ?>
            </table>
            <br>
            <p>
                <?php
                $attributes = 'class = "btn btn-warning"';
                $attributes2 = 'class = "btn btn-danger"';
                echo form_button(array('content' => 'Simpan Permanen', 'class' => 'btn btn-primary','onclick' => 'onSubmit();')).' '.form_submit('tidak', 'Tidak', $attributes).' '.anchor('pendaftaran/batal', 'Batalkan Pendaftaran', $attributes2);
                ?>
            </p>
            <?php echo form_close(); ?>

    </div>
</div>