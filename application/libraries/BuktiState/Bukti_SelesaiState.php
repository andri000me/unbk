<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bukti_SelesaiState
 *
 * @author m.rap
 */
class Bukti_SelesaiState extends BuktiState {
    
    public function submit() {
        if ($this->ci->input->post('selesai')) {
            $data = array(
                'bukti_jalur' => '',
                'bukti_jenjang' => '',
                'bukti_belumDiketahui' => '',
                'siswa' => ''
            );
            $this->ci->session->unset_userdata($data);
            redirect('unduhbukti');
        }
        $this->ci->currentState->view();
    }
    
    public function view() {
        parent::view();
        $this->ci->template->display('bukti/selesai', $this->viewData);

    }
}

?>
