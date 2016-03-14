<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/PendaftaranState/PendaftaranState.php';

/**
 * Description of InputNoUnState
 *
 * @author m.rap
 */
class InputNoUnState extends PendaftaranState {
    private $recaptcha = true;
    private $captchaFile = array(
        '6a50cf6b',
        'bc6cf163',
        'ca251f79',
        'c1ca8c45',
        'd3368f25',
        '61af4f32',
        '5701c127',
        '6f9723c8',
        '493b645b',
        '8c4a68a1',
        '4d0be645',
        '1968e15e',
        'e2b7fecc',
        'e6c6593e',
        '992efbda',
        'ac02d750',
        '281601e6',
        'c052cb56',
        'b67881b0',
        'b2f4db5d',
        'b78ad7c0',
        'd94368f6',
        'f713acb9',
        '1767965d',
        '3676f10a'
    );

    private $captchaString = array(
        'esdffh',
        'wyshuu',
        'tecjdt',
        'uszzhr',
        'rtgzds',
        'qdayjz',
        'xuaxfx',
        'yvpded',
        'xkjjha',
        'sufmuc',
        'hksuxn',
        'tjerdn',
        'jxfxzu',
        'atjuwk',
        'dehyuj',
        'lcdtgj',
        'zncshh',
        'mnqurv',
        'hjqtwj',
        'tjeglt',
        'pnkfrh',
        'hvnmum',
        'nvexan',
        'gmhvnq',
        'gjhfvw'
    );

    public function __construct(&$ci, &$stateManager) {
        parent::__construct($ci, $stateManager);
        $this->ci->load->helper('captcha');
    }

    public function generateCaptchaString() {
        //$originalString = range('A', 'Z');
        //$originalString = implode("", $originalString);
        //return substr(str_shuffle($originalString), 0, 6);
        $i = rand(0, 24);
        $captcha = $this->ci->session->userdata('captcha');
        if ($captcha) {
            while ($captcha['image'] == $this->captchaFile[$i]) {
                $i = rand(0, 24);
            }
        }
        return $i;
    }

    public function view() {
        parent::view();

        $captcha = $this->ci->session->userdata('captcha');
        if (!$captcha || $this->recaptcha) {
            $iCaptcha = $this->generateCaptchaString();
            $captchaString = $this->captchaString[$iCaptcha];

            $data = array(
                'word' => $captchaString,
                'img_path' => './captcha/',
                'img_url' => base_url().'captcha/',
                'font_path' => './captchafont/timesi.ttf',
                'img_width' => 200,
                'img_height' => 60,
                'expiration' => 7200
            );

            //$captcha = create_captcha($data);
            $captcha = array(
                'image' => $this->captchaFile[$iCaptcha],
                'word' => $this->captchaString[$iCaptcha]
            );
            $this->ci->session->set_userdata('captcha', $captcha);
        }

        //$this->viewData['captchaImage'] = '<img src="http://static1.ppdbsurabaya.net/captcha/'.$captcha['image'].'.jpg" width="200" height="60" style="border:0;" alt=" " /> ';
        $this->viewData['captchaImage'] = '<img src="'.URL_STATIC.'/captcha/'.$captcha['image'].'.jpg"'.' width="200" height="60" style="border:0;" alt=" " /> ';
        $jsCodes = array('pendaftaran_umum/InputNoUn');
        $this->viewData['jsCodes'] = array_merge($this->viewData['jsCodes'], $jsCodes);
        $this->ci->template->display_daftar('daftar/input_no_un', $this->viewData);
    }

    public function validate() {
        $this->ci->load->library('form_validation');
        $this->ci->form_validation->set_rules('no_un', 'Nomor UN/US', 'trim|required|exact_length[14]');
        $this->ci->form_validation->set_rules('captcha', 'Kode CAPTCHA', 'trim|required');
        return parent::validate();
    }

    public function submit() {
        $event = $this->ci->input->post('event');
        if (is_callable(array($this, $event))) {
            $this->$event();
        }
        parent::submit();
    }

    public function onSubmit() {
        if (!$this->validate()) {
            return;
        }

        $captcha = $this->ci->session->userdata('captcha');

        $expiration = time()-7200;
        //if (floatval($captcha['time']) < floatval($expiration)) {
            //$this->ci->session->unset_userdata(array('captcha' => ''));
            //$captcha = false;
        //}
        if (!$captcha) {
            $this->errors .= '<div class="notice-text">Masa berlaku kode CAPTCHA telah habis. Silakan melakukan Kode Ulang CAPTCHA.</div>';
            return;
        } else {
            $captchaInput = $this->ci->input->post('captcha');
            if (strtolower($captcha['word']) != strtolower($captchaInput)) {
                $this->errors .= '<div class="notice-text">Kode CAPTCHA yang Anda masukkan tidak sesuai dengan gambar.</div>';
                return;
            }
        }

        $this->ci->session->unset_userdata(array('captcha' => ''));

        $noUn = $this->ci->input->post('no_un');
        $this->ci->load->model('siswaModel');
        $prevJenjang =& $this->stateManager->getJenjangState()->getPrevName();
        $jalur =& $this->stateManager->getJalurState()->getName();
        $kk = $this->ci->session->userdata('kk');
        $sekolah = $this->ci->session->userdata('sekolah');

        if (!$kk) {
            $this->errors .= '<div class="notice-text">KK Anda Tidak Valid.</div>';
            return;
        }

        if (!$sekolah) {
            $this->errors .= '<div class="notice-text">Tamatan Sekolah Anda Tidak Valid.</div>';
            return;
        }

        $kodeJenjangUn = substr($noUn, 0, 1);
        if ($prevJenjang == 'sd') {
            if ($kodeJenjangUn != '1' && $kodeJenjangUn != 'A') {
                $this->errors .= '<div class="notice-text">Format nomor ujian yang Anda masukkan salah. Karakter pertama nomor ujian untuk lulusan SD adalah 1 atau A untuk peserta kejar paket A.</div>';
                return;
            }
        } else {
            if ($kodeJenjangUn != '2' && $kodeJenjangUn != 'B') {
                $this->errors .= '<div class="notice-text">Format nomor ujian yang Anda masukkan salah. Karakter pertama nomor ujian untuk lulusan SMP adalah 2 atau B untuk peserta kejar paket B.</div>';
                return;
            }
        }

        $siswa = array();
        $this->ci->siswaModel->getSiswa($siswa, $prevJenjang, $noUn, $jalur);
        $tahun = substr($noUn, 1, 2);
        $wilayah = substr($noUn, 3, 4);
        if ($siswa == null) {
            if ($tahun == '15' && ($wilayah == '0501' || $wilayah == '0551') && $kodeJenjangUn != 'A' && $kodeJenjangUn != 'B') {
                $this->errors .= '<div class="notice-text">Format nomor ujian yang Anda masukkan salah.</div>';
                return;
            }
            $siswa['insertMaster'] = '1';
            $siswa['statusValidasi'] = '0';
            $this->stateManager->setJenisSiswaState('TamatanBelumDiketahuiState');
        } else {
            if ($siswa['statusJapres'] == '1') {
                $this->errors .= '<div class="notice-text">Siswa dengan Nomor Ujian '.$noUn.' sudah diterima melalui jalur prestasi.</div>';
                return;
            }
            if ($siswa['statusDiterima'] == '1') {
                $this->errors .= '<div class="notice-text">Siswa dengan Nomor Ujian '.$noUn.' sudah diterima di seleksi jalur pendaftaran sebelumnya.</div>';
                return;
            }
            if ($jalur == 'kawasan' && $siswa['nuBi'] != null && $siswa['nuMat'] != null && $siswa['nuIpa'] != null) {
                if ($prevJenjang == 'smp') {
                    $nuBi  = floatval($siswa['nuBi']);
                    $nuMat = floatval($siswa['nuMat']);
                    $nuIpa = floatval($siswa['nuIpa']);
                    $nuBig = floatval($siswa['nuBig']);
                    if (
                            // $nuBi  < 70.0 ||
                            // $nuMat < 70.0 ||
                            // $nuIpa < 70.0 ||
                            // $nuBig < 70.0 ||
                            $nuBi + $nuMat + $nuIpa + $nuBig < 320.0
                    ) {
                        $this->errors .= '<div class="notice-text">Maaf, batas minimal total UN 320,00 untuk PPDB Jalur Sekolah Kawasan tingkat SMA.</div>';
                        return;
                    }
                } else if ($prevJenjang == 'sd') {
                    $nuBi  = floatval($siswa['nuBi']);
                    $nuMat = floatval($siswa['nuMat']);
                    $nuIpa = floatval($siswa['nuIpa']);
                    if (
                            // $nuBi  < 75.0 ||
                            // $nuMat < 75.0 ||
                            // $nuIpa < 75.0 ||
                            $nuBi + $nuMat + $nuIpa < 255.0
                    ) {
                        $this->errors .= '<div class="notice-text">Maaf, batas minimal total UN 255,00 untuk PPDB Jalur Sekolah Kawasan tingkat SMP.</div>';
                        return;
                    }
                }
            }
            $siswa['insertMaster'] = '0';
            if ($tahun != '15' || !($wilayah == '0501' || $wilayah == '0551') || $kodeJenjangUn == 'A' || $kodeJenjangUn == 'B') {
                if(!isset($siswa['statusValidasi']))
                    $siswa['statusValidasi'] = '0';
                $this->stateManager->setJenisSiswaState('TamatanBelumDiketahuiState');
            } else {
                $siswa['tamatan'] = '1';
                if(!isset($siswa['statusValidasi']))
                    $siswa['statusValidasi'] = '1';
                $this->stateManager->setJenisSiswaState('TamatanDalamKotaState');
            }
        }
        $tamatanDB = '';
        $kkDB = '';
        $kategoriDB = '';
        if (isset($siswa['tamatan'])) {
            $tamatanDB = $siswa['tamatan'];
        }
        if (isset($siswa['kk'])) {
            $kkDB = $siswa['kk'];
        }
        if ($tamatanDB == '1' && $kkDB == '1') {
            $kategoriDB = 'Dalam Kota';
            if ($tahun != '15') $kategoriDB = 'Dalam Kota Tahun Lalu';
        } else if ($tamatanDB == '2' && $kkDB == '1') {
            $kategoriDB = 'Mutasi';
        } else if ($tamatanDB == '1' && $kkDB == '2') {
            $kategoriDB = 'Rekomendasi Dalam Kota';
        } else if ($tamatanDB == '2' && $kkDB == '2') {
            $kategoriDB = 'Luar Kota';
        }
        $kategori = $this->viewData['kategori'];
        $tamatanDalamKota = array("Dalam Kota", "Rekomendasi Dalam Kota");
        $tamatanBelumDiketahui = array("Mutasi", "Dalam Kota Tahun Lalu", "Luar Kota");
        if ((in_array($kategori, $tamatanDalamKota) && $this->stateManager->getJenisSiswaState()->belumDiketahui == true) || (in_array($kategori, $tamatanBelumDiketahui) && $this->stateManager->getJenisSiswaState()->belumDiketahui == false) || ($kategoriDB != '' && $kategoriDB != $kategori)) {
            $this->errors .= '<div class="notice-text">Maaf, anda tidak berhak mendaftar di jalur ini.</div>';
            return;
        }
        $siswa['no_un'] = $noUn;
        $siswa['kk'] = $kk;
        if (!isset($siswa['tamatan'])) {
            if ($sekolah == '3') $siswa['tamatan'] = '1';
            else $siswa['tamatan'] = $sekolah;
        }
        if (!isset($siswa['statusPendaftaran'])) {
            $siswa['statusPendaftaran'] = '0';
        }
        if (!isset($siswa['statusDiterima'])) {
            $siswa['statusDiterima'] = '0';
        }
        if (!$siswa['statusPendaftaran'] && !$siswa['statusDiterima']) {
            $siswa['ip'] = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
            $siswa['browser'] = $_SERVER['HTTP_USER_AGENT'];
        }
        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        if ($jenisSiswaState->isBelumDiketahui() && !$siswa['statusPendaftaran'] && !$siswa['statusDiterima'] && $this->isClosed($jalur)) {
            $this->errors .= '<div class="notice-text">Untuk Pendaftar Yang Membutuhkan Verifikasi, Pendaftaran Sudah Ditutup.</div>';
            return;
        }

        // komen bagian ini kalau kawasan udah pengumuman
        // if ($jalur == 'umum') {
        //     $siswaKawasan = array();
        //     $this->ci->siswaModel->getSiswa($siswaKawasan, $prevJenjang, $noUn, 'kawasan');
        //     if ($siswaKawasan && isset($siswaKawasan['statusPendaftaran']) && $siswaKawasan['statusPendaftaran'] == '1' && isset($siswaKawasan['statusValidasi']) && $siswaKawasan['statusValidasi'] == '1') {
        //         $this->errors .= '<div class="notice-text">Pendaftar yang sudah mendaftar di Jalur Kawasan tidak diperbolehkan mendaftar Jalur Umum sebelum pengumuman Jalur Kawasan.</div>';
        //         return;
        //     }
        // }
        // end komen bagian ini kalau kawasan udah pengumuman

        $this->ci->session->set_userdata('siswa', $siswa);

        $this->stateManager->setCurrentState('InputPinState');
    }

    public function isClosed($jalur) {
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
        $endTime = $currentTime;
        if ($jalur == 'kawasan') {
            $endTime = mktime(14, 0, 0, 7, 3, 2015);
        } else if ($jalur == 'umum') {
            $endTime = mktime(14, 0, 0, 7, 9, 2015);
        }
        if ($currentTime > $endTime) return true;
        return false;
    }

    public function onRecaptcha() {
        $this->recaptcha = true;
    }
}

?>
