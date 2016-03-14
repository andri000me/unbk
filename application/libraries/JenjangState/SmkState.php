<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/JenjangState/JenjangState.php';

/**
 * Description of SmkState
 *
 * @author m.rap
 */
class SmkState extends JenjangState {
    private $jurusan;
    
    public function __construct(&$ci, &$stateManager) {
        parent::__construct($ci, $stateManager);
        $this->name = 'smk';
        $this->prevName = 'smp';
    }
    
    public function subView() {
        return 'smk';
    }
    
    public function setSiswa(&$siswa) {
        if ($this->stateManager->getJenisSiswaState()->belumDiketahui) {
            if (isset($_POST['nuBig_int'])) {
                $_POST['nuBig'] = $_POST['nuBig_int'].'.'.($_POST['nuBig_fract'] != '' ? $_POST['nuBig_fract'] : '0');
            }
        }
        $siswa['nuBig']   = set_value('nuBig', isset($siswa['nuBig']) ? $siswa['nuBig'] : '');
        $siswa['smk']     = set_value('smk', isset($siswa['smk']) ? $siswa['smk'] : '0');
        $siswa['pilihan'] = set_value('pilihan', isset($siswa['pilihan']) ? $siswa['pilihan'] : null);
        $this->cleanPilihan($siswa);
    }
    
    public function onSubmit(&$siswa, &$errors) {
        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        
        $siswa['wilayah'] = $this->ci->input->post('wilayah');
        $siswa['subRayon'] = $this->ci->input->post('subRayon');
        $siswa['smk'] = $this->ci->input->post('smk');
        $siswa['pilihan'] = $this->ci->input->post('pilihan');
        
        $this->ci->load->model('sekolahModel');
        $validJurusan = $this->ci->sekolahModel->getJurusan($siswa['smk']);
        
        $tidakMemilihKeys = array();
        $pilihanIsInvalid = false;
        foreach ($siswa['pilihan'] as $key => $value) {
            if ($value == '0') {
                $tidakMemilihKeys[] = $key;
                continue;
            }
            if (!array_key_exists($value, $validJurusan)) {
                $pilihanIsInvalid = true;
                break;
            }
        }
                
        if ($jenisSiswaState->belumDiketahui) {
            $siswa['nuBi'] = $this->ci->input->post('nuBi');
            $siswa['nuMat'] = $this->ci->input->post('nuMat');
            $siswa['nuIpa'] = $this->ci->input->post('nuIpa');
            $siswa['nuBig'] = $this->ci->input->post('nuBig');
            $nuBi  = floatval($siswa['nuBi']);
            $nuMat = floatval($siswa['nuMat']);
            $nuIpa = floatval($siswa['nuIpa']);
            $nuBig = floatval($siswa['nuBig']);
            $siswa['nuTot'] = $nuBi + $nuMat + $nuIpa + $nuBig;
            //if (
            //        $nuBi  < 7.25 ||
            //        $nuMat < 7.25 ||
            //        $nuIpa < 7.25 ||
            //        $nuBig < 7.25 ||
            //        $siswa['nuTot'] < 32.0
            //) {
            //    $errors .= '<div class="notice-text">Maaf, nilai UN Anda tidak memenuhi persyaratan pendaftaran sekolah kawasan.</div>';
            //    return;
            //}
        }
        
        if ($pilihanIsInvalid) {
            $siswa['pilihan'] = array();
            $errors .= '<div class="notice-text">Pilihan Anda tidak sesuai ketentuan.</div>';
            return false;
        }
        
        foreach ($tidakMemilihKeys as $key) {
            unset($siswa['pilihan'][$key]);
        }
        
        if (count($siswa['pilihan']) == 0) {
            $errors .= '<div class="notice-text">Pilihan harus diisi.</div>';
            return false;
        }
        
        return true;
    }
    
    public function onSekolahChange(&$siswa) {
        $siswa['smk'] = set_value('smk');
        $siswa['pilihan'] = null;
    }
    
    public function onJurusanChange(&$siswa) {
        $siswa['smk'] = set_value('smk');
        $siswa['pilihan'] = set_value('pilihan');
        while (false !== ($key = array_search('0', $siswa['pilihan']))) {
            unset($siswa['pilihan'][$key]);
        }
        while (false !== ($key = array_search('99', $siswa['pilihan']))) {
            $siswa['pilihan'][$key] = array('99' => set_value('pilihanLuar'));
        }
    }
    
    public function &getJurusan($smk) {
        if ($this->jurusan == null) {
            $this->ci->load->model('sekolahModel');
            $this->jurusan = $this->ci->sekolahModel->getJurusan($smk);
            //$this->jurusan = array_combine($this->jurusan, $this->jurusan);
        }
        return $this->jurusan;
    }
    
    public function smkDropDown($value = '0', $attr = '') {
        $this->ci->load->model('sekolahModel');
        $options = 
            array('0' => '- Pilih SMK -') +
            $this->smk = $this->ci->sekolahModel->getSmk();
        return form_dropdown('smk', $options, $value, $attr).' <img src="'.URL_STATIC.'/img/ajax-loader.gif" />';
    }
    
    public function jurusanDropDown($smk, &$terpilih, $value = '0', $attr = '') {
        $options =
            array('0' => '- Pilih Jurusan -') +
            $this->getJurusan($smk);
        if ($terpilih != null && is_array($terpilih)) {
            foreach ($terpilih as $item) {
                //echo "item $item value $value<br />\r\n";
                if (is_array($item) || $item == $value)
                    continue;
                if (isset($options[$item]))
                    unset($options[$item]);
            }
        }
        return form_dropdown('pilihan[]', $options, $value, $attr).' <img src="'.URL_STATIC.'/img/ajax-loader.gif" />';
    }
    
    public function konfirmasiView(&$viewData, &$siswa) {
        $kkDanTamatan =& $this->getKkDanTamatan();
        $viewData['tamatan']      = $kkDanTamatan[$siswa['tamatan']];
        //$viewData['kk']           = $kkDanTamatan[$siswa['kk']];
    }
}

?>
