<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Peringkat Pemenuhan Pagu <?php echo ($part==2?'Akhir':''); ?></h1>
        <h2>PPDB <?php echo strtoupper($jenjang)?> Jalur <?php echo ucfirst($jalur); ?></h2>

        <br/>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <?php echo form_open('hasil/pemenuhanpagu/'.$jalur.'/'.$jenjang.'/'.$part, array('id' => 'formCari', 'class' => 'form-inline')); ?>
                    <div class="input-control text">
                        <label class="fg-color-white"><strong>Nama Sekolah : </strong></label>
                        <?php $options= array(''=>'- Pilih Sekolah -');
                        $options = $options + $sekolah;
                        echo form_dropdown('sekolah', $options, $kodesekolah, 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <?php if($kodesekolah!='') {?>
            <div class="row">
                <div class="col-sm-12">
                    <h2>Hasil Pemenuhan Pagu <?php echo ($part==2?'Akhir':''); ?> Jalur <?php echo ucfirst($jalur); ?> <?php echo $sekolah[$kodesekolah];?></h2>
                    <?php if(isset($pemenuhan) && count($pemenuhan) > 0) {?>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr><th>NO</th><th>NO UN</th> <th>NAMA</th><th>ASAL SEKOLAH</th><?php if (strtoupper($jalur)=='UMUM') { ?><th>PILIHAN</th> <?php } ?><th>NILAI</th><th>DITERIMA SEBELUMNYA</th><th></th></tr>
                        </thead>
                        <tbody>
                            <?php $nomor=0;
                            $kategori = array('DK' => '', 'RD' => ' <sup>RD</sup>', 'RL' => ' <sup>RL</sup>', 'MT' => ' <sup>MT</sup>');
                            if(isset($pemenuhan) && count($pemenuhan)> 0){
                                foreach($pemenuhan as $row){ ?>
                                    <tr><td><?php echo ++$nomor;?></td><td><?php echo $row['output_uasbn']; ?></td>
                                        <td><?php echo $row['output_nama_siswa'].$kategori[$row['output_jenis_validasi']]?></td><td><?php echo $row['output_asal_sekolah']?></td>
                                        <?php if (strtoupper($jalur)=='UMUM') echo "<td><center>".$row['output_pilihan']."</center></td>" ?>
                                        <td><?php echo ($jalur=="umum"?$row['output_nilai_uan']:$row['output_nilai_total']);?></td>
                                        <td><?php if(($row['pindahan'])=='21')
                                                    {
                                                        echo $sekolah[$row['output_asal']];
                                                    }
                                                    else{
                                                        echo "-";
                                                    }
                                                    ?>
                                        </td>
                                        <td><a class="btn btn-info" href="<?php echo site_url('/hasil/hasilseleksi');?><?php echo '/'.$jenjang.'/'.$jalur;?>/buktipemenuhan/<?php echo $row['output_uasbn'].($part==2?'/2':'');?>">Unduh Bukti</a></td>
                                    </tr>
                            <?php }
                            }?>
                        </tbody>
                    </table>
                    <?php }
                    else{
                        echo "<b>Semua peserta didik telah mendaftar ulang sehingga tidak ada pemenuhan pagu.</b>";
                    }
                    ?>
                    <br>Keterangan <br>
                    <b>RD</b> : Rekomendasi Dalam Kota<br>
                    <b>RL</b> : Luar Kota<br>
                    <b>MT</b> : Mutasi<br>
                </div>
            </div>
        <?php } ?>
    </div>
</div>