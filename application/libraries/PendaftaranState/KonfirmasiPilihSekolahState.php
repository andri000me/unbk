<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/PendaftaranState/KonfirmasiState.php';

/**
 * Description of KonfirmasiPilihSekolahState
 *
 * @author m.rap
 */
class KonfirmasiPilihSekolahState extends KonfirmasiState {
    public function view() {
        parent::view();

        $siswa = $this->ci->session->userdata('siswa');
        $jenjangState =& $this->stateManager->getJenjangState();
        $this->ci->load->model('sekolahModel');
        $pilihanId = $siswa['pilihan'];
        foreach ($pilihanId as $key => $value) {
            if (!is_array($value))
                continue;
            $pilihanId[$key] = $value['99'];
        }
        $pilihan = $this->ci->sekolahModel->getNamaPilihan($jenjangState->getName(), $pilihanId);
        foreach ($pilihanId as $key => $value) {
            $siswa['pilihan'][$key] = $pilihan[$value];
        }
        if (count($pilihanId) == 1) {
            $siswa['pilihan'][1] = 'Tidak Memilih';
        }
        if ($jenjangState->getName() == 'smk')
            $siswa['smk'] = 'SMK NEGERI '.$siswa['smk'];

        if ($siswa['jenis_kelamin'] == 'L') {
            $siswa['jenis_kelamin'] = 'LAKI-LAKI';
        } else if ($siswa['jenis_kelamin'] == 'P') {
            $siswa['jenis_kelamin'] = 'PEREMPUAN';
        }

        $jenisValidasi = array(
            'DK' => 'DALAM KOTA',
            'MT' => 'MUTASI',
            'RD' => 'REKOMENDASI DALAM KOTA',
            'RL' => 'REKOMENDASI LUAR KOTA'
        );
        if (array_key_exists($siswa['jenisValidasi'], $jenisValidasi))
            $siswa['jenisValidasi'] = $jenisValidasi[$siswa['jenisValidasi']];

        $this->viewData['siswa']        = $siswa;
        $this->viewData['count']        = $this->getCount() + 1;
        $this->viewData['jenjangState'] = $jenjangState;
        $jsCodes = array('input-control', 'MyNativePopup', 'MyModal', 'popup', 'pendaftaran_umum/KonfirmasiPilihSekolah_main');
        $this->viewData['jsCodes'] = array_merge($this->viewData['jsCodes'], $jsCodes);

        $jenjangState->konfirmasiView($this->viewData, $siswa);
        $this->ci->template->display_daftar('daftar/konfirmasi_pilih_sekolah_main', $this->viewData);
    }

    public function submit() {
        //$siswa = $this->ci->session->userdata('siswa');
        //$this->ci->session->set_userdata('siswa', $siswa);
        $ya = $this->ci->input->post('ya');
        $tidak = $this->ci->input->post('tidak');
        if ($ya) {
            $count = $this->getCount();
            if ($count < $this->maxCount - 1)
                $this->setCount($count + 1);
            else {
                //$this->ci->session->unset_userdata('siswa');
                $this->ci->load->model('siswaModel');
                $jenjangState =& $this->stateManager->getJenjangState();
                $jalurState =& $this->stateManager->getJalurState();
                $siswa = $this->ci->session->userdata('siswa');
                $siswa['ip'] = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
                $siswa['browser'] = $_SERVER['HTTP_USER_AGENT'];
                $siswa['timestamp'] = date('Y-m-d H:i:s', time());
                $this->ci->siswaModel->simpan($jalurState->getName(), $jenjangState->getName(), $siswa);
                $this->ci->session->set_userdata('siswa', $siswa);
                $this->stateManager->setCurrentState('SelesaiState');
            }
        } else if ($tidak) {
            $this->stateManager->setCurrentState('PilihSekolahState');
        }
        parent::submit();
    }
}

?>
