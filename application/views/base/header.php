<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sahabat UNBK Surabaya 2016">
    <meta name="author" content="Dinas Pendidikan Kota Surabaya">
    <meta name="keywords" content="Pendidikan, Peserta Didik, PPDB, PSB, Siswa Baru, Peserta Didik Baru, Surabaya, 2015">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="<?php echo URL_STATIC;?>/css/blueppdb2.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo URL_STATIC;?>/img/favicon2.png">
    <link rel="stylesheet" href="<?php echo URL_STATIC;?>/css/fa/css/font-awesome.min.css">

    <title>Sahabat UNBK Surabaya 2016<?php echo (isset($page_title)?" | ".$page_title:""); ?></title>
    <?php
    if (isset($this) && isset($this->uri)) {
        if (strtolower($this->uri->segment(1)) == 'pendaftaran') {
    ?>
    <script type="text/javascript">
        window.history.forward();
        var base_url = '<?php echo base_url(); ?>';
    </script>
    <?php
        }
    }
    ?>
    <script type="text/javascript">
        var ServerInitTimestamp = new Date(<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y'); ?>, <?php echo date('m') - 1; ?>, <?php echo date('d'); ?>, <?php echo date('H'); ?>, <?php echo date('i'); ?>, <?php echo date('s'); ?>);var LocalInitTimestamp = new Date();var jarak = LocalInitTimestamp - ServerInitTimestamp;
    </script>

    <script src="<?php echo URL_STATIC;?>/js/jquery.min.js"></script>
</head>

<body style="background-image: url('<?php echo URL_STATIC;?>/img/agsquare.png'); background-repeat: repeat;">
<div class="container-fluid2">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="padding-left: 15px; padding-right: 15px;  margin-right: -15px; margin-left: -15px;">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo site_url('/');?>" title="Klik untuk kembali ke halaman utama">
                        <span class="element brand">
                            <img class="place-left" src="<?php echo URL_STATIC;?>/img/logo32.png" style="height: 25px"/>
                            <b>Sahabat UNBK Surabaya 2016</b>
                        </span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo site_url('/umum/jadwal');?>" title="Klik untuk melihat jadwal">
                                <span class="element brand place-right">
                                        <span id="date-widget"></span>
                                        <span id="clock-widget"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</nav>

<div class="col-md-12">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <style>.link-penting {color :white; font-style: italic;} .link-penting:hover{color :white; font-style: italic; text-decoration: underline;}</style>
            <center>Selamat datang di homepage Sahabat UNBK Surabaya 2016.<br>Situs ini dipersiapkan sebagai pusat informasi mengenai Ujian Nasional Berbasis Komputer tahun 2016 di Kota Surabaya.</center>
            
            <?php

                $list_pesan = array();
                date_default_timezone_set('Asia/Jakarta');
                $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));

                $pesan = array(
                    'start' => mktime(0, 0, 0, 6, 22, 2015),
                    'end' => mktime(16, 0, 0, 6, 26, 2015),
                    'pesan' => "Pendaftaran PPDB jalur khusus prestasi (akademis, non akademis, olahraga) : 22 Juni 2015 s.d. 26 Juni 2015 pukul. 08.00 s.d. pukul. 16.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(16, 0, 0, 6, 26, 2015),
                    'end' => mktime(16, 0, 0, 6, 27, 2015),
                    'pesan' => "Daftar ulang PPDB jalur khusus prestasi (akademis, non akademis, olahraga) : 27 Juni 2015 pukul. 08.00 s.d. pukul. 16.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(16, 0, 0, 6, 26, 2015),
                    'end' => mktime(16, 0, 0, 6, 30, 2015),
                    'pesan' => "Pendaftaran PPDB jalur khusus mitra warga, satu lokasi dan inklusi : 27 Juni 2015 s.d. 30 Juni 2015 pukul 08.00 s.d. pukul 16.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(0, 0, 0, 6, 30, 2015),
                    'end' => mktime(16, 0, 0, 6, 30, 2015),
                    'pesan' => "Verifikasi mitra warga, satu lokasi dan inklusi : 30 Juni 2015 s.d. 1 Juli 2015 pukul. 08.00 s.d. pukul. 16.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(16, 0, 0, 7, 1, 2015),
                    'end' => mktime(16, 0, 0, 7, 3, 2015),
                    'pesan' => "Daftar ulang PPDB jalur khusus mitra warga, satu lokasi dan inklusi : 2 Juli 2015 s.d. 3 Juli 2015 pukul 08.00 s.d. pukul 16.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(0, 0, 0, 7, 4, 2015),
                    'end' => mktime(23, 59, 59, 7, 9, 2015),
                    'pesan' => "Pendaftaran PPDB jalur umum (<b>Dalam Kota</b>): 6 Juli 2015 pkl. 00.00 s.d 9 Juli 2015 pkl. 23.59 WIB; <br/> (<b>Luar Kota, Mutasi, Lulusan Tahun Lalu & Kejar Paket A/B </b>): 6 Juli 2015 pkl. 00.00 s.d 9 Juli 2015 pkl. 14.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(0, 0, 0, 7, 4, 2015),
                    'end' => mktime(23, 59, 59, 7, 9, 2015),
                    'pesan' => "Verifikasi Rekomendasi PPDB jalur umum (<b>Luar Kota, Mutasi, Lulusan Tahun Lalu & Kejar Paket A/B </b>): 6 Juli 2015 s.d 9 Juli 2015 pkl. 08.00 s.d. pkl. 16.00 WIB ",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(0, 0, 0, 7, 10, 2015),
                    'end' => mktime(16, 0, 0, 7, 12, 2015),
                    'pesan' => "Daftar ulang PPDB jalur umum: 10,11 Juli 2015 pkl 08.00 s.d. pkl 16.00 WIB & 12 Juli 2015 pkl 08.00 s.d. pkl 14.00 WIB  ",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(16, 0, 0, 7, 12, 2015),
                    'end' => mktime(17, 0, 0, 7, 12, 2015),
                    'pesan' => "Pengumuman pemenuhan pagu PPDB jalur umum: 13 Juli 2015 pkl 08.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(16, 0, 0, 7, 12, 2015),
                    'end' => mktime(16, 0, 0, 7, 13, 2015),
                    'pesan' => "Daftar ulang pemenuhan pagu PPDB jalur umum: 13 Juli 2015 pkl. 08.00 - 14.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(16, 0, 0, 6, 30, 2015),
                    'end' => mktime(23, 59, 59, 7, 3, 2015),
                    'pesan' => "Pendaftaran PPDB jalur sekolah kawasan (<b>Dalam Kota</b>): 1 Juli 2015 pkl. 00.00 s.d 3 Juli 2015 pkl. 23.59 WIB; <br/>(<b>Luar Kota, Mutasi, Lulusan Tahun Lalu & Kejar Paket A/B </b>): 1 Juli 2015 pkl. 00.00 s.d 3 Juli 2015 pkl. 14.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(16, 0, 0, 6, 30, 2015),
                    'end' => mktime(17, 0, 0, 7, 3, 2015),
                    'pesan' => "Verifikasi Rekomendasi PPDB jalur sekolah kawasan (<b>Luar Kota, Mutasi, Lulusan Tahun Lalu & Kejar Paket A/B </b>): 1 Juli 2015 s.d 3 Juli 2015 pkl. 08.00 s.d. pkl. 16.00 WIB ",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(0, 0, 0, 7, 4, 2015),
                    'end' => mktime(9, 0, 0, 7, 6, 2015),
                    'pesan' => "Tes Potensi Akademik PPDB jalur sekolah kawasan (<b>SMPN</b>): 5 Juli 2015 pkl. 08.00 s.d. pkl. 10.00 WIB; (<b>SMAN</b>): 6 Juli 2015 pkl. 08.00 s.d. pkl. 10.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(8, 0, 0, 7, 7, 2015),
                    'end' => mktime(14, 0, 0, 7, 8, 2015),
                    'pesan' => "Daftar ulang PPDB jalur sekolah kawasan: 07 Juli 2015 pk. 08.00 s.d. 16.00 WIB & 08 Juli 2015 pk. 08.00 s.d. 14.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(14, 0, 0, 7, 8, 2015),
                    'end' => mktime(8, 0, 0, 7, 9, 2015),
                    'pesan' => "Pengumuman pemenuhan pagu PPDB jalur sekolah kawasan: 9 Juli 2015 pkl. 00.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                $pesan = array(
                    'start' => mktime(8, 0, 0, 7, 9, 2015),
                    'end' => mktime(14, 0, 0, 7, 9, 2015),
                    'pesan' => "Daftar ulang pemenuhan pagu PPDB jalur sekolah kawasan: 9 Juli 2015 pkl. 08.00 - 14.00 WIB",
                    );
                array_push($list_pesan, $pesan);

                
            ?>
            <?php if (!strpos($_SERVER['REQUEST_URI'], 'pendaftaran')): ?>
            <center>
                <a href="<?php echo site_url('/umum/jadwal');?>">
                    <?php
                        foreach ($list_pesan as $isi_pesan) {
                            if(($isi_pesan['start']<$currentTime) && ($isi_pesan['end']>$currentTime))
                            { ?>
                                <div id="countdown" style='margin-right:3px;'>
                                <p><?php echo $isi_pesan['pesan'];?></p>
                                </div>
                            <?php }
                        }
                    ?>
                </a>
            </center>
            <?php endif; ?>
        </div>
    </div>

</div>
