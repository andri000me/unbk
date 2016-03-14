<?php $this->load->view('base/header');
$colors = array('smp' => 'blue', 'sma' => 'green', 'smk' => 'yellow');
?>
<div class="page" id="page-index">
    <div class="page-region">
        <div class="page-region-content">
            <div class="grid">
                <div class="row">
                    <div class="span9">
                        <div class="row" id="header-isi">
                            <div class="span9">
                                <div class="span1">
                                    <a href="<?php echo base_url()."hasil/lihat/".$jenjang."/".$jalur;?>"><h2><i class="icon-arrow-left-3 fg-color-darken padding10" title="Kembali"></i></h2></a>
                                </div>
                                <div class="span8">
                                    <h1>Hasil Seleksi <?php if($jalur=='umum') echo "Final"?></h1>
                                    <h2>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=='kawasan'?'Sekolah ':'').ucfirst($jalur);?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9 bg-color-<?php echo $colors[$jenjang];?> padding10">
                                <h2 class="fg-color-white"><?php echo $sekolah[$selected]; ?></h2>
                            </div>
                            <div class="bg-color-blueLight padding10 border-color-<?php echo $colors[$jenjang];?>">
                                <?php if($jalur=='kawasan') { ?>
                                <p>Daftar ulang dilaksanakan pada tanggal <?php echo ($jalur=='umum'?"1-2 Juli 2013":"25-26 Juni 2013"); ?> di sekolah tempat diterima pada jam 08.00 - 14.00 WIB.</p>
                                <?php } else { ?>
                                <p>Berikut ini adalah daftar hasil seleksi final PPDB Jalur Umum di <?php echo $sekolah[$selected]; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <?php if(isset($hasil) && count($hasil) > 0) { ?>
                            <p class="place-right"><small>Menampilkan <?php echo ($urut+1)."-".($urut+  count($hasil))." dari ".$total. " hasil";?></small></p>
                            <?php } ?>
                            <div class="span9 bg-color-blueLight padding10">
                                <?php
                                $kategori = array('DK' => '', 'RD' => ' <b>*</b>', 'RL' => ' <b>**</b>', 'MT' => ' <b>(M)</b>');
                                if(isset($hasil) && count($hasil) > 0) {
                                    $nomor = $urut;
                                    ?>
                                    <table class="striped">
                                        <thead>
                                            <tr><td>NO</td><td>NO. UN</td><td>NAMA </td><td>SEKOLAH ASAL</td><td style="width: 10%;"><?php echo ($jalur=="umum"?"NILAI UN/US": "NILAI TOTAL");?></td></tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($hasil as $row){ ?>
                                            <tr><td><?php echo ++$nomor;?></td><td><a href="<?php echo "/hasil/hasilseleksi/".$jenjang."/".$jalur."/un/".$row['output_uasbn'];?>"><?php echo $row['output_uasbn']?></a></td>
                                                <td><?php echo $row['output_nama'].$kategori[$row['output_jenis_validasi']]?></td><td><?php echo $row['output_asal_sekolah']?></td><td>
                                                    <?php echo ($jalur=="umum"?$row['output_nilai_uan']:$row['output_nilai_total'];?></td></tr>
                                            <?php } ?>
                                         </tbody>
                                    </table>
                                <?php echo $this->pagination->create_links(); ?>
                                Keterangan <br>
                            <b>*</b> : Rekomendasi Dalam Kota<br>
                            <b>**</b> : Luar Kota<br>
                            <b>(M)</b> : Mutasi<br>
                                <?php }
                                else{
                                    echo "Tidak ditemukan data.";
                                }
                                ?>
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
<?php $this->load->view('base/footer');