<?php
date_default_timezone_set('Asia/Jakarta');
$currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
$pengumuman_kawasan = mktime(0, 0, 0, 7, 7, 2015);
$pengumuman_umum = mktime(0, 1, 30, 7, 10, 2015);
$tutup_ranking = mktime(23, 59, 59, 7, 9, 2015);
?>

<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Peringkat
            <?php
                if ($jalur=='umum'){if ($pengumuman_umum<$currentTime)echo "Akhir"; else echo "Sementara";} else echo "Akhir";
            ?>
        </h1>
        <h2>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=='kawasan'?'Sekolah ':'').ucfirst($jalur);?></h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="padding10">
                    <h2><?php echo $sekolah[$selected]; ?></h2>
                </div>
                <div class="blue-light-nohover">
                    <p>Daftar ulang dilaksanakan pada tanggal <?php echo ($jalur=='umum'?"10,11 Juli 2015 pukul 08.00 sampai dengan pkl 16.00 WIB & 12 Juli 2015 pukul 08.00 sampai dengan pukul 14.00 WIB":"07 Juli 2015 pukul 08.00 sampai dengan 16.00 WIB & 08 Juli 2015 pukul 08.00 sampai dengan 14.00 WIB"); ?> di sekolah tempat diterima.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <p class="pull-right">
                            <?php if ($waktuRAnking && $jalur == 'umum' && ($currentTime<$tutup_ranking))
                            {
                                $waktu = explode(" ", $waktuRAnking); echo "Hasil peringkat tertanggal :".$waktu[1]." pukul  ".$waktu[0];
                            }
                            else {
                                echo "Hasil peringkat tertanggal 09/07/2015 pukul 23:59:59";
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <?php if(isset($hasil) && count($hasil) > 0) { ?>
                <p class="pull-right"><small>Menampilkan <?php echo ($urut+1)."-".($urut+  count($hasil))." dari ".$total. " hasil";?></small></p><br>
                <?php } ?>
                <div>
                    <?php
                    $kategori = array('DK' => '', 'RD' => ' <sup>RD</sup>', 'RL' => ' <sup>RL</sup>', 'MT' => ' <sup>MT</sup>');
                    if(isset($hasil) && count($hasil) > 0) {
                        $nomor = $urut;
                        ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr><td>NO</td><td>NO. UN</td><td>NAMA </td><td>SEKOLAH ASAL</td>
                                    <?php if ($jalur=="umum")
                                            {
                                                echo "<td style='width: 10%;''>NILAI UN/US</td>";
                                            }
                                        else if ($jalur == "kawasan")
                                            {
                                                //echo "<td style='width: 10%;''>NILAI UN</td>";
                                                //echo "<td style='width: 10%;''>NILAI TPA</td>";
                                                echo "<td style='width: 10%;''>NILAI TOTAL</td>";
                                            }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($hasil as $row){ ?>
                                <tr><td><?php echo ++$nomor;?></td><td><a href="<?php echo site_url("/hasil/hasilseleksi/".$jenjang."/".$jalur."/un/".$row['output_uasbn']);?>"><?php echo $row['output_uasbn']?></a></td>
                                    <td><?php echo $row['output_nama_siswa'].$kategori[$row['output_jenis_validasi']]?></td><td><?php echo $row['output_asal_sekolah']?></td>
                                    <?php if ($jalur=="umum")
                                            {
                                                echo "<td style='width: 10%;''>".$row['output_nilai_uan']."</td>";
                                            }
                                        else if ($jalur == "kawasan")
                                            {
                                                //echo "<td style='width: 10%;''>".$row['output_nilai_uan']."</td>";
                                                //echo "<td style='width: 10%;''>".$row['output_nilai_tpa']."</td>";
                                                echo "<td style='width: 10%;''>".$row['output_nilai_total']."</td>";
                                            }
                                    ?>
                                </tr>
                                <?php } ?>
                             </tbody>
                        </table>
                    <?php echo $this->pagination->create_links(); ?>
                    Keterangan <br>
                <b>RD</b> : Rekomendasi Dalam Kota<br>
                <b>RL</b> : Luar Kota<br>
                <b>MT</b> : Mutasi<br>
                    <?php
                    }
                    else{
                        echo "Tidak ditemukan data.";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>