<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
            Jenis Siswa:<br />
            <?php
            $options = array(
                '1' => 'Dalam Kota',
                '2' => 'Mutasi',
                '3' => 'Rekomendasi Dalam Kota',
                '4' => 'Luar Kota',
                '5' => 'Tahun Lalu'
            );
            echo form_dropdown('jenis_siswa', $options, '1');
            ?>
        </p>
        <p>
            <?php
            echo form_submit('submit', 'Submit').' '.anchor('pendaftaran/batal', 'Batalkan Pendaftaran');
            ?>
        </p>
        <?php echo form_close(); ?>
    </body>
</html>
