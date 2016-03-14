<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Sekolahunbk extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->output->cache(1);
        $this->load->library('template/template');
    }

    public function index() {
        show_404();
    }

    public function beranda(){
        $data = $this->data;
        $this->template->display_unbk('unbk/beranda', $data);
    }

    public function lihat($jenjang='', $jalur='', $urutan='') {
//        if (!$this->validateTanggalDaftar()) {
//            return;
//        }
        $data = $this->data;

        // if(!empty($urutan) && (!is_numeric($urutan) || intval($urutan)<0)){
        //     redirect('rekap/lihat/'.$jenjang.'/'.$jalur);
        //     return;
        // }

        $data['page_title'] = 'Detail UNBK Sekolah '. strtoupper($jenjang);
        $jenjang = strtolower($jenjang);
        $jalur = strtolower($jalur);
        if($jenjang=="smp" || $jenjang=="sma" || $jenjang=="smk") {
        //if( (($jenjang=="smp" || $jenjang=="sma" || $jenjang=="smk") && ($jalur=="umum"))){
            $this->load->library('pagination');
            $this->load->model('unbk_model');
            // if(isset($_POST['noUn']))
            // {
            //     $data['noUn'] = trim($this->input->post('noUn'));
            // } else {
            //     $data['noUn'] = '';
            // }
            // $where = array('input_status_validasi' => 1);
            // if($data['noUn'] != '') $where = array('input_uasbn' => $data['noUn']);
            $this->db->where(array('jenjang' => $jenjang));
            $this->db->from('sekolah_unbk');

            //Pagination init
            $pagination = $this->getPaginationConfig();
            $pagination['base_url']     = site_url('sekolahunbk/lihat/'.$jenjang.'/'.$urutan);
            $pagination['total_rows']   = $this->db->count_all_results();
            $pagination['per_page']     = "10";
            $pagination['uri_segment'] = 5;
            $pagination['num_links']    = 4;
            $data['totalrekap'] = $pagination['total_rows'];

            $this->pagination->initialize($pagination);

            $data['rekap'] = $this->unbk_model->rekapData($jenjang, $pagination['total_rows'], $urutan);
            $data['urut'] = ($urutan==''?0:$urutan);
            $data['jenjang'] = $jenjang;
            $data['jalur']= $jalur;
            // $data['kk'] = $this->session->userdata('kk');
            // $data['sekolah'] = $this->session->userdata('sekolah');

            // if ($this->session->userdata('complete')) {
            //     $this->session->unset_userdata('complete');
            //     $this->template->display_daftar('rekap/rekap', $data);
            // } else {
            //     $this->template->display_rekap('rekap/lihat_rekap', $data);
            // }
            $this->template->display_unbk('unbk/rekap', $data);
        }
        else {
            show_404();
        }
    }
	
	public function petugas($jenjang='', $jalur='', $urutan='') {
//        if (!$this->validateTanggalDaftar()) {
//            return;
//        }
        $data = $this->data;

        // if(!empty($urutan) && (!is_numeric($urutan) || intval($urutan)<0)){
        //     redirect('rekap/lihat/'.$jenjang.'/'.$jalur);
        //     return;
        // }

        $data['page_title'] = 'Petugas UNBK '. strtoupper($jenjang);
        $jenjang = strtolower($jenjang);
        $jalur = strtolower($jalur);
        if($jenjang=="smp" || $jenjang=="sma" || $jenjang=="smk") {
        //if( (($jenjang=="smp" || $jenjang=="sma" || $jenjang=="smk") && ($jalur=="umum"))){
            $this->load->library('pagination');
            $this->load->model('unbk_model');
            // if(isset($_POST['noUn']))
            // {
            //     $data['noUn'] = trim($this->input->post('noUn'));
            // } else {
            //     $data['noUn'] = '';
            // }
            // $where = array('input_status_validasi' => 1);
            // if($data['noUn'] != '') $where = array('input_uasbn' => $data['noUn']);oa
			
			$query = "select * from sekolah_unbk, petugas_unbk where sekolah_unbk.npsn=petugas_unbk.npsn and sekolah_unbk.jenjang= '".$jenjang."'";
			$result = $this->db->query($query);
			
			//$count = 'select count(*) from sekolah_unbk, petugas_unbk where sekolah_unbk.npsn=petugas_unbk.npsn and sekolah_unbk.jenjang = "'.$jenjang.'"';
			//$numrow = $this->db->query($count);
            //$this->db->where(array('jenjang' => $jenjang));
			//$this->db->where(array(p'sekolah_unbk.npsn = petugas_unbk.npsn'));
            //$this->db->from(array('petugas_unbk'));
			
			//$this->db->join('petugas_unbk','sekolah_unbk.npsn = petugas_unbk.npsn','inner');

            //Pagination init
            $pagination = $this->getPaginationConfig();
            $pagination['base_url']     = site_url('sekolahunbk/petugas/'.$jenjang.'/'.$urutan);
            $pagination['total_rows']   = $result->num_rows();
			//$pagination['total_rows']   = $count;
            $pagination['per_page']     = "10";
            $pagination['uri_segment'] = 5;
            $pagination['num_links']    = 4;
            $data['totalrekap'] = $pagination['total_rows'];

            $this->pagination->initialize($pagination);

            $data['rekap'] = $this->unbk_model->rekapPetugas($jenjang, $pagination['total_rows'], $urutan);
            $data['urut'] = ($urutan==''?0:$urutan);
            $data['jenjang'] = $jenjang;
            $data['jalur']= $jalur;
            // $data['kk'] = $this->session->userdata('kk');
            // $data['sekolah'] = $this->session->userdata('sekolah');

            // if ($this->session->userdata('complete')) {
            //     $this->session->unset_userdata('complete');
            //     $this->template->display_daftar('rekap/rekap', $data);
            // } else {
            //     $this->template->display_rekap('rekap/lihat_rekap', $data);
            // }
            $this->template->display_unbk('unbk/rekap_petugas', $data);
			
        }
        else {
            show_404();
        }
    }

    /*public function hasil($jenjang='', $jalur='', $urutan=''){
        if($jalur=="kawasan" && in_array($jenjang, array('smp', 'sma'))){
            $data = $this->data;
            $data['jenjang'] = $jenjang;
            $data['jalur'] = $jalur;
            $this->load->vars($data);
            //$this->load->view('rekap/hasil');
            $this->template->display_rekap('rekap/hasil', $data);
        }
        else {
            show_404();
        }
    }*/

    private function getPaginationConfig(){
        $pagination['full_tag_open'] = '<div class="col-md-12 text-center"><ul class="pagination">';
        $pagination['full_tag_close'] = '</ul></div><!--pagination-->';

        $pagination['first_link'] = '&laquo; First';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = 'Last &raquo;';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = 'Next &rarr;';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '&larr; Previous';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';
        return $pagination;
    }
}

?>