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
		//$data['jalur']= 2016;
        $data = $this->data;
        $this->template->display_unbk('unbk/beranda', $data);
    }
	
	public function beranda_unpk(){
		//$data['jalur']= 2016;
        $data = $this->data;
        $this->template->display_unbk('unbk/beranda_unpk', $data);
    }

	public function beranda_petugas(){
		//$data['jalur']= 2016;
        $data = $this->data;
        $this->template->display_unbk('unbk/petugas', $data);
    }
	
	public function statistik() {

        $data = $this->data;

        $data['page_title'] = 'Statistik UNBK 2016 ';
       
        
            $this->load->library('pagination');
            $this->load->model('unbk_model');
            
			$query = "SELECT s.jenjang, count( s.kode_sekolah ) AS jumlah_sekolah, sum( d.jumlah_peserta ) AS jumlah_peserta, 
					sum( d.jumlah_server ) AS jumlah_server, sum( d.jumlah_client ) AS jumlah_client, 
					sum( d.jumlah_proktor ) AS jumlah_proktor, sum( d.jumlah_teknisi ) AS jumlah_teknisi, 
					sum( mandiri =1 ) AS mandiri, sum( mandiri =0 ) AS menggabung
					FROM data_unbk d, sekolah_unbk s, jenjang_unbk j
					WHERE d.npsn = s.npsn AND s.jenjang = j.nama_jenjang
					GROUP BY s.jenjang
					ORDER BY j.id_jenjang
					";
			$result = $this->db->query($query);
			
			$query1 = "SELECT s.jenjang, count( s.kode_sekolah ) AS jumlah_sekolah, sum( d.jumlah_peserta ) AS jumlah_peserta, 
					sum( d.jumlah_server ) AS jumlah_server, sum( d.jumlah_client ) AS jumlah_client, 
					sum( d.jumlah_proktor ) AS jumlah_proktor, sum( d.jumlah_teknisi ) AS jumlah_teknisi, 
					sum( mandiri =1 ) AS mandiri, sum( mandiri =0 ) AS menggabung
					FROM data_unbk d, sekolah_unbk s
					WHERE d.npsn = s.npsn and s.jenjang in ('SMP', 'MTS')
					GROUP BY s.jenjang
					ORDER BY s.jenjang DESC";
			$result1 = $this->db->query($query1);
			
			$query2 = "SELECT s.jenjang, count( s.kode_sekolah ) AS jumlah_sekolah, sum( d.jumlah_peserta ) AS jumlah_peserta, 
					sum( d.jumlah_server ) AS jumlah_server, sum( d.jumlah_client ) AS jumlah_client, 
					sum( d.jumlah_proktor ) AS jumlah_proktor, sum( d.jumlah_teknisi ) AS jumlah_teknisi, 
					sum( mandiri =1 ) AS mandiri, sum( mandiri =0 ) AS menggabung
					FROM data_unbk d, sekolah_unbk s
					WHERE d.npsn = s.npsn and s.jenjang in ('SMA', 'MA')
					GROUP BY s.jenjang
					ORDER BY s.jenjang DESC";
			$result2 = $this->db->query($query2);
			
			$query3 = "SELECT s.jenjang, count( s.kode_sekolah ) AS jumlah_sekolah, sum( d.jumlah_peserta ) AS jumlah_peserta, 
					sum( d.jumlah_server ) AS jumlah_server, sum( d.jumlah_client ) AS jumlah_client, 
					sum( d.jumlah_proktor ) AS jumlah_proktor, sum( d.jumlah_teknisi ) AS jumlah_teknisi, 
					sum( mandiri =1 ) AS mandiri, sum( mandiri =0 ) AS menggabung
					FROM data_unbk d, sekolah_unbk s
					WHERE d.npsn = s.npsn and s.jenjang in ('SMK')
					GROUP BY s.jenjang
					ORDER BY s.jenjang DESC";
			$result3 = $this->db->query($query3);

            //Pagination init
			
            $pagination = $this->getPaginationConfig();
            $pagination['base_url']     = site_url('sekolahunbk/statistik');
            //$pagination['total_rows']   = $this->db->count_all_results();
            $pagination['per_page']     = "10";
            $pagination['uri_segment'] = 5;
            $pagination['num_links']    = 4;
            //$data['totalrekap'] = $pagination['total_rows'];

            $this->pagination->initialize($pagination);
			$urutan='';
			$data['rekap'] = $result->result_array();
            $data['rekap1'] = $result1->result_array();
			$data['rekap2'] = $result2->result_array();
			$data['rekap3'] = $result3->result_array();
            $data['urut'] = ($urutan==''?0:$urutan);
            //$data['jenjang'] = $jenjang;
            //$data['jalur']= $jalur;
            
            $this->template->display_unbk('unbk/statistik', $data);
        
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
        if(!empty($jenjang)) {
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
        if(!empty($jenjang)) {
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
			
			$query = "select * from sekolah_unbk s, petugas_unbk p where s.npsn = p.npsn and s.jenjang= '".$jenjang."' and p.aktif=1 and p.tahun='".$jalur."'";
			$result = $this->db->query($query);
			
			//$count = $this->unbk_model->count_all_petugas($jenjang);
			//$numrow = $this->db->query($count);
            //$this->db->where(array('jenjang' => $jenjang));
			//$this->db->where(array(p'sekolah_unbk.npsn = petugas_unbk.npsn'));
            //$this->db->from(array('petugas_unbk'));
			
			//$this->db->join('petugas_unbk','sekolah_unbk.npsn = petugas_unbk.npsn','inner');

            //Pagination init
            $pagination = $this->getPaginationConfig();
            $pagination['base_url']     = site_url('sekolahunbk/petugas/'.$jenjang.'/'.$jalur.'/'.$urutan);
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

	function unpk($jenjang, $jalur, $urutan='') {

        $data = $this->data;

        $data['page_title'] = 'Detail Sekolah UNPK '. strtoupper($jenjang);
        $jenjang = strtoupper($jenjang);
        //$jalur = strtolower($jalur);
		
        if(!empty($jenjang)) {
        //if( (($jenjang=="smp" || $jenjang=="sma" || $jenjang=="smk") && ($jalur=="umum"))){
            $this->load->library('pagination');
            $this->load->model('unbk_model');
			
			if($jenjang == 'C'){
				$tabel = 'data_unpk_paket_c';
				$paket = 'Paket C';
			}
			elseif($jenjang == 'B'){
				$tabel = 'data_unpk_paket_a_b';
				$paket = 'Paket B';
			}
			elseif($jenjang == 'A'){
				$tabel = 'data_unpk_paket_a_b';
				$paket = 'Paket A';
			}
            // if(isset($_POST['noUn']))
            // {
            //     $data['noUn'] = trim($this->input->post('noUn'));
            // } else {
            //     $data['noUn'] = '';
            // }
            // $where = array('input_status_validasi' => 1);
            // if($data['noUn'] != '') $where = array('input_uasbn' => $data['noUn']);
            //$this->db->where(array('jenjang' => $jenjang));
            $this->db->get($tabel);

            //Pagination init
            $pagination = $this->getPaginationConfig();
            $pagination['base_url']     = site_url('sekolahunbk/unpk_paket_c/'.$jenjang.'/'.$urutan);
            //$pagination['total_rows']   = $this->db->count_all_results();
            $pagination['per_page']     = "10";
            $pagination['uri_segment'] 	= 5;
            $pagination['num_links']    = 4;
            //$data['totalrekap'] 		= $pagination['total_rows'];

            $this->pagination->initialize($pagination);

            $data['rekap'] = $this->unbk_model->data_unpk($tabel, $jenjang, $paket);
            $data['urut']  = ($urutan==''?0:$urutan);
            $data['jenjang'] = $jenjang;
            $data['jalur'] = $jalur;
            // $data['kk'] = $this->session->userdata('kk');
            // $data['sekolah'] = $this->session->userdata('sekolah');

            // if ($this->session->userdata('complete')) {
            //     $this->session->unset_userdata('complete');
            //     $this->template->display_daftar('rekap/rekap', $data);
            // } else {
            //     $this->template->display_rekap('rekap/lihat_rekap', $data);
            // }
            $this->template->display_unbk('unbk/data_unpk', $data);
        }
        else {
            show_404();
        }
    }
	

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