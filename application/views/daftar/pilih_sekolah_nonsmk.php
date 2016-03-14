<?php if ($jenisSiswaState->belumDiketahui && $siswa['kk'] == '1'): ?>
<tr>
    <td valign="top">Kecamatan Tempat Tinggal</td>
    <td valign="top">:</td>
    <td>
        <?php
        echo $jenisSiswaState->kecamatanDropDown(
            $siswa['kecamatan'], 'onchange="onKecamatanChange();" disabled="disabled" class="form-control input-daftar"'
        );
        ?> 
    </td>
</tr>
<?php endif ?>

<?php if (!$jenisSiswaState->belumDiketahui || (isset($siswa['kecamatan']) && $siswa['kecamatan']) || ($jenisSiswaState->belumDiketahui && $siswa['kk'] == '2')): ?>
<tr>
    <td valign="top">Wilayah</td>
    <td valign="top">:</td>
    <td>
        <?php if ($jenisSiswaState->belumDiketahui && $siswa['kk'] == '1'): ?>
            <?php
            echo $jenisSiswaState->wilayahByKecamatan(
                $siswa['kecamatan'],
                'disabled="disabled" class="form-control input-daftar"',
                $siswa['wilayah']
            );
            ?>
        <?php else: ?>
            <?php
            echo $jenisSiswaState->wilayahDropDown(
                $siswa['wilayah'],//isset($siswa['wilayah']) ? $siswa['wilayah'] : $siswa['wilayah'] = set_value('wilayah', '0'),
                'onchange="onWilayahChange();" disabled="disabled" class="form-control input-daftar"'
            );
            ?>
        <?php endif?>
    </td>
</tr>
<?php endif ?>

<?php
if ($siswa['wilayah']) {
?> 
<tr>
    <td valign="top">Sub Rayon</td>
    <td valign="top">:</td>
    <td> 
        <div class="col-sm-12" style="margin: auto auto auto -15px;">
        <?php
        echo $jenisSiswaState->subRayonDropDown(
            $siswa['wilayah'],
            $siswa['subRayon'],
            'onchange="onSubRayonChange();" disabled="disabled"; class="form-control"'
        );
        ?> 
        </div>
    </td>
</tr>
<?php
}
?> 
<?php
if (isset($siswa['subRayon']) && $siswa['subRayon']) {
    $i = 1;
    $sudahPilihLuar = false;
    if (is_array($siswa['pilihan'])) {
        foreach ($siswa['pilihan'] as $pilihan) {
            if (!$sudahPilihLuar)
                $sudahPilihLuar = is_array($pilihan);// && array_key_exists('99', $pilihan);
?> 
<tr>
    <td valign="top">Pilihan <?php echo $i; ?></td>
    <td valign="top">:</td>
    <td>
        <div class="col-sm-12" style="margin: auto auto auto -15px;">
        <?php
        echo $jenisSiswaState->sekolahDropDown(
            $siswa['wilayah'],
            $siswa['subRayon'],
            $siswa['pilihan'],
            $pilihan,
            'onchange="onSekolahChange();" disabled="disabled" class="form-control"'
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
    $sekolah = $jenjangState->getSekolah($siswa['wilayah'], $siswa['subRayon'], $siswa['pilihan']);
    //if (is_array($sekolah) && (count($sekolah) + 1) - ($i - 1) > 0) {
    if ($i <= 2 && (is_array($sekolah) && (count($sekolah) + 1) - ($i - 1) > 0)) {
?> 
<tr>
    <td valign="top">Pilihan <?php echo $i; ?></td>
    <td valign="top">:</td>
    <td>
        <div class="col-sm-12" style="margin: auto auto auto -15px;">
            <?php echo $jenisSiswaState->sekolahDropDown(
            $siswa['wilayah'], 
            $siswa['subRayon'], 
            $siswa['pilihan'], 
            '0', 
            'onchange="onSekolahChange();" disabled="disabled" class="form-control"'); ?> 
        </div>            
    </td>
</tr>
<?php
    }
}
?> 