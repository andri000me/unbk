<h2>Langkah-langkah Pendaftaran</h2>
<ol class="progtrckr" data-progtrckr-steps="6">
    <li class="progtrckr-done">(1)</li><!--
 --><li class="progtrckr-done">(2)</li><!--
 --><li class="progtrckr-done">(3)</li><!--
 --><li class="progtrckr-doing">(4)</li><!--
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
                    <li class="sidebar-list step-daftar-done">
                        <div>
                            <div><span style="margin-right:10px; color:#ffffff;" class="fa fa-check"></span><b>Login Pendaftaran</b></div>
                        </div>
                    </li>
                    <li class="sidebar-list step-daftar-doing">
                        <div>
                            <div>
                                <p><span style="margin-right:10px;" class="fa fa-refresh"></span><b>Form Pendaftaran</b></p>
                                <p style="color:#000000; margin:auto auto auto 25px;">
                                    Lengkapi data pendaftaran
                                </p>
                            </div>
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
                <h3>Form Pendaftaran</h3>
                <h3>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?> Kategori <b class="red"><?php echo $kategori; ?></b></h3>
                <hr/>

                <?php echo form_open($formAction, array('id' => 'pilihSekolahForm', 'class'=>'form-horizontal', 'role'=>'form')); ?>


                 <style>
                    table#pilihSekolahFormTable td:first-child {
                        width: 120px;
                        font-weight: bold;
                    }

                    table#pilihSekolahFormTable tr > td{
                        padding-bottom: 0.6em;
                    }
                </style>

                <table id="pilihSekolahFormTable">
                    <tr>
                        <td valign="top">No UN/US</td>
                        <td valign="top" style="width:10px;">:</td>
                        <td><?php echo $siswa['no_un']; ?></td>
                    </tr>
                    <tr>
                        <td valign="top">Nama Siswa</td>
                        <td valign="top">:</td>
                        <td>
                            <?php
                            echo $jenisSiswaState->allInput(
                                'nama',
                                $siswa['nama']
                            );
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Tempat Lahir</td>
                        <td valign="top">:</td>
                        <td>
                            <?php
                            echo $jenisSiswaState->allInput(
                                'tmpt_lahir',
                                $siswa['tmpt_lahir']
                            );
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Tanggal Lahir</td>
                        <td valign="top">:</td>
                        <td>
                            <?php
                            echo $jenisSiswaState->tglLahirInput(
                                'tgl_lahir',
                                $siswa['tgl_lahir']
                            );
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Jenis Kelamin</td>
                        <td valign="top">:</td>
                        <td>
                            <?php
                            echo $jenisSiswaState->jenisKelaminDropDown($siswa['jenis_kelamin']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Sekolah Asal</td>
                        <td valign="top">:</td>
                        <td>
                            <?php
                            echo $jenisSiswaState->tamatanInput(
                                $siswa['sekolah_asal'],
                                $siswa['tamatan'],
                                'onclick="changeStatusValidasi();"'
                            );
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">No. KK</td>
                        <td valign="top">:</td>
                        <td>
                            <?php
                            echo form_input(array(
                                'name' => 'no_kk',
                                'value' => $siswa['no_kk'],
                                'class' => 'form-control input-daftar'
                            ));
                            ?>
                            <?php //echo $jenisSiswaState->kkDropDown($siswa['kk'], 'onclick="changeStatusValidasi();"'); ?>
                            <input type="hidden" name="kk" value="<?php echo $siswa['kk'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Kategori Siswa</td>
                        <td valign="top">:</td>
                        <td id="statusValidasi"> -</td>
                    </tr>
                    <tr>
                        <td valign="top">Nama Ortu</td>
                        <td valign="top">:</td>
                        <td>
                            <?php
                            echo $jenisSiswaState->allInput(
                                'nama_ortu',
                                $siswa['nama_ortu']
                            );
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Alamat</td>
                        <td valign="top">:</td>
                        <td>
                            <?php
                            echo $jenisSiswaState->allInput(
                                'alamat',
                                $siswa['alamat'],
                                true
                            );
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Telepon/HP</td>
                        <td valign="top">:</td>
                        <td>
                                <?php
                                echo form_input(array(
                                    'name' => 'telepon',
                                    'value' => $siswa['telepon'],
                                    'class' => 'form-control input-daftar'
                                ));
                                ?>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">Nilai UN/US</td>
                        <td valign="top">:</td>
                        <td>
                            <style>
                                table#nilaiUn {
                                    width: 100%;
                                    padding: 0;
                                    margin: 0;
                                }
                                table#nilaiUn th, table#nilaiUn td {
                                    width: 120px !important;
                                    font-weight: normal !important;
                                    padding: 0;
                                    margin: 0;
                                }
                            </style>
                            <table id="nilaiUn">
                                <thead>
                                    <tr>
                                        <th>B. Indonesia</th>
                                        <th>Matematika</th>
                                        <th>IPA</th>
                                        <?php
                                        if ($jenjangState->getName() != 'smp') {
                                        ?>
                                        <th>B. Inggris</th>
                                        <?php
                                        }
                                        if (!$jenisSiswaState->belumDiketahui) {
                                        ?>
                                        <th>Total</th>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td valign="top" class="form-inline form-group">
                                            <?php
                                            echo $jenisSiswaState->nilaiInput(
                                                'nuBi',
                                                $siswa['nuBi']
                                            );
                                            ?>
                                        </td>
                                        <td valign="top" class="form-inline">
                                            <?php
                                            echo $jenisSiswaState->nilaiInput(
                                                'nuMat',
                                                $siswa['nuMat']
                                            );
                                            ?>
                                        </td>
                                        <td valign="top" class="form-inline">
                                            <?php
                                            echo $jenisSiswaState->nilaiInput(
                                                'nuIpa',
                                                $siswa['nuIpa']
                                            );
                                            ?>
                                        </td>
                                        <?php
                                        if ($jenjangState->getName() != 'smp') {
                                        ?>
                                        <td valign="top" class="form-inline">
                                            <?php
                                            echo $jenisSiswaState->nilaiInput(
                                                'nuBig',
                                                $siswa['nuBig']
                                            );
                                            ?>
                                        </td>
                                        <?php
                                        }
                                        if (!$jenisSiswaState->belumDiketahui) {
                                        ?>
                                        <td valign="top" class="form-inline">
                                            <?php
                                            echo $jenisSiswaState->allInput(
                                                'nuTot',
                                                $siswa['nuTot']
                                            );
                                            ?>
                                        </td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <?php $this->load->view('daftar/pilih_sekolah_'.$jenjangState->subView()); ?>
                </table>

                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="red col-sm-5">
                        <?php echo $errors; ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-9">
                        <p>
                            <?php
                            $attributes = 'class = "btn btn-danger"';

                            echo
                            form_button(
                                array(
                                    'id' => 'submitButton',
                                    'content' => 'Simpan',
                                    'class' => 'btn btn-primary'
                                )
                            ).' '.
                            anchor(
                                'pendaftaran/batal',
                                'Batalkan Pendaftaran',
                                $attributes
                            );
                            ?>
                        </p>
                    </div>
                </div>


                <input id="formEvent" type="hidden" name="event" />

                <?php echo form_close(); ?>
            </div>

        </div>
    </div>
</div>