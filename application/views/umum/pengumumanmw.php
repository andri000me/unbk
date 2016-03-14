<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1><small>Pengumuman Hasil Seleksi</small></h1>
        <h2>PPDB <?php echo strtoupper($jenjang)?> Jalur Mitra Warga</h2>
        <ol> 
            <li>Daftar ulang tanggal 2 Juli 2015  sampai dengan 3 Juli 2015 pukul 08.00 WIB sampai dengan 16.00 WIB di sekolah tujuan.</li> 
            <li>Membawa fotokopi surat keterangan lulus/UN/US dengan menunjukkan aslinya.</li> 
            <li>Membawa fotokopi kartu keluarga dengan menunjukkan aslinya.</li>
        </ol>
        <br/>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <?php echo form_open('umum/pengumumanmitrawarga/'.$jenjang, array('id' => 'formCari', 'class' => 'form-inline')); ?> 
                    <div class="form-group">
                        <label class="fg-color-white"><strong>Nama Sekolah : </strong></label>
                        <?php $options= array(''=>'- Pilih Sekolah -'); 
                        $options = $options + $sekolah; 
                        echo form_dropdown('sekolah', $options, (isset($kodeSekolah)? $kodeSekolah: ''), 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?> 
            </div>
        </div>
        <br/>
        <?php if(isset($kodeSekolah)){?>
        <div class="row">
            <div class="col-sm-12">
                <h2>Hasil Seleksi <?php echo $options[$kodeSekolah];?></h2>
                <?php
                if(isset($rekap) && count($rekap) > 0) {
                    $nomor = 0;
                    ?>
                <table class="table table-striped table-bordered" id="table-mitrawarga">
                        <thead>
                            <tr><th>NO</th><th>NO. UN</th><th>NAMA </th><th>ALAMAT</th><th>SEKOLAH ASAL</th><th>NILAI TOTAL</th></tr>
                        </thead>                                        
                        <tbody>
                            <?php 
                            $kode = '';
                            foreach($rekap as $row){ 
                                $nomor++;
                                if($jenjang == 'smk' && $row['input_pilihan1']!=$kode){
                                    $nomor=1;
                                    ?>
                            <tr class="bg-color-green"><td class="fg-color-white" colspan="6"><?php echo '↓ | Jurusan '.$jurusan[$row['input_pilihan1']]; ?></td></tr>
                            <?php }?>
                            <tr><td><?php echo $nomor;?></td><td><?php echo $row['input_uasbn']?></td><td><?php echo $row['input_nama_siswa']?></td><td><?php echo $row['input_alamat_siswa'].' - '.$row['input_kecamatan'] ?></td><td><?php echo $row['input_asal_sekolah']?></td><td><?php echo $row['input_nilai_uan']?></td></tr>
                            <?php 
                            $kode = $row['input_pilihan1'];
                                } ?>
                         </tbody>
                    </table>
                <?php 
                            } 
                else{
                    echo "Tidak ada pengumuman dari sekolah ini";
                }
                ?>
            </div>
        </div>
        <?php }  ?>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
      $('#table-mitrawarga').dataTable( {
        "bLengthChange": false
      } );
  } );
</script>