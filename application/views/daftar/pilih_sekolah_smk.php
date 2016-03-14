<tr>
    <td valign="top">Sekolah</td>
    <td valign="top">:</td>
    <td >
        <?php
        echo $jenjangState->smkDropDown(
            $siswa['smk'],
            'onchange="onSekolahChange();" disabled="disabled" class="form-control input-daftar"'
        );
        ?> 
    </td>
</tr>
<?php
$i = 0;
if ($siswa['smk']) {
    if (is_array($siswa['pilihan'])) {
        foreach ($siswa['pilihan'] as $pilihan) {
?> 
<tr>
    <td valign="top">Pilihan Jurusan <?php echo $i + 1; ?></td>
    <td valign="top">:</td>
    <td>
        <div class="col-sm-12" style="margin: auto auto auto -15px;">
        <?php
        echo $jenjangState->jurusanDropDown(
            $siswa['smk'],
            $siswa['pilihan'],
            $pilihan,
            'onchange="onJurusanChange();" disabled="disabled" class="form-control input-daftar"'
        );
        ?> 
        </div>
    </td>
</tr>
<?php
            $i++;
        }
    } else {
        $siswa['pilihan'] = null;
    }
    if ($i < 2) {
?> 
<tr>
    <td valign="top">Pilihan Jurusan <?php echo $i + 1; ?></td>
    <td valign="top">:</td>
    <td>
        <div class="col-sm-12" style="margin: auto auto auto -15px;">
        <?php
        echo $jenjangState->jurusanDropDown(
            $siswa['smk'],
            $siswa['pilihan'],
            '0',
            'onchange="onJurusanChange();" disabled="disabled" class="form-control input-daftar"'
        );
        ?> 
        </div>
    </td>
</tr>
<?php
    }
}
?> 
