<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Statistik 2015</h1>
    </div>
</div>

<div class="row">
        <div class="page-control col-sm-12" data-role="page-control">
            <span class="menu-pull"></span>
            <div class="menu-pull-bar">Statistik SMP Jalur Umum</div>

             <ul class="nav nav-tabs">
                <li class="active nav-list green-light"><a href="#smp">Statistik SMP Jalur Umum</a></li>
                <li class="nav-list green-light"><a href="#sma">Statistik SMA Jalur Umum</a></li>
                <li class="nav-list green-light"><a href="#smk">Statistik SMK Jalur Umum</a></li>
            </ul>

            <div class="frames tab-content">
                <div class="frame tab-pane active" id="smp">
                    <h2>Statistik PPDB SMP Jalur Umum 2015</h2><hr>
                    <table class="table table-striped table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Sekolah</th>
                                <th>Pagu Akhir</th>
                                <th>Pilihan 1</th>
                                <th>Pilihan 2</th>
                                <th>Nilai Min</th>
                                <th>Nilai Max</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php foreach($umumsmp as $kp){ ?>
                            <tr>
                                <td><?php echo $kp['nama_sekolah']?></td>
                                <td><?php echo $kp['pagu_umum']; ?></td>
                                <td><?php echo $kp['pilihan1']?></td>
                                <td><?php echo $kp['pilihan2']?></td>
                                <td><?php echo $kp['nilai_minimum']?></td>
                                <td><?php echo $kp['nilai_maksimum']?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
               <div class="frame tab-pane" id="sma">
                    <h2>Statistik PPDB SMA Jalur Umum 2015</h2><hr>
                    <table class="table table-striped table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Sekolah</th>
                                <th>Pagu Akhir</th>
                                <th>Pilihan 1</th>
                                <th>Pilihan 2</th>
                                <th>Nilai Min</th>
                                <th>Nilai Max</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($umumsma as $kp){ ?>
                            <tr>
                                <td><?php echo $kp['nama_sekolah']?></td>
                                <td><?php echo $kp['pagu_umum']; ?></td>
                                <td><?php echo $kp['pilihan1']?></td>
                                <td><?php echo $kp['pilihan2']?></td>
                                <td><?php echo $kp['nilai_minimum']?></td>
                                <td><?php echo $kp['nilai_maksimum']?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <div class="frame tab-pane" class="frame tab-pane" id="smk">
                    <h2>Statistik PPDB SMK Jalur Umum 2015</h2><hr>
                    <table class="table table-striped table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Sekolah</th>
                                <th>Nama Jurusan</th>
                                <th>Pagu Akhir</th>
                                <th>Pilihan 1</th>
                                <th>Pilihan 2</th>
                                <th>Nilai Min</th>
                                <th>Nilai Max</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($umumsmk as $kp){ ?>
                            <tr>
                                <?php if ($kp['no'] == 1) { ?><td rowspan="<?php echo $countsmk[$kp['subrayon']]; ?>"><?php echo $kp['nama_sekolah']?></td><?php } ?>
                                <td><?php echo $kp['nama_jurusan']?></td>
                                <td><?php echo $kp['pagu_umum']; ?></td>
                                <td><?php echo $kp['pilihan1']?></td>
                                <td><?php echo $kp['pilihan2']?></td>
                                <td><?php echo $kp['nilai_minimum']?></td>
                                <td><?php echo $kp['nilai_maksimum']?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>                        
            </div>
        </div>
</div>


                    