<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/PendaftaranState/PendaftaranState.php';

/**
 * Description of PilihSekolahState
 *
 * @author m.rap
 */
class PilihSekolahState extends PendaftaranState {
    private $siswa;
    public $mainFields = array(
        'nama',
        'tmpt_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'sekolah_asal',
        'tamatan',
        'no_kk',
        'kk',
        'nama_ortu',
        'alamat',
        'telepon',
        'nuBi',
        'nuMat',
        'nuIpa',
        'nuTot',
    );

    public function view() {
        if (!$this->siswa)
            $this->setSiswa();

        parent::view();

        $jenjangState =& $this->stateManager->getJenjangState();
        $this->viewData['jenisSiswaState'] =& $this->stateManager->getJenisSiswaState();
        $this->viewData['jenjangState']    =& $jenjangState;
        $this->viewData['siswa']           = $this->siswa;
        $jsCodes = array('input-control', 'MyNativePopup', 'MyModal', 'popup', "pendaftaran_umum/PilihSekolah_main", "pendaftaran_umum/PilihSekolah_".$jenjangState->subView());
        $this->viewData['jsCodes'] = array_merge($this->viewData['jsCodes'], $jsCodes);

        //$this->ci->load->view('daftar/pilih_sekolah_main', $this->viewData);
        $this->ci->template->display_daftar('daftar/pilih_sekolah_main', $this->viewData);
    }

    public function submit() {
        $event = $this->ci->input->post('event');
        if (is_callable(array($this, $event))) {
            if (!$this->siswa)
                $this->setSiswa();
            $this->$event();
        }
        parent::submit();
    }

    public function setSiswa() {
        $this->siswa = $this->ci->session->userdata('siswa');

        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        $jenisSiswaState->setSiswa($this->siswa);

        $jenjangState =& $this->stateManager->getJenjangState();
        $jenjangState->setSiswa($this->siswa);
    }

    public function validate() {
        $this->ci->load->library('form_validation');
        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        $jenjangState =& $this->stateManager->getJenjangState();
        if ($jenisSiswaState->belumDiketahui) {
            $this->ci->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
            $this->ci->form_validation->set_rules('nuBi', 'Nilai Bahasa Indonesia', 'trim|required|decimal|callback_less_than_equal_to[100.0]|callback_more_than_equal_to[0.0]');
            $this->ci->form_validation->set_rules('nuMat', 'Nilai Matematika', 'trim|required|decima|callback_less_than_equal_to[100.0]|callback_more_than_equal_to[0.0]');
            $this->ci->form_validation->set_rules('nuIpa', 'Nilai IPA', 'trim|required|decimal|callback_less_than_equal_to[100.0]|callback_more_than_equal_to[0.0]');
            if ($jenjangState->getPrevName() == 'smp') {
                $this->ci->form_validation->set_rules('nuBig', 'Nilai Bahasa Inggris', 'trim|required|decimal|callback_less_than_equal_to[100.0]|callback_more_than_equal_to[0.0]');
            }
            $this->ci->form_validation->set_rules('tamatan', 'Tamatan', 'required');
            $this->ci->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->ci->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'trim|required');
            $this->ci->form_validation->set_rules('nama_ortu', 'Nama Orang Tua', 'trim|required');
            $this->ci->form_validation->set_rules('sekolah_asal', 'Sekolah Asal', 'trim|required');
            $this->ci->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        }
        $this->ci->form_validation->set_rules('no_kk', 'Nomor KK', 'trim|required');
        $this->ci->form_validation->set_rules('kk', 'Jenis KK', 'required');
        $this->ci->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
        $this->ci->form_validation->set_rules('pilihan', 'Pilihan', 'required');
        return parent::validate();
    }

    public function onSubmit() {
        if (!$this->validate()) {
            return;
        }

        $this->siswa = $this->ci->session->userdata('siswa');

        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        $jenisSiswaState->onSubmit($this->siswa);

        $jenjangState =& $this->stateManager->getJenjangState();
        if (!$jenjangState->onSubmit($this->siswa, $this->errors)) {
            return;
        }

        $this->ci->session->set_userdata('siswa', $this->siswa);
        $this->stateManager->setCurrentState('KonfirmasiPilihSekolahState');
        $this->stateManager->getCurrentState()->setCount(0);
    }

    public function onTamatanChange() {
        $this->siswa['tamatan'] = set_value('tamatan');
    }

    public function onKkChange() {
        $this->siswa['kk'] = set_value('kk');
    }

    public function onKecamatanChange() {
        $this->siswa['kecamatan'] = set_value('kecamatan');
        $jalurState =& $this->stateManager->getJalurState();
        $jenjangState =& $this->stateManager->getJenjangState();
        $wilayah =& $jenjangState->getWilayahByKecamatan($this->siswa['kecamatan']);
        if ($wilayah != array()) {
            foreach ($wilayah as $key => $value) {
                $this->siswa['wilayah'] = $key;
            }
        } else {
            $this->siswa['wilayah'] = 0;
        }
        $this->siswa['subRayon'] = 0;
        $this->siswa['pilihan'] = null;
    }

    public function onWilayahChange() {
        if (isset($this->siswa['kecamatan'])) {
            $this->siswa['kecamatan'] = set_value('kecamatan');
        }
        $this->siswa['wilayah'] = set_value('wilayah');
        $jalurState =& $this->stateManager->getJalurState();
        if ($jalurState->getName() == 'kawasan' && $this->siswa['wilayah'] != '0') {
            $jenjangState =& $this->stateManager->getJenjangState();
            $subRayon =& $jenjangState->getSubRayon($this->siswa['wilayah']);
            $subRayonKeys = array_keys($subRayon);
            $this->siswa['subRayon'] = $subRayonKeys[0];
        } else {
            $this->siswa['subRayon'] = 0;
        }
        $this->siswa['pilihan'] = null;
    }

    public function onSubRayonChange() {
        if (isset($this->siswa['kecamatan'])) {
            $this->siswa['kecamatan'] = set_value('kecamatan');
        }
        $this->siswa['wilayah'] = set_value('wilayah');
        $this->siswa['subRayon'] = set_value('subRayon');
        $this->siswa['pilihan'] = null;
    }

    public function onSekolahChange() {
        $jenjangState =& $this->stateManager->getJenjangState();
        $jenjangState->onSekolahChange($this->siswa);
    }

    public function onJurusanChange() {
        $jenjangState =& $this->stateManager->getJenjangState();
        $jenjangState->onJurusanChange($this->siswa);
    }
}

?>
