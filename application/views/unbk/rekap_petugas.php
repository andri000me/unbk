<?php //print_r($rekap)?>

<div>
                    <?php
                    if(isset($rekap) && count($rekap) > 0) {
                        $nomor = $urut;
                        ?>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr><td>NO</td><td>NPSN</td><td>Nama Sekolah</td><td>NAMA PETUGAS</td><td>JABATAN</td></tr>
                            </thead>
                            <tbody>
                                <?php foreach($rekap as $row){ ?>
                                <tr><td><?php echo ++$nomor;?></td><td><?php echo $row['npsn']?></td><td><?php echo $row['nama_sekolah']?></td><td><?php echo $row['nama_petugas']?></td><td><?php echo $row['jabatan']?></td><td></tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php
                    /*
					if(count($rekap==1) && $rekap[0]['input_status_validasi'] == 0) echo "<div class=\"padding10 red\"><h3 class=\"fg-color-yellow\">Peringatan!!</h3><span class=\"fg-color-white\">Data Calon peserta didik <strong>belum diverifikasi</strong>. Proses verifikasi data calon peserta dapat dilakukan di SMP/SMA/SMK Negeri terdekat dengan melampirkan berkas berikut:<ol>
                        <li>Ijasah/SKUASBN/SKHUN asli 1 buah dan fotokopi terlegalisir 1 buah</li><li>Kartu Keluarga (KK) asli 1 buah dan fotokopi terlegalisir 1 buah</li><li>Bukti Pendaftaran Online 1 buah</li></ol></span></div>";
					*/	
                    //echo $this->pagination->create_links(); ?>
                    <?php }
                    else{
                        echo "Tidak ditemukan data proktor dan teknisi.";
                    }
                    ?>
                </div>