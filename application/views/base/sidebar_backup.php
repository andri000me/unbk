<div class="sidebar">
    <div style="padding-right: 5px;">
        <ul class="nav nav-pills nav-stacked">
            <li>
                <a><b>Utama</b></a>
                <ul style="list-style-type: none;">
                    <a href="<?php echo site_url('unduhbukti');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-download"></span></td><td>Unduh Bukti Pendaftaran</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/sambutan');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-envelope"></span></td><td>Sambutan</td></tr></table></li></a>
                    <a href="<?php echo site_url('un/lihat');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-th-large"></span></td><td>Pengumuman Nilai UN/US</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/pilihhasil');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-th-large"></span></td><td>Pengumuman PPDB</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/pengumumanpemenuhanpagu');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-th-large"></span></td><td>Pengumuman Pemenuhan Pagu</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/berita');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-camera"></span></td><td>Berita</td></tr></table></li></a>
                </ul>
            </li>

            <?php
                date_default_timezone_set('Asia/Jakarta');
                $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
                $start = mktime(0, 0, 0, 6, 3, 2016);
                $end = mktime(23, 59, 59, 6, 28, 2015);
                if (($currentTime < $end) && ($currentTime > $start))
                {?>
                    <li>
                        <a><b>Pendaftaran Kawasan</b></a>
                        <ul style="list-style-type: none;">
                            <a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=kawasan&jenjang=smp');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-list-alt"></span></td><td>Pendaftaran SMP</td></tr></table></li></a>
                            <a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=kawasan&jenjang=sma');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-list-alt"></span></td><td>Pendaftaran SMA</td></tr></table></li></a>
                            <a href="<?php echo site_url('rekap/beranda');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-list-alt"></span></td><td>Rekap Pendaftaran</td></tr></table></li></a>
                        </ul>
                    </li>
            <?php } else if ($currentTime > $end){ ?>
                    <li>
                        <a><b>Pendaftaran Kawasan</b></a>
                        <ul style="list-style-type: none;">
                            <a href="<?php echo site_url('rekap/beranda');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-list-alt"></span></td><td>Rekap Pendaftaran</td></tr></table></li></a>
                        </ul>
                    </li>
            <?php } ?>

             <?php
                date_default_timezone_set('Asia/Jakarta');
                $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
                $start = mktime(0, 0, 0, 3, 3, 2015);
                $end = mktime(23, 59, 59, 7, 6, 2015);
                if (($currentTime < $end) && ($currentTime > $start))
                {?>
                    <li>
                        <a><b>Pendaftaran Umum</b></a>
                        <ul style="list-style-type: none;">
                            <a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=umum&jenjang=smp');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-list-alt"></span></td><td>Pendaftaran SMP</td></tr></table></li></a>
                            <a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=umum&jenjang=sma');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-list-alt"></span></td><td>Pendaftaran SMA</td></tr></table></li></a>
                            <a href="<?php echo site_url('pendaftaran/pilih_kk?jalur=umum&jenjang=smk');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-list-alt"></span></td><td>Pendaftaran SMK</td></tr></table></li></a>
                            <a href="<?php echo site_url('rekap/beranda');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-list-alt"></span></td><td>Rekap Pendaftaran</td></tr></table></li></a>
                        </ul>
                    </li>
            <?php } else if($currentTime > $end){ ?>
                    <li>
                        <a><b>Pendaftaran Umum</b></a>
                        <ul style="list-style-type: none;">
                            <a href="<?php echo site_url('rekap/beranda');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-list-alt"></span></td><td>Rekap Pendaftaran</td></tr></table></li></a>
                        </ul>
                    </li>
            <?php } ?>

             <li>
                <a><b>Panduan</b></a>
                <ul style="list-style-type: none;">
                    <a href="<?php echo site_url('umum/ketentuan');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-book"></span></td><td>Ketentuan</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/prosedur');?>"><li class="sidebar-list green-tosca"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-question-circle"></span></td><td>Prosedur Pendaftaran</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/subrayon');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-th"></span></td><td>Sub Rayon</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/pagu');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-th"></span></td><td>Pagu</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/inklusif');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-align-justify"></span></td><td>Sekolah Jalur Inklusif</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/jadwal');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-calendar"></span></td><td>Jadwal</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/faq');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-question-circle"></span></td><td>Informasi Penting</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/tpa');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-question-circle"></span></td><td>Informasi TPA</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/video');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-film"></span></td><td>Keterangan Jalur PPDB</td></tr></table></li></a>
                </ul>
            </li>
            <li>
                <a><b>Statistik</b></a>
                <ul style="list-style-type: none;">
                    <a href="<?php echo site_url('umum/statistik2011');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-bar-chart"></span></td><td>Statistik 2011</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/statistik2012');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-bar-chart"></span></td><td>Statistik 2012</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/statistik2013');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-bar-chart"></span></td><td>Statistik 2013</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/statistik2014');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-bar-chart"></span></td><td>Statistik 2014</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/un2012');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-th-large"></span></td><td>Sebaran NUN 2012</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/un2013');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-th-large"></span></td><td>Sebaran NUN 2013</td></tr></table></li></a>
                    <a href="<?php echo site_url('umum/un2014');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-th-large"></span></td><td>Sebaran NUN 2014</td></tr></table></li></a>
                </ul>
            </li>
            <li>
                <a><b>Lain-lain</b></a>
                <ul style="list-style-type: none;">
                    <a href="<?php echo site_url('umum/istilah');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-font"></span></td><td>Daftar Istilah</td></tr></table></li></a>
                    <a href="http://forum.ppdbsurabaya.net/" target="_blank"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-question-circle"></span></td><td>Forum Tanya Jawab</td></tr></table></li></a>
                </ul>
            </li>
            <li>
                <a><b>Tautan Luar</b></a>
                <ul style="list-style-type: none;">
                    <a href="<?php echo site_url('umum/data_sekolah/sd');?>"><li class="sidebar-list blue-light"><table><tr><td valign="top"><span style="margin-right:10px;" class="fa fa-home"></span></td><td>Data Sekolah</td></tr></table></li></a>
                </ul>
            </li>
        </ul>
    </div>
</div>
