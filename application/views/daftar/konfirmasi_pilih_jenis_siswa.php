<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open($formAction); ?>
        <p>
            No UN/US:<br />
            <?php echo $siswa['no_un']; ?>
        </p>
        <p>
            Konfirmasi <?php echo $count; ?>: Anda yakin Jenis Siswa adalah <?php echo $siswa['jenis_siswa']; ?>?
        </p>
        <p>
            <?php
            echo form_submit('ya', 'Ya').' '.form_submit('tidak', 'Tidak');
            ?>
        </p>
        <?php echo form_close(); ?>
    </body>
</html>
