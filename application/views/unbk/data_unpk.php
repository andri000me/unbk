<div class="row" id="header-isi">
    <div class="col-sm-12">
        <div>
            <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
            <h1>DATA LEMBAGA UNPK KEJAR PAKET <?php echo $jenjang;?></h1>
            <h3>UJIAN NASIONAL PENDIDIKAN KESETARAAN TAHUN 2015-2016</h3>
        </div>
    </div>
</div>
<?php 
// print_r($rekap);
// print_r($jenjang);
?>
<div>
                    <?php
                    if(isset($rekap) && count($rekap) > 0) {
                        $nomor = $urut;
                        ?>
                        <table class="table table-hover table-striped">
                            <?php if($jenjang == 'C') {?> 
							<thead>
                                <tr><td>NO</td><td>Kode SKB</td><td>Nama SKB</td><td>Peserta IPA Laki-Laki</td><td>Peserta IPA Perempuan</td><td>Peserta IPS Laki-Laki</td><td>Peserta IPS Perempuan</td><td>JENIS PAKET</td><td>TEMPAT UJIAN</td></tr>
                            </thead>
                            <tbody>
                                <?php foreach($rekap as $row){ ?>
                                <tr><td><?php echo ++$nomor;?></td><td><?php echo $row['kode_skb']?></td><td><?php echo $row['nama_skb']?></td><td><?php echo $row['jumlah_ipa_L']?></td><td><?php echo $row['jumlah_ipa_W']?></td><td><?php echo $row['jumlah_ips_L']?></td><td><?php echo $row['jumlah_ips_w']?></td><td><?php echo $row['jenis_paket']?></td><td><?php echo $row['tempat_ujian']?></td></tr>
                                <?php } ?>
                            </tbody>
							<?php } 
							else{?>
							<thead>
                                <tr><td>NO</td><td>Kode SKB</td><td>Nama SKB</td><td>Peserta Laki-Laki</td><td>Peserta Perempuan</td><td>JENIS PAKET</td>
								<td>TEMPAT UJIAN</td></tr>
                            </thead>
                            <tbody>
                                <?php foreach($rekap as $row){ ?>
                                <tr><td><?php echo ++$nomor;?></td><td><?php echo $row['kode_skb']?></td><td><?php echo $row['nama_skb']?></td><td><?php echo $row['peserta_pria']?></td><td><?php echo $row['peserta_wanita']?></td><td><?php echo $row['jenis_paket']?></td><td><?php echo $row['tempat_ujian']?></td></tr>
                                <?php } ?>
                            </tbody>
							<?php } ?>
                        </table>
                    
                    <?php }
                    else{
                        echo "Tidak ditemukan data UNPK.";
                    }
                    ?>
</div>