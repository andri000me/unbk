<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1 class="fg-color-white">Bukti Hasil Seleksi</h1>
        <h2 class="fg-color-white">PPDB <?php echo strtoupper($jenjang); ?> Jalur <?php echo ($jalur=="kawasan"?"Sekolah ":"").ucfirst($jalur); ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-5">
        <strong class="pull-right">Nomor UN/US : <?php echo $noUn; ?></strong>
        <?php echo form_open('/hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/'.$by.'/'.$noUn.($part==2?'/2':'/1'), array('id' => 'inputPinForm')); ?>
        <?php echo $errors; ?>
        <?php
        if (!$belumDiketahui) {
        ?>
        <p>
            PIN:<br />
            <?php
            echo form_password(array(
                'name' => 'pin',
                'class' => 'form-control',
            ));
            ?><br />
            Gunakan PIN pada surat PIN yang telah dibagikan oleh sekolah.
        </p>
        <?php
        } else {
        ?>
        <p>Tanggal Lahir:<br />
            <?php
            echo form_input(array(
                'name' => 'tglLahir',
                'value' => set_value('tglLahir'),
                'class' => 'form-control'
            ));
            ?><br />
            Masukkan dengan format tahun-bulan-tanggal (yyyy-mm-dd). Contoh: 2014-03-16
        </p>
        <?php
        }
        ?>
        <?php $attributes = 'class = "btn btn-info"';  echo form_submit('submit', 'Unduh', $attributes); ?>
        <?php echo form_close(); ?>
    </div>
</div>