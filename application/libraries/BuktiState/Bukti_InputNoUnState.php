<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bukti_InputNoUn
 *
 * @author m.rap
 */
class Bukti_InputNoUnState extends BuktiState {

    public function submit() {
        if ($this->jenjang == 'smp') {
            $prevJenjang = 'sd';
        } else {
            $prevJenjang = 'smp';
        }

        $noUn = $this->ci->input->post('noUn');
        $tahun = substr($noUn, 1, 2);
        $wilayah = substr($noUn, 3, 4);

        $this->ci->load->model('siswaModel');
        $siswa = array();
        $this->ci->siswaModel->getSiswa($siswa, $prevJenjang, $noUn, $this->jalur);
        if ($siswa == null) {
            $this->errors .= '<div class="notice-text">Siswa belum terdaftar.</div>';
            $this->ci->currentState->view();
            return;
        }
        if (!$siswa['statusPendaftaran'] && !$siswa['statusDiterima']) {
            $this->errors .= '<div class="notice-text">Siswa belum terdaftar.</div>';
            $this->ci->currentState->view();
            return;
        }
        $statusDaftar = strtolower('sm'.$siswa['statusPendaftaran']);
        if($this->jalur == 'umum' && (strtolower($statusDaftar) != strtolower($this->jenjang))) {
            $this->errors .= "<div class='notice-text'>Siswa terdaftar pada jenjang $statusDaftar.</div>";
            $this->ci->currentState->view();
            return;
        }
        $siswa['no_un'] = $noUn;
        if ($tahun != '15' || !($wilayah == '0501' || $wilayah == '0551') || !$siswa['pin']) {
            $this->ci->session->set_userdata('bukti_belumDiketahui', '1');
        }
        $this->ci->session->set_userdata('siswa', $siswa);
        require_once APPPATH.'libraries/BuktiState/BuktiState.php';
        require_once APPPATH.'libraries/BuktiState/Bukti_InputPinState.php';

        $this->ci->currentState = new Bukti_InputPinState($this->ci);
        $this->ci->session->set_userdata('buktiState', 'Bukti_InputPinState');
        $this->ci->currentState->view();
    }

    public function view() {
        parent::view();
        $this->ci->template->display('bukti/input_un', $this->viewData);

    }
}

?>
