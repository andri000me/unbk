<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/JenisSiswaState/JenisSiswaState.php';

/**
 * Description of TamatanDalamKotaState
 *
 * @author m.rap
 */
class TamatanDalamKotaState extends JenisSiswaState {
    
    public $mainFields = array(
        'no_kk',
        'kk',
        'telepon',
    );
    
    public function __construct(&$ci, &$stateManager) {
        parent::__construct($ci, $stateManager);
    }
    
    public function isBelumDiketahui() {
        return false;
    }


    public function allInput($name, $value = '') {
        return $value;//.' '.form_hidden(array($name => $value));
    }
    
    public function nilaiInput($name, $value = '') {
        return $this->allInput($name, $value);
    }

    public function jenisKelaminDropDown($value = '0') {
        return (($value == 'L') ? 'LAKI-LAKI' : (($value == 'P') ? 'PEREMPUAN' : '')).' '.form_hidden(array('jenis_kelamin' => $value));
    }
    
    public function tamatanInput($sekolahAsal = '', $tamatan = '0', $attr = '') {
        return $sekolahAsal.' '.form_hidden(array('sekolah_asal' => $sekolahAsal)).' '.form_hidden(array('tamatan' => '1'));
    }

    public function tamatanDropDown($value = '0', $attr = '') {
        return 'Dalam Kota Surabaya'.' '.form_hidden(array('tamatan' => '1'));
    }

    public function nuBigInput($value = '') {
        
    }

    public function kecamatanDropDown() {
        
    }

    public function wilayahDropDown($value = '1') {
        $this->ci->load->model('sekolahModel');
        $options = $this->ci->sekolahModel->getWilayah('umum', $this->stateManager->getJenjangState()->getName());
        return $options[$value].' '.form_hidden(array('wilayah' => $value));
    }
    
    public function onSubmit(&$siswa) {
        $siswa['no_kk'] = $this->ci->input->post('no_kk');
        $siswa['kk'] = $this->ci->input->post('kk');
        $siswa['jenisValidasi'] = ($siswa['kk'] == '1') ? 'DK' : 'RD';
        $siswa['telepon'] = $this->ci->input->post('telepon');
        $siswa['tamatan'] = '1';
    }
}

?>
