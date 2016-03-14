<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Un extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('template/template');
    }

    public function index() {
        show_404();
    }

    public function lihat() {        
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
        if ($currentTime > mktime(15, 0, 0, 5, 15, 2015))
        {
            $data = $this->data;
            $data['page_title'] = 'Pengumuman Nilai UN 2015';
            if(isset($_POST['noUn']))
            {
                $data['noUn'] = trim($_POST['noUn']);
            }else {
                $data['noUn'] = '';
            }
            if($data['noUn'] != '' && strlen($data['noUn']) == 14){
                $kodeJenjang = array( 1 => 'sd', 2 => 'smp', 3 => 'sma', 4 => 'smk');
                $yangdiumumkan = array(1, 2, 3, 4);
                $kodeSBY = array('150551', '150501');
                $kode6 = substr($data['noUn'], 1, 6);
                $kodeJenjangUn = substr($data['noUn'], 0, 1);
                if(in_array($kodeJenjangUn, $yangdiumumkan) && in_array($kode6, $kodeSBY)){
                    $this->load->model('siswamodel');
                    $data['siswa'] = $this->siswamodel->getSiswaByUn($kodeJenjang[$kodeJenjangUn], $data['noUn']);
                    $data['j'] = $kodeJenjang[$kodeJenjangUn];
                }
            }
            $this->template->display('un/un', $data);
        }           
        else
        {
            show_404();
        }
    }
}

?>