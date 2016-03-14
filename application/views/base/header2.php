<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Situs Resmi PPDB Surabaya 2015">
    <meta name="author" content="Dinas Pendidikan Kota Surabaya">
    <meta name="keywords" content="Pendidikan, Peserta Didik, PPDB, PSB, Siswa Baru, Peserta Didik Baru, Surabaya, 2015">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="<?php echo URL_STATIC;?>/css/blueppdb2.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo URL_STATIC;?>/img/favicon2.png">
    <title>PPDB Surabaya 2015<?php echo (isset($page_title)?" | ".$page_title:""); ?></title>
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
        var ServerInitTimestamp = new Date(<?php echo date('Y'); ?>, <?php echo date('m') - 1; ?>, <?php echo date('d'); ?>, <?php echo date('H'); ?>, <?php echo date('i'); ?>, <?php echo date('s'); ?>);var LocalInitTimestamp = new Date();var jarak = LocalInitTimestamp - ServerInitTimestamp;
    </script>
</head>

<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="nav navbar-nav">
                        <li style="font-size:115%;">
                            <a href="<?php echo site_url('/');?>" title="Klik untuk kembali ke halaman utama">
                                <span class="element brand">
                                    <img class="place-left" src="<?php echo URL_STATIC;?>/img/logo32.png" style="height: 25px"/>
                                    <b>PPDB Surabaya</b> 2015
                                </span>
                            </a>
                        </li>
                    </ul>
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

