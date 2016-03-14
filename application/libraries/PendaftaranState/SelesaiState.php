<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/PendaftaranState/PendaftaranState.php';

/**
 * Description of KonfirmasiPilihSekolahState
 *
 * @author m.rap
 */
class SelesaiState extends PendaftaranState {
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
        if ($jenjangState->getName() == 'smk') {
            $siswa['smk'] = $pilihan['smk'];
        }
        $this->viewData['siswa']        = $siswa;
        $this->viewData['jenjangState'] = $jenjangState;
        $this->viewData['jsCodes'] = array_merge($this->viewData['jsCodes'], array('pendaftaran_umum/Selesai'));
        
        $jenjangState->konfirmasiView($this->viewData, $siswa);
        
        $this->ci->template->display_daftar('daftar/selesai_main', $this->viewData);
    }
    
    public function submit() {
        $siswa = $this->ci->session->userdata('siswa');
        $this->ci->session->set_userdata('siswa', $siswa);
        $jenjangState =& $this->stateManager->getJenjangState();
        $jalurState =& $this->stateManager->getJalurState();
        if ($this->ci->input->post('selesai')) {
            $jenjang = $jenjangState->getName();
            $jalur = $jalurState->getName();
            $this->stateManager->resetAllState();
            $this->ci->session->unset_userdata('siswa');
            $this->ci->session->set_userdata('complete', true);
            redirect('rekap/lihat/'.$jenjang.'/'.$jalur);
        }
        parent::submit();
    }
}

?>
