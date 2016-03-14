<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Umum extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('template/template');
    }
    public function index() {
        $data = $this->data;
        $this->template->display_home('umum/beranda', $data);
    }

    public function jadwal() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Jadwal";
        $this->template->display_home('umum/jadwal', $data);

    }

     public function video() {
        $data = $this->data;
        $data["page_title"] = "Video";
        $this->template->display_home('umum/video', $data);
    }

    public function sambutan() {
        $data = $this->data;
        $data["page_title"] = "Sambutan";
        $this->template->display_home('umum/sambutan', $data);
    }
	
	 public function juknis() {
        $data = $this->data;
        $data["page_title"] = "Juknis";
        $this->template->display_home('umum/sambutan', $data);
    }

    public function berita($urutan=0) {
        $data= $this->data;
        if(!is_numeric($urutan) || intval($urutan)<0) redirect('/umum/berita');
        $this->load->library('pagination');
        $this->load->model('beritamodel');
        $config = $this->getPaginationConfig();
        $config['base_url'] = site_url('umum/berita');
        //$config['total_rows'] = $this->beritamodel->getCountBerita();
        //$data['totalberita'] = $config['total_rows'];
        $config['per_page'] = '5';
        $config['uri_segment'] = 3;
        $config['num_links'] = 4;
        $this->pagination->initialize($config);
        $data['pagelink'] = $this->pagination->create_links();
        $data['urutan'] = $urutan;
        //$data['berita'] = $this->beritamodel->getAllBerita($config['per_page'], $urutan);
        $data["page_title"] = "Berita";
        $this->load->vars($data);
        $this->template->display_home('umum/berita', $data);
    }
	
	

    public function prosedur() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Prosedur";
        $this->template->display('umum/prosedur', $data);
    }

    public function ketentuan() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Ketentuan";
        $this->template->display('umum/ketentuan', $data);
    }


    public function pagu() {
        $data = $this->data;

        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $this->load->model('sekolahmodel');
//        $data['smp'] = $this->sekolahmodel->getSekolahByJenjang('smp');
//        $data['sma'] = $this->sekolahmodel->getSekolahByJenjang('sma');
//        $data['smk'] = $this->sekolahmodel->getSekolahByJenjang('smk');
            $data['smpumum'] = $this->sekolahmodel->getSekolahByJenjang('smp', 'umum');
            $data['smaumum'] = $this->sekolahmodel->getSekolahByJenjang('sma', 'umum');
            $data['smpkawasan'] = $this->sekolahmodel->getSekolahByJenjang('smp', 'kawasan');
            $data['smakawasan'] = $this->sekolahmodel->getSekolahByJenjang('sma', 'kawasan');
            $data['smk'] = $this->sekolahmodel->getSekolahByJenjang('smk');
            $data['totalsmk'] = $this->sekolahmodel->getCountSmk('smk');

        $data["page_title"] = "Pagu";
        $this->template->display('umum/pagu_db', $data);
        // $this->template->display('umum/pagu', $data);
    }


    public function kosong() {
        $data = $this->data;
        $this->template->display_error('umum/belumada', $data);
        //$this->load->view('umum/belumada', $data);
    }

    /*
    public function pendaftaran($menu = 'pendaftaran') {
        $data = $this->data;
        $data['menu'] = $menu;
        $this->load->view('umum/peringatanlatihan', $data);
    }
    */
    public function faq($urutan=0) {
        $data= $this->data;

        $data['message'] = '';
        if(!is_numeric($urutan) || intval($urutan)<0) redirect('/umum/faq');
        $this->load->model('faqmodel');
        $this->load->library('pagination');
        $config = $this->getPaginationConfig();
        $config['base_url'] = site_url('umum/faq');
        $config['total_rows'] = $this->faqmodel->getCountFaq();
        $data['totalfaq'] = $config['total_rows'];
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['num_links'] = 4;
        $this->pagination->initialize($config);
        $data['pagelink'] = $this->pagination->create_links();
        $data['urutan'] = $urutan;

        $data['faq'] = $this->faqmodel->getAllFaq($config['per_page'], $urutan);
        $data["page_title"] = "FAQ";
        $this->template->display('umum/faq', $data);
    }

    public function data_sekolah($sekolah="smp") {
        $data = $this->data;

        $jsCodes = array("tes_pagination/jquery.dataTables", "tes_pagination/dataTables.bootstrap", "tes_pagination/dataTables.bootstrapPagination-3", "tes_pagination/pagination");
        $data["jsCodes"] = $jsCodes;

        $data["page_title"] = "Data Sekolah";
        //$this->load->view('umum/data_sekolah',$data);
        if ($sekolah=="sd")
            $this->template->display('umum/data_sekolah_sd', $data);
        else if ($sekolah=="smp")
            $this->template->display('umum/data_sekolah_smp', $data);
        else if ($sekolah=="sma")
            $this->template->display('umum/data_sekolah_sma', $data);
        else if ($sekolah=="smk")
            $this->template->display('umum/data_sekolah_smk', $data);

    }

    /*
    public function forum() {
        $data = $this->data;

        $data["page_title"] = "Forum";
        $this->load->view('umum/forum', $data);

        $this->template->display('umum/belumada', $data);
    }*/

    /*
    public function tips() {
        $data = $this->data;

        $data["page_title"] = "Tips";
        $this->load->view('umum/tips', $data);

        $this->template->display('umum/belumada', $data);
    }
    */

    public function istilah() {
        $data = $this->data;

        $data["page_title"] = "Daftar Istilah";
        $this->template->display('umum/istilah', $data);
    }

    /*
    public function sms() {
        $data = $this->data;

        $data["page_title"] = "SMS";
        $this->load->view('umum/sms', $data);

        $this->template->display('umum/belumada', $data);
    }*/

    public function statistik2011() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Statistik 2011";

        $this->template->display('umum/statistik2011', $data);
    }
    public function statistik2012() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Statistik 2012";

        $this->template->display('umum/statistik2012', $data);
    }
    public function statistik2013(){
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Statistik 2013";

        $this->template->display('umum/statistik2013', $data);
    }
    public function statistik2014(){
        $data= $this->data;
        $data['jsCodes'] = array('pagecontrol', 'dropdown');

        $data["page_title"] = "Statistik 2014";

        $this->template->display('umum/statistik2014', $data);
    }

    public function statistik2015(){
        // show_404 ();
        $data= $this->data;
        $data['jsCodes'] = array('pagecontrol', 'dropdown');
        $this->load->model('statistikmodel');
        $this->load->model('sekolahmodel');
        $data['countsmk'] = $this->sekolahmodel->getCountSmk();
        $data['umumsmp'] = $this->statistikmodel->getStatistik('smp', 'umum');
        $data['umumsma'] = $this->statistikmodel->getStatistik('sma', 'umum');
        $data['umumsmk'] = $this->statistikmodel->getStatistik('smk', 'umum');

        $data["page_title"] = "Statistik 2015";

        $this->template->display('umum/statistik2015', $data);
    }

    public function un2010() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Sebaran UN 2010";

        $this->template->display('umum/un2010', $data);
    }
    public function un2012() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Sebaran UN 2012";
        $this->template->display('umum/un2012', $data);
    }
    public function un2013() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Sebaran UN 2013";
        $this->template->display('umum/un2013', $data);
    }
    public function un2014() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Sebaran UN 2014";
        $this->template->display('umum/un2014', $data);
    }
    public function un2015() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Sebaran UN 2015";
        $this->template->display('umum/un2015', $data);
    }
    public function subrayon() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Sub Rayon";
        $this->template->display('umum/subrayon', $data);
    }
    public function inklusif() {
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Sekolah Inklusif";
        $this->template->display('umum/inklusif', $data);
    }

    /*
    public function forumcreate() {
        $data = $this->data;

        $this->load->view('forum/create', $data);

        $this->template->display('umum/belumada', $data);
    }*/



    public function tpa(){
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Informasi Tes Potensi Akademik (TPA)";
        //$this->load->view('umum/tpa', $data);
        $this->template->display('umum/tpa', $data);
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

    /*
    public function test(){
        //$this->load->model('sekolahmodel');
        //$res = $this->sekolahmodel->getSekolahByJenjang('smp');
        //print_r($res);
        $this->load->view('lainlain/index');
    }*/

    public function decode($val) {
        require_once APPPATH.'libraries/Encryption.php';
        $encryption = new Encryption();
        echo $encryption->decode($val);
    }


    public function pengumumanmitrawarga($jenjangnya=''){

        $jenjangnya= strtolower($jenjangnya);
        if(in_array($jenjangnya, array('smp', 'sma', 'smk'))) {
        $data = $this->data;
        $this->load->model('sekolahmodel');
        $data['sekolah'] = $this->sekolahmodel->getSekolahAsPilihan($jenjangnya);
        $data['jenjang'] = $jenjangnya;
        $kodeSekolah = $this->input->post('sekolah');
        if(!empty($kodeSekolah)){
            $this->load->model('siswamodel');
            $data['rekap'] = $this->siswamodel->pengumumanMitrawarga($kodeSekolah);
            $data['kodeSekolah'] = $kodeSekolah;
            $jenjang = strtolower(substr($kodeSekolah, 0, 3));
            if($jenjang=='smk') {
                $nomorSMK = substr($kodeSekolah, 3);
                $this->load->model('sekolahmodel');
                $data['jurusan'] = $this->sekolahmodel->getJurusan((intval($nomorSMK<10)?'0':'').$nomorSMK);
            }
        }
        $jsCodes = array("pagecontrol", "dropdown", "tes_pagination/jquery.dataTables", "tes_pagination/dataTables.bootstrap", "tes_pagination/dataTables.bootstrapPagination-3", "tes_pagination/pagination");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Pengumuman PPDB Jalur Mitra Warga";

        $this->template->display('umum/pengumumanmw', $data);
        }
        else show_404 ();
    }

    public function beranda_japres($jenjang=''){
        if($jenjang=='') $jenjang = 'smp';
        if(in_array($jenjang, array('smp', 'sma', 'smk'))){
            $data = $this->data;
            $jsCodes = array("pagecontrol", "dropdown");
            $data["jsCodes"] = $jsCodes;
            $data["page_title"] = "Pengumuman PPDB Jalur Prestasi";
            $data['jenjang'] = $jenjang;

            $this->template->display('umum/beranda_japres', $data);
        }
        else show_404 ();
    }

    public function japres($jenjang=''){
        if($jenjang=='') $jenjang = 'smp';
        if(in_array($jenjang, array('smp', 'sma', 'smk'))){
            $data = $this->data;
            $jsCodes = array("pagecontrol", "dropdown", "tes_pagination/jquery.dataTables", "tes_pagination/dataTables.bootstrap", "tes_pagination/dataTables.bootstrapPagination-3", "tes_pagination/pagination");
            $data["jsCodes"] = $jsCodes;
            $data["page_title"] = "Pengumuman PPDB Jalur Prestasi Olahraga";
            $data['jenjang'] = $jenjang;

            $this->template->display('umum/japres', $data);
        }
        else show_404 ();
    }


    public function pengumumaninklusif($jenjang=''){
        if($jenjang=='') $jenjang = 'smp';
        if(in_array($jenjang, array('smp', 'sma', 'smk'))){
            $data = $this->data;
            $jsCodes = array("pagecontrol", "dropdown", "tes_pagination/jquery.dataTables", "tes_pagination/dataTables.bootstrap", "tes_pagination/dataTables.bootstrapPagination-3", "tes_pagination/pagination");
            $data["jsCodes"] = $jsCodes;
            $data['jenjang'] = $jenjang;
            $data["page_title"] = "Pengumuman PPDB Jalur Inklusif";

            $this->template->display('umum/pengumumaninklusif', $data);
        }
        else show_404();
    }

    public function japresakad($jenjang=''){
        if($jenjang=='') $jenjang = 'smp';
        if(in_array($jenjang, array('smp', 'sma'))){
            $data = $this->data;
            $jsCodes = array("pagecontrol", "dropdown", "tes_pagination/jquery.dataTables", "tes_pagination/dataTables.bootstrap", "tes_pagination/dataTables.bootstrapPagination-3", "tes_pagination/pagination");
            $data["jsCodes"] = $jsCodes;
            $data["page_title"] = "Pengumuman PPDB Jalur Prestasi Akademik";
            $data['jenjang'] = $jenjang;

            $this->template->display('umum/japresakad', $data);
        }
        else            show_404 ();
    }

    public function japresnonakad($jenjang=''){
        if($jenjang=='') $jenjang = 'smp';
        if(in_array($jenjang, array('smp', 'sma', 'smk'))){
            $data = $this->data;
            $jsCodes = array("pagecontrol", "dropdown", "tes_pagination/jquery.dataTables", "tes_pagination/dataTables.bootstrap", "tes_pagination/dataTables.bootstrapPagination-3", "tes_pagination/pagination");
            $data["jsCodes"] = $jsCodes;
            $data["page_title"] = "Pengumuman PPDB Jalur Prestasi Akademik";
            $data['jenjang'] = $jenjang;

            $this->template->display('umum/japresnonakad', $data);
        }
        else            show_404 ();
    }

    public function satulokasi(){
        $data = $this->data;
        $jsCodes = array("pagecontrol", "dropdown", "tes_pagination/jquery.dataTables", "tes_pagination/dataTables.bootstrap", "tes_pagination/dataTables.bootstrapPagination-3", "tes_pagination/pagination");
        $data["jsCodes"] = $jsCodes;
        $data["page_title"] = "Pengumuman PPDB Jalur Satu Lokasi";
        $kodesekolah = $this->input->post('sekolah');
        if(in_array($kodesekolah, array('smpn28', 'smpn44', 'smpn45', 'smpn46', 'smpn47', 'smpn48', 'smpn50', 'smpn51', 'smpn52'))){
            $this->template->display('satulokasi/'.$kodesekolah, $data);
        }
        else{
            $this->template->display('umum/satulokasi', $data);
        }
    }


    public function pilihhasil(){
        $data = $this->data;
        $data['page_title'] = 'Lihat Hasil Seleksi';

        $this->template->display('umum/hasilseleksi', $data);
    }

     public function pengumumanpemenuhanpagu(){
        $data = $this->data;
        $data['page_title'] = 'Pengumuman Pemenuhan Pagu';

        $this->template->display('umum/pengumumanpemenuhanpagu', $data);
    }

}

?>