<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bukti_InputPinState
 *
 * @author m.rap
 */
class Bukti_InputPinState extends BuktiState {
    
    public function submit() {
        $siswa = $this->ci->session->userdata('siswa');
        if ($this->belumDiketahui) {
            $tglLahir = $this->ci->input->post('tglLahir');
            if ($tglLahir != $siswa['tgl_lahir']) {
                $this->errors .= '<div class="notice-text">Tanggal lahir yang Anda masukkan tidak sesuai.</div>';
                $this->ci->currentState->view();
                return;
            }
        } else {
            $pin = $this->ci->input->post('pin');
            if ($pin != $siswa['pin']) {
                $this->errors .= '<div class="notice-text">PIN yang Anda masukkan tidak sesuai.</div>';
                $this->ci->currentState->view();
                return;
            }
        }
        $this->ci->session->set_userdata('siswa', $siswa);
        require_once APPPATH.'libraries/BuktiState/BuktiState.php';
        require_once APPPATH.'libraries/BuktiState/Bukti_SelesaiState.php';
        
        $this->ci->currentState = new Bukti_SelesaiState($this->ci);
        $this->ci->session->set_userdata('buktiState', 'Bukti_SelesaiState');
        $this->ci->currentState->view();
    }
    
    public function view() {
        parent::view();
        $this->ci->template->display('bukti/input_pin', $this->viewData);
    }
}

?>
