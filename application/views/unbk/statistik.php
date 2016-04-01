<?php //print_r($rekap)?>
<div class="row" id="header-isi">
  <div class="col-sm-12">
    <div>
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Data Statistik UNBK 2016 Kota Surabaya</h1>
    </div>
  </div>
</div>
				<div>
                    <?php
                    if(isset($rekap) && count($rekap) > 0) {
                        $nomor = $urut;
						$total_sekolah = 0;	$total_peserta = 0;	$total_server  = 0;	$total_client  = 0;	$total_proktor = 0;	$total_teknisi = 0;	$total_mandiri = 0;	$total_ggabung = 0;
                        ?>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr><td>JENJANG</td><td>JUMLAH SEKOLAH</td><td>JUMLAH PESERTA</td><td>JUMLAH SERVER</td><td>JUMLAH KLIEN</td>
								<td>JUMLAH PROKTOR</td><td>JUMLAH TEKNISI</td><td>MANDIRI</td><td>GABUNG</td></tr>
                            </thead>
                            <tbody>
                                <?php foreach($rekap as $row){ 
								$total_sekolah += $row['jumlah_sekolah'];
								$total_peserta += $row['jumlah_peserta'];
								$total_server += $row['jumlah_server'];
								$total_client += $row['jumlah_client'];
								$total_proktor += $row['jumlah_proktor'];
								$total_teknisi += $row['jumlah_teknisi'];
								$total_mandiri += $row['mandiri'];
								$total_ggabung += $row['menggabung'];
								?>
                                <tr><td><?php echo $row['jenjang']?></td><td><?php echo $row['jumlah_sekolah']?></td><td><?php echo $row['jumlah_peserta']?></td><td><?php echo $row['jumlah_server']?></td><td><?php echo $row['jumlah_client']?></td><td><?php echo $row['jumlah_proktor']?></td><td><?php echo $row['jumlah_teknisi']?></td><td><?php echo $row['mandiri']?></td><td><?php echo $row['menggabung']?></td></tr>
                                <?php } ?>
                            </tbody>
							<tfoot>
                                <tr><td><b>TOTAL</b></td><td><b><?php echo $total_sekolah;?></b></td><td><b><?php echo $total_peserta;?></b></td><td><b><?php echo $total_server;?></b></td>
								<td><b><?php echo $total_client;?></b></td><td><b><?php echo $total_proktor;?></b></td><td><b><?php echo $total_teknisi;?></b></td>
								<td><b><?php echo $total_mandiri;?></b></td><td><b><?php echo $total_ggabung;?></b></td></tr>
                            </tfoot>
                        </table>              
                    <?php }
                    else{
                        echo "";
                    }
                    ?>
                </div>