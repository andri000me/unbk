<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/StateManager.php';

class Pendaftaran extends CI_Controller {
    private $stateManager;
    private $state;

    public function __construct() {
        parent::__construct();
        $this->stateManager = new StateManager($this);
        $this->state =& $this->stateManager->getCurrentState();
        $this->load->library('template/template');
    }

    //public function validateTanggalDaftar() {
    //    return true;
    //}

    public function index() {
        $jalur = $this->input->get('jalur');
        $validJalur = array('umum', 'kawasan');
        $jenjang = $this->input->get('jenjang');
        $validJenjang = array('smp', 'sma', 'smk');
        $validKK = array('1', '2');
        $validSekolah = array('1', '2', '3');
        $kk = $this->input->get('kk');
        $sekolah = $this->input->get('sekolah');
        if (!$jalur ||
            !$jenjang ||
            !in_array($jalur, $validJalur) ||
            !in_array($jenjang, $validJenjang) ||
            ($jenjang == 'smk' && $jalur == 'kawasan') ||
            !in_array($kk, $validKK) ||
            !in_array($sekolah, $validSekolah)) {
            show_404();
            return;
        }

        if (!$this->validateTanggalDaftar($jalur) || !$this->validateTanggalTutup($jalur, $sekolah)) {
            $data['header'] = 'Saat Ini Bukan Waktu Pendaftaran Jalur '.ucfirst($jalur);
            $data['message'] = 'Saat Ini Bukan Waktu Pendaftaran Jalur '.ucfirst($jalur);
            //$this->load->vars($data);
            //$this->load->view('umum/noaccess');
            $this->template->display_error('umum/noaccess', $data);
            return;
        }

        $this->session->unset_userdata('siswa');
        $this->session->set_userdata('kk', $kk);
        $this->session->set_userdata('sekolah', $sekolah);
        $this->stateManager->resetAllState();
        $this->stateManager->setJalurState(ucwords($jalur).'State');
        $this->stateManager->setJenjangState(ucwords($jenjang).'State');
        redirect('pendaftaran/view');
    }

    public function pilih_kk() {
        $jsCodes = array("MyModal", "popup", "MyNativePopup", "bootbox");
        $data["jsCodes"] = $jsCodes;

        $jalur = $this->input->get('jalur');
        $validJalur = array('umum', 'kawasan');
        $jenjang = $this->input->get('jenjang');
        $validJenjang = array('smp', 'sma', 'smk');
        if (!$jalur ||
            !$jenjang ||
            !in_array($jalur, $validJalur) ||
            !in_array($jenjang, $validJenjang) ||
            ($jenjang == 'smk' && $jalur == 'kawasan')) {
            show_404();
            return;
        }

        if (!$this->validateTanggalDaftar($jalur)) {
            $data['header'] = 'Saat Ini Bukan Waktu Pendaftaran Jalur '.ucfirst($jalur);
            $data['message'] = 'Saat Ini Bukan Waktu Pendaftaran Jalur '.ucfirst($jalur);
            //$this->load->vars($data);
            //$this->load->view('umum/noaccess');
            $this->template->display_error('umum/noaccess', $data);
            return;
        }

        $data['jalur'] = $jalur;
        $data['jenjang'] = $jenjang;

        $this->template->display_daftar('daftar/input_domisili', $data);
    }

    public function view() {
        $jalur = $this->session->userdata('jalurState');
        $jenjang = $this->session->userdata('jenjangState');
        $kk = $this->session->userdata('kk');
        $sekolah = $this->session->userdata('sekolah');
        if (!$jalur || !$jenjang || !$kk || !$sekolah) {
            show_error('Sesi telah berakhir. Untuk melanjutkan pendaftaran silakan kembali ke '.  anchor('', 'beranda').'.');
            return;
        }

        $jalurName = strtolower(substr($jalur, 0, -5));

        if (!$this->validateTanggalDaftar($jalurName) || !$this->validateTanggalTutup($jalurName, $sekolah)) {
            $data['header'] = 'Saat Ini Bukan Waktu Pendaftaran Jalur '.ucfirst($jalurName);
            $data['message'] = 'Saat Ini Bukan Waktu Pendaftaran Jalur '.ucfirst($jalurName);
            //$this->load->vars($data);
            //$this->load->view('umum/noaccess');
            $this->template->display_error('umum/noaccess', $data);
            return;
        }

        $this->state->view();
    }

    public function submit() {
        $jalur = $this->session->userdata('jalurState');
        $jenjang = $this->session->userdata('jenjangState');
        $kk = $this->session->userdata('kk');
        $sekolah = $this->session->userdata('sekolah');
        if (!$jalur || !$jenjang || !$kk || !$sekolah) {
            show_error('Sesi telah berakhir. Untuk melanjutkan pendaftaran silakan kembali ke '.  anchor('', 'beranda').'.');
            return;
        }

        $jalurName = strtolower(substr($jalur, 0, -5));

        if (!$this->validateTanggalDaftar($jalurName) || !$this->validateTanggalTutup($jalurName, $sekolah)) {
            $data['header'] = 'Saat Ini Bukan Waktu Pendaftaran Jalur '.ucfirst($jalurName);
            $data['message'] = 'Saat Ini Bukan Waktu Pendaftaran Jalur '.ucfirst($jalurName);
            //$this->load->vars($data);
            //$this->load->view('umum/noaccess');
            $this->template->display_error('umum/noaccess', $data);
            return;
        }

        $this->state->submit();
    }

    public function batal() {
        $this->session->unset_userdata('siswa');
        $this->stateManager->resetAllState();
        redirect('');
    }

    public function selesai() {
        $this->session->unset_userdata('siswa');
        $this->stateManager->resetAllState();
        redirect('');
    }

    public function valid_date($str) {
        if (preg_match("/^([0-9]{2,4})-([0-1][0-9])-([0-3][0-9])(?:( [0-2][0-9]):([0-5][0-9]):([0-5][0-9]))?$/", $str))
            return true;
        return false;
    }

    public function less_than_equal_to($str, $param) {
        return floatval($str) <= floatval($param);
    }

    public function more_than_equal_to($str, $param) {
        return floatval($str) >= floatval($param);
    }

    public function bukti($jalur = '', $jenjang = '', $isDownload = '') {
        $siswa = $this->session->userdata('siswa');
        $validJalur = array('umum', 'kawasan');
        $validJenjang = array('smp', 'sma', 'smk');
        if (!$jalur ||
            !$jenjang ||
            !in_array($jalur, $validJalur) ||
            !in_array($jenjang, $validJenjang) ||
            ($jenjang == 'smk' && $jalur == 'kawasan') ||
            !$siswa) {
            show_404();
            return;
        }

        $filename = $siswa['no_un'].'.'.$jalur.'.lat4';
        foreach ($siswa['pilihan'] as $item) {
            if (is_array($item)) {
                $item = array_values ($item);
                $item = $item[0];
            }
            $filename .= ('.'.$item);
        }

        $downloadFilename = 'bukti_pendaftaran_'.$jenjang.'_'.$jalur.'_'.$siswa['no_un'];
        $statusValidasi = $siswa['statusValidasi'];
        if($statusValidasi!=false) $downloadFilename= $downloadFilename.'_ok';
        $filepath = './bukti/'.$filename.'.png';
//        if (file_exists($filepath)) {
//            header('Content-type: image/png');
//            if ($isDownload) header('Content-Disposition: attachment; filename="'.$downloadFilename.'.png"');
//            readfile($filepath);
//            return;
//        }

        $this->load->helper('textimage');

        /*editan najib : ngambil source image berdasarkan kategori*/
        $tamatan = $siswa['tamatan'];
        $kk = $siswa['kk'];
        $kategori = '';
        if ($tamatan == '1' && $kk == '1') {
            $kategori = 'dk';
            $tahun = substr($siswa['no_un'], 1, 2);
            if($tahun!='15') $kategori=$kategori.'tl';
        } else if ($tamatan == '2' && $kk == '1') {
            $kategori = 'mt';
        } else if ($tamatan == '1' && $kk == '2') {
            $kategori = 'rd';
        } else if ($tamatan == '2' && $kk == '2') {
            $kategori = 'rl';
        }

        $img = imagecreatefromjpeg('./des/bukti_'.$jalur.'_'.$kategori.'.jpg');
        $textcolor = imagecolorallocate($img, 0, 0, 0);
        $font = './captchafont/times.ttf';
        $width = 900;
        $height = 1200;

        $judul = 'BUKTI PENDAFTARAN '.  strtoupper($jenjang).' JALUR '.strtoupper($jalur);
        $bbox = imagettfbbox(20, 0, $font, $judul);
        $textWidth = $bbox[2] - $bbox[0];
        $x = ($width - $textWidth) / 2;
        drawboldtext($img, 20, 0, $x, 220, $textcolor, $font, $judul);

        if ($jenjang != 'smp') {
            $data = array(
                'No. UN' => $siswa['no_un'],
                'Nama Siswa' => $siswa['nama'],
                'Sekolah Asal' => $siswa['sekolah_asal'],
                'Telepon' => $siswa['telepon'],
                'Nilai UN Bahasa Indonesia' => $siswa['nuBi'],
                'Nilai UN Matematika' => $siswa['nuMat'],
                'Nilai UN IPA' => $siswa['nuIpa'],
                'Nilai UN Bahasa Inggris' => $siswa['nuBig']
            );
        } else {
            $data = array(
                'No. UN' => $siswa['no_un'],
                'Nama Siswa' => $siswa['nama'],
                'Sekolah Asal' => $siswa['sekolah_asal'],
                'Telepon' => $siswa['telepon'],
                'Nilai US Bahasa Indonesia' => $siswa['nuBi'],
                'Nilai US Matematika' => $siswa['nuMat'],
                'Nilai US IPA' => $siswa['nuIpa']
            );
        }

        $ip = $siswa['ip'];
        $ips = explode(", ", $ip);
        $data = array_merge($data, array(
            'Nilai Total' => $siswa['nuTot'],
            'Alamat IP' => (isset($ips[count($ips)-2])?$ips[count($ips)-2]:$ip),
            'Waktu Daftar' => $siswa['timestamp']
        ));

        //ngambil nama-nama pilihan
        $this->load->model('sekolahModel');
        $pilihanId = $siswa['pilihan'];
        foreach ($pilihanId as $key => $value) {
            if (!is_array($value))
                continue;
            $pilihanId[$key] = $value['99'];
        }
        $pilihan = $this->sekolahModel->getNamaPilihan($jenjang, $pilihanId);
        foreach ($pilihanId as $key => $value) {
            if ($jenjang != 'smk') {
                $subrayon_sekolah = $this->sekolahModel->getSubRayonSekolah($value);
                if ($siswa['subRayon'] == $subrayon_sekolah) {
                    $siswa['pilihan'][$key] = $pilihan[$value] . ' (Dalam Sub Rayon)';
                } else {
                    $siswa['pilihan'][$key] = $pilihan[$value] . ' (Luar Sub Rayon) - Sub Rayon ' . $subrayon_sekolah;
                }
            } else {
                $siswa['pilihan'][$key] = $pilihan[$value];
            }
        }
        if ($jenjang == 'smk') {
            $siswa['smk'] = $pilihan['smk'];
        }

        // kalo bukan smk keluarin wilayah sama subrayon, tapi kalo smk keluarin nama smk nya
        if ($jenjang != 'smk') {
            $siswa['wilayah'] = $this->sekolahModel->wilayah[$siswa['wilayah']];
            $data['Wilayah'] = $siswa['wilayah'];
            $data['Sub Rayon'] = 'Sub Rayon '.$siswa['subRayon'];
        } else {
            $data['SMK'] = $siswa['smk'];
        }

        // generate pilihan2nya
        $i = 1;
        foreach ($siswa['pilihan'] as $item) {
            if (is_array($item)) {
                $pilihanLuar = array_values($item);
                $item = $pilihanLuar[0];
            }
            $data['Pilihan '.$i] = $item;
            $i++;
        }
        // jika pilihan cuman 1 tulis pilihan 2: tidak memilih
        if ($i == 2) {
            $data['Pilihan '.$i] = 'Tidak Memilih';
        }
        $validator = (isset($siswa['validator'])?$siswa['validator']:'');
        if($statusValidasi=='1' && $jalur=='kawasan'){
            if (!isset($siswa['nomorTes'])) {
                $noUn = $siswa['no_un'];
                $siswa = array();
                $prevJenjang =& $this->stateManager->getJenjangState()->getPrevName();
                $this->load->model('siswaModel');
                $this->siswaModel->getSiswa($siswa, $prevJenjang, $noUn, 'kawasan');
            }
            $nomorTes = (isset($siswa['nomorTes'])? $siswa['nomorTes']:'000000');
            $lokasi = (isset($siswa['lokasiTes'])? $siswa['lokasiTes']:'-');
            $ruang = (isset($siswa['ruangTes'])? $siswa['ruangTes']:'00');
            $noBangku = (isset($siswa['bangkuTes'])? $siswa['bangkuTes']:'00');
            $alamatTes = (isset($siswa['alamatTes'])? $siswa['alamatTes']:'00');

            imagettftext($img, 18, 0, 580, 360, $textcolor, $font, 'NOMOR TES : '.$nomorTes);
            imagettftext($img, 18, 0, 620, 403, $textcolor, $font, 'LOKASI TES');
            drawboldtext($img, 20, 0, 504, 467, $textcolor, $font, '__________________________');

            imagettftext($img, 13, 0, 510, 420, $textcolor, $font, $lokasi);
            $line = 440;
            $spacing = 15;
            $tab1 = 510;
            $tab2 = 250;
            $tab3 = 260;
            imageTextWrapped($img, 14, $tab1, $line, $width - $tab1 - 20, $textcolor, $font, $alamatTes);

            imagettftext($img, 18, 0, 510, 503, $textcolor, $font, 'Ruang : '.$ruang. '       Nomor Bangku : '. $noBangku);
            drawboldtext($img, 30, 0, 630, 503, $textcolor, $font, '|');

            drawboldtext($img, 20, 0, 504, 322, $textcolor, $font, '__________________________');
            drawboldtext($img, 20, 0, 504, 327, $textcolor, $font, '__________________________');
            drawboldtext($img, 20, 0, 504, 367, $textcolor, $font, '__________________________');
            drawboldtext($img, 20, 0, 504, 373, $textcolor, $font, '__________________________');
            drawboldtext($img, 30, 0, 498, 355, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 868, 355, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 498, 370, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 868, 370, $textcolor, $font, '|');

            drawboldtext($img, 20, 0, 504, 510, $textcolor, $font, '__________________________');
            drawboldtext($img, 30, 0, 498, 400, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 868, 400, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 498, 470, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 868, 470, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 498, 435, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 868, 435, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 498, 508, $textcolor, $font, '|');
            drawboldtext($img, 30, 0, 868, 508, $textcolor, $font, '|');
        }

        $line = 280;
        $spacing = 20;
        $tab1 = 20;
        $tab2 = 250;
        $tab3 = 260;
        foreach ($data as $key => $value) {
            imagettftext($img, 16, 0, $tab1, $line, $textcolor, $font, $key);
            imagettftext($img, 16, 0, $tab2, $line, $textcolor, $font, ':');
            imagettftext($img, 16, 0, $tab3, $line, $textcolor, $font, $value);
            $line += $spacing;
        }
        if ($statusValidasi!=='1') {
            $tglVerifikasi = array('kawasan' => '1 s.d. 3 Juli 2015', 'umum' => '6 s.d. 9 Juli 2015');
            imageTextWrapped($img, 14, $tab1, $line, $width - $tab1, $textcolor, $font, '(Data ini belum terverifikasi. Data WAJIB diverifikasi, verifikasi dapat dilakukan di SMPN/SMAN/SMKN terdekat pada tanggal '.$tglVerifikasi[$jalur].' pk. 08.00 s.d 16.00 WIB dengan membawa SKHUN dan Kartu Keluarga/KK Asli dan Fotokopi terlegalisir.)');
            $line += $spacing;

            /* Tanda Tangan */
            imagettftext($img, 13, 0, 315, 667, $textcolor, $font, 'Mengesahkan, ');
            imagettftext($img, 13, 0, 280, 685, $textcolor, $font, 'Surabaya,                  ');

            imagettftext($img, 13, 0, 100, 712, $textcolor, $font, 'Petugas Verifikasi');
            imagettftext($img, 13, 0, 50, 780, $textcolor, $font, '(. . . . . . . . . . . . . . . . . . . . . . . . . . .)');

            imagettftext($img, 13, 0, 500, 712, $textcolor, $font, 'Orang Tua / Wali');
            imagettftext($img, 13, 0, 450, 780, $textcolor, $font, '(. . . . . . . . . . . . . . . . . . . . . . . . . . .)');
            /* End Of tanda Tangan */

        }
        else if(!empty($validator)){
            imageTextWrapped($img, 15, $tab1, $line, $width - $tab1, $textcolor, $font, '(Data ini sudah terverifikasi.'.(($kk == '1') ? ' Apabila berkas tidak sesuai dengan data di atas, maka calon siswa dinyatakan gugur.' : '').')');
            $line += $spacing;
        }
        if($kategori=='rd'){
            imageTextWrapped($img, 14, $tab1, $line, $width - $tab1, $textcolor, $font, '(Calon Peserta Didik Kategori Rekomendasi Dalam Kota merupakan calon peserta didik yang berasal dari sekolah di Wilayah Kota Surabaya tetapi bukan warga Surabaya. Pagu yang tersedia adalah 1% baik dari pagu kota maupun pagu sekolah.)');
            $line += $spacing;
        }

        if($jalur=='kawasan'){
            $tglTest = array('smp' => '5 Juli', 'sma' => '6 Juli');
            imagettftext($img, 13, 0, 410, 887, $textcolor, $font, $tglTest[$jenjang]);
        }

        //datastamp
        require_once APPPATH.'libraries/Encryption.php';
        $encryption = new Encryption();
        $datastamp = $encryption->encode($siswa['datastamp']);
        imagettftext($img, 10, 0, 50, 830, $textcolor, $font, $datastamp);

        //qrcode
        require_once APPPATH.'libraries/phpqrcode/qrlib.php';
        $qrFile = './bukti/qr/qr.'.$filename.'.png';
        QRcode::png($datastamp, $qrFile);
        $qrImage = imagecreatefrompng($qrFile);
        list($qrw, $qrh) = getimagesize($qrFile);
        imagecopymerge($img, $qrImage, 705, 715, 0, 0, $qrw, $qrh, 100);

        header('Content-type: image/png');
        if ($isDownload) header('Content-Disposition: attachment; filename="'.$downloadFilename.'.png"');
        imagepng($img);
        imagepng($img, $filepath);
        imagedestroy($img);
    }
}