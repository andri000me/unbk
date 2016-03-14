<?php
date_default_timezone_set('Asia/Jakarta');
$currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
$pengumuman_kawasan = mktime(0, 0, 0, 7, 7, 2015);
$pengumuman_umum = mktime(0, 1, 30, 7, 10, 2015);
?>
<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>
            Peringkat
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
                <div class="blue-light-nohover">
                  Cari berdasarkan sekolah
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-sm-12 padding10">
                <?php echo form_open('hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/sekolah', array('id' => 'formCari1', 'class' => 'form-inline')); ?>
                    <div class="input-control text">
                        <label class="fg-color-white"><strong>Nama Sekolah : </strong></label>
                        <?php $options= array(''=>'- Pilih Sekolah -');
                        $options = $options + $sekolah;
                        echo form_dropdown('sekolah', $options, '', 'style="width:50%;" id="sekolah" class="form-control"'); ?>
                        <button class="btn btn-info" onclick="klik_sekolah();" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <h3>atau</h3>
        <div class="row">
            <div class="col-sm-12">
                <div class="blue-light-nohover">
                  Cari berdasarkan nomor <?php echo ($jenjang=='sd'?'pendaftaran':'UN')?>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-sm-12">
                <div class="padding10">
                    <?php echo form_open('hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/un', array('id' => 'formCari2', 'class' => 'form-inline')); ?>
                        <div class="input-control text">
                            <label class="fg-color-white"><strong>No UN/US : </strong></label><input type="text" class="form-control" placeholder="Masukkan Nomor UN/US" maxlength="14" name="noUn" id="noUn" value="<?php echo (isset($noUn)?$noUn:''); ?>" style="width: 50%;">
                            <button class="btn btn-info" onclick="document.getElementById('formCari2').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function klik_sekolah(){
        var e = document.getElementById("sekolah");
        var val = e.options[e.selectedIndex].value;
        if(val!=''){
            document.getElementById('formCari1').submit();
        }
        else{
            alert('Pilih Sekolah');
        }
    }
</script>