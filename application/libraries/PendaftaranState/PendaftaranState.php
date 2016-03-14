<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of PendaftaranState
 * @property CI_Controller $ci
 * @property StateManager $stateManager
 * @property JenjangState $jenjangState
 * @property JalurState $jalurState
 *
 * @author m.rap
 */
abstract class PendaftaranState {
    protected $ci;
    protected $stateManager;

    private $jenjangState;
    private $jalurState;

    protected $viewData;
    protected $errors = '';

    /**
     *
     * @param CI_Controller $ci
     * @param StateManager $stateManager
     */
    public function __construct(&$ci, &$stateManager) {
        $this->ci =& $ci;
        $this->stateManager =& $stateManager;

        // menentukan kategori untuk ditampilkan ke user
        $kk = $this->ci->session->userdata('kk');
        $sekolah = $this->ci->session->userdata('sekolah');
        $kategori = "";
        if(($kk==1)&&($sekolah==1)){
            $kategori = "Dalam Kota";
        }
        else if (($kk==1)&&($sekolah==2)){
            $kategori = "Mutasi";
        }
        else if (($kk==1)&&($sekolah==3)){
            $kategori = "Dalam Kota Tahun Lalu / Kejar Paket A/B Dalam Kota";
        }
        else if (($kk==2)&&($sekolah==1)){
            $kategori = "Rekomendasi Dalam Kota";
        }
        else if (($kk==2)&&($sekolah==2)){
            $kategori = "Luar Kota";
        }
        $this->viewData['kategori'] = $kategori;
        // akhir menentukan kategori untuk ditampilkan ke user
    }

    public function __get($name) {
        if ($this->$name == null) {
            switch ($name) {
                case 'jalurState':
                    $this->jalurState =& $this->stateManager->getJalurState();
                    break;
                case 'jenjangState':
                    $this->jenjangState =& $this->stateManager->getJenjangState();
                    break;
            }
        }
        return $this->$name;
    }

    public function validate() {
        $this->ci->form_validation->set_message('required', '%s harus diisi.');
        $this->ci->form_validation->set_message('numeric', '%s hanya boleh terdiri dari karakter angka.');
        $this->ci->form_validation->set_message('exact_length', '%s harus berisi sebanyak %s digit.');
        $this->ci->form_validation->set_message('valid_date', '%s harus ditulis dengan format tahun-bulan-tanggal (yyyy-mm-dd).');
        $this->ci->form_validation->set_message('less_than_equal_to', '%s maksimal %s.');
        $this->ci->form_validation->set_message('more_than_equal_to', '%s minimal %s.');
        $this->ci->form_validation->set_message('decimal', '%s harus diisi dengan bilangan pecahan desimal dengan pemisah desimal.');
        $validationResult = $this->ci->form_validation->run();
        $this->errors = validation_errors('<div class="notice-text">', '</div>');
        return $validationResult;
    }

    public function view() {
        $this->ci->load->library('template/template');
        $jenjang = $this->__get('jenjangState')->getName();
        $jalur = $this->__get('jalurState')->getName();
        $this->viewData['formAction'] = "pendaftaran/submit";
        $this->viewData['jenjang'] = $jenjang;
        $this->viewData['jalur'] = $jalur;
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
        $this->viewData['jsCodes'] = array('pendaftaran_umum/CloseAndBack');
        $this->viewData['kk'] = $this->ci->session->userdata('kk');
        $this->viewData['sekolah'] = $this->ci->session->userdata('sekolah');

        // set headers to NOT cache a page
        header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
        header("Pragma: no-cache"); //HTTP 1.0
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
    }

    public function submit() {
        // redirect('pendaftaran'.$this->jenjangState->getName().'/view');
        $this->stateManager->getCurrentState()->view();
    }
}

?>
