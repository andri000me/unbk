<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BuktiState
 * @property CI_Controller $ci
 *
 * @author m.rap
 */
abstract class BuktiState {
    protected $ci;
    protected $jenjang;
    protected $jalur;
    protected $belumDiketahui;
    protected $errors = '';
    protected $viewData;
    
    public function __construct(&$ci) {
        $this->ci =& $ci;
        $this->jenjang = $this->ci->session->userdata('bukti_jenjang');
        $this->jalur = $this->ci->session->userdata('bukti_jalur');
        $this->belumDiketahui = $this->ci->session->userdata('bukti_belumDiketahui');
    }
    
    abstract public function submit();
    
    public function view() {
        $this->ci->load->library('template/template');
        $this->viewData['jenjang'] = $this->jenjang;
        $this->viewData['jalur'] = $this->jalur;
        if ($this->errors) {
            $this->errors =
                '<div id="errorsBox" class="notices">'.
                '   <div class="red">'.
                '       <a href="#" class="close"></a>'.
                '       <div class="notice-header fg-color-yellow">Terjadi Kesalahan Validasi</div>'.
                $this->errors.
                '   </div>'.
                '</div>';
        }
        $this->viewData['errors'] = $this->errors;
        $this->viewData['belumDiketahui'] = $this->belumDiketahui;
        
        //set headers to NOT cache a page
        header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
        header("Pragma: no-cache"); //HTTP 1.0
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
    }
}

?>
