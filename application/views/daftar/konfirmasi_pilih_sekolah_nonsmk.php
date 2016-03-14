<tr>
    <td>Wilayah</td>
    <td>:</td>
    <td><?php echo $wilayah; ?></td>
</tr>
<tr>
    <td>Sub Rayon</td>
    <td>:</td>
    <td><?php echo $subRayon; ?></td>
</tr>
<?php
$i = 1;
foreach ($siswa['pilihan'] as $pilihan) {
    if (is_array($pilihan)) {
        $pilihanLuar = array_values($pilihan);
        $pilihan = $pilihanLuar[0];
    }
?> 
<tr>
    <td>Pilihan <?php echo $i; ?></td>
    <td>:</td>
    <td class="red"><?php echo $pilihan; ?></td>
</tr>
<?php
    $i++;
}
?> 
