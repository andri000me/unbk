<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class unduhbukti extends CI_Controller {
    
    public $currentState;
    
    public function __construct() {
        parent::__construct();
        $this->load->library('template/template');

    }
    
    public function index() {
        $jalur = $this->input->get('jalur');
        $jenjang = $this->input->get('jenjang');
        $validJalur = array('umum', 'kawasan');
        $validJenjang = array('smp', 'sma', 'smk');
        $data['jalur'] = $jalur;
        $data['jenjang'] = $jenjang;
        if (!$jalur ||
            !$jenjang ||
            !in_array($jalur, $validJalur) ||
            !in_array($jenjang, $validJenjang) ||
            ($jenjang == 'smk' && $jalur == 'kawasan')) {
            $this->template->display_home('bukti/beranda',$data);

        } else {
            $data = array(
                'bukti_belumDiketahui' => '',
                'siswa' => ''
            );
            $this->session->unset_userdata($data);
            $this->session->set_userdata('bukti_jalur', $jalur);
            $this->session->set_userdata('bukti_jenjang', $jenjang);
            $this->session->set_userdata('buktiState', 'Bukti_InputNoUnState');
            redirect('unduhbukti/view');
        }
    }
    
    public function submit() {
        $buktiStateName = $this->session->userdata('buktiState');
        if ($buktiStateName) {
            require_once APPPATH.'libraries/BuktiState/BuktiState.php';
            require_once APPPATH.'libraries/BuktiState/'.$buktiStateName.'.php';
            $this->currentState = new $buktiStateName($this);
            $this->currentState->submit();
        }
        else {
            redirect('unduhbukti');
        }
    }
    
    public function view() {
        $buktiStateName = $this->session->userdata('buktiState');
        if ($buktiStateName) {
            require_once APPPATH.'libraries/BuktiState/BuktiState.php';
            require_once APPPATH.'libraries/BuktiState/'.$buktiStateName.'.php';
            $this->currentState = new $buktiStateName($this);
            $this->currentState->view();
        }
        else {
            redirect('unduhbukti');
        }
    }
    
}