<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1><small>Pengumuman Hasil Seleksi</small></h1>
        <h2>PPDB SMP Jalur Satu Lokasi</h2>
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
                <?php echo form_open('umum/satulokasi', array('id' => 'formCari', 'class' => 'form-inline')); ?>
                    <div class="form-group">
                        <label><strong>Nama Sekolah : </strong></label>
                        <?php $options= array(''=>'- Pilih Sekolah -', 'smpn28' => 'SMPN 28', 'smpn44' => 'SMPN 44', 'smpn45' => 'SMPN 45', 'smpn46' => 'SMPN 46', 'smpn47' => 'SMPN 47', 'smpn48' => 'SMPN 48', 'smpn50' => 'SMPN 50', 'smpn51' => 'SMPN 51', 'smpn52' => 'SMPN 52');
                        echo form_dropdown('sekolah', $options, '', 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>