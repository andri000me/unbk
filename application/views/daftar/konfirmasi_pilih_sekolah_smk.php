<tr>
    <td>SMK</td>
    <td>:</td>
    <td><?php echo $siswa['smk']; ?></td>
</tr>
<?php
$i = 1;
foreach ($siswa['pilihan'] as $pilihan) {
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
