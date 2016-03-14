<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/PendaftaranState/PendaftaranState.php';

/**
 * Description of InputPinState
 *
 * @author m.rap
 */
class InputPinState extends PendaftaranState {
    public function view() {
        parent::view();
        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        $jenjangState =& $this->stateManager->getJenjangState();
        $this->viewData['jenisSiswaState'] = $jenisSiswaState;
        $this->viewData['jenjangState'] = $jenjangState;
        $this->viewData['jsCodes'] = array_merge($this->viewData['jsCodes'], array('pendaftaran_umum/InputPin'));
        $this->ci->template->display_daftar('daftar/input_pin', $this->viewData);
    }
    
    public function validate() {
        $this->ci->load->library('form_validation');
        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        if ($jenisSiswaState->belumDiketahui)
            $this->ci->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required|callback_valid_date');
        else
            $this->ci->form_validation->set_rules('pin', 'PIN', 'trim|required');
        return parent::validate();
    }
    
    public function submit() {
        if (!$this->validate()) {
            parent::submit();
            return;
        }
        
        $siswa = $this->ci->session->userdata('siswa');
        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        if (!$jenisSiswaState->belumDiketahui) {
            $pin = $this->ci->input->post('pin');
            if ($pin != $siswa['pin']) {
                $this->errors .= '<div class="notice-text">PIN yang Anda masukkan tidak sesuai.</div>';
                parent::submit();
                return;
            }
        }
        
        if ($siswa['statusPendaftaran'] != false || $siswa['statusDiterima'] != false) {
            $pilihan1 = $siswa['pilihan'][0];
            if ($pilihan1 < 300) {
                $this->stateManager->setJenjangState('SmpState');
            } else if ($pilihan1 > 300 && $pilihan1 < 500) {
                $this->stateManager->setJenjangState('SmaState');
            } else if ($pilihan1 > 10000) {
                $this->stateManager->setJenjangState('SmkState');
            }
            
            if ($jenisSiswaState->isBelumDiketahui()) {
                $tgl_lahir = $this->ci->input->post('tgl_lahir');
                if ($tgl_lahir != $siswa['tgl_lahir']) {
                    $this->errors .= '<div class="notice-text">Tanggal lahir yang Anda masukkan tidak sesuai.</div>';
                    parent::submit();
                    return;
                }
            }
            
            $this->stateManager->setCurrentState('SelesaiState');
        } else {
            $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
            if ($jenisSiswaState->isBelumDiketahui())
                $siswa['tgl_lahir'] = $this->ci->input->post('tgl_lahir');
            
            $this->ci->session->set_userdata('siswa', $siswa);
            $this->stateManager->setCurrentState('PilihSekolahState');
        }
            
        parent::submit();
    }
}

?>
