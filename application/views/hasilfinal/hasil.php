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
                                    <a href="<?php echo base_url();?>"><h2><i class="icon-arrow-left-3 fg-color-darken padding10" title="kembali ke halaman utama"></i></h2></a>
                                </div>
                                <div class="span8">
                                    <h1>Hasil Seleksi <?php if($jalur=='umum') echo "Final"?></h1>
                                    <h2>PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=='kawasan'?'Sekolah ':'').ucfirst($jalur);?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bg-color-blueLight padding10 border-color-<?php echo $colors[$jenjang];?>">
                              Cari berdasarkan sekolah
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9 bg-color-<?php echo $colors[$jenjang];?> padding10">
                                <?php echo form_open('hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/sekolah', array('id' => 'formCari1')); ?>
                                    <div class="input-control text">
                                        <label class="fg-color-white"><strong>Nama Sekolah : </strong></label>
                                        <?php $options= array(''=>'- Pilih Sekolah -');
                                        $options = $options + $sekolah;
                                        echo form_dropdown('sekolah', $options, '', 'style="width:50%;" id="sekolah"'); ?>
                                        <span class="button place-right" onclick="klik_sekolah();" style="cursor: pointer"><i class="icon-search"></i>Cari</span>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        <h3>atau</h3>
                        <div class="row">
                            <div class="bg-color-blueLight padding10 border-color-<?php echo $colors[$jenjang];?>">
                              Cari berdasarkan nomor <?php echo ($jenjang=='sd'?'pendaftaran':'UN')?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span9 bg-color-<?php echo $colors[$jenjang];?> padding10">
                                <?php echo form_open('hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/un', array('id' => 'formCari2')); ?>
                                    <div class="input-control text">
                                        <label class="fg-color-white"><strong>No UN/US : </strong></label><input type="text" placeholder="Masukkan Nomor UN/US" maxlength="14" name="noUn" id="noUn" value="<?php echo (isset($noUn)?$noUn:''); ?>" style="width: 50%;">
                                        <span class="button place-right" onclick="document.getElementById('formCari2').submit()" style="cursor: pointer"><i class="icon-search"></i>Cari</span>
                                    </div>
                                <?php echo form_close(); ?>
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
<?php $this->load->view('base/footer'); ?>