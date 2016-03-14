<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/JenisSiswaState/JenisSiswaState.php';

/**
 * Description of TamatanBelumDiketahuiState
 *
 * @author m.rap
 */
class TamatanBelumDiketahuiState extends JenisSiswaState {

    public function __construct(&$ci, &$stateManager) {
        parent::__construct($ci, $stateManager);
        $this->belumDiketahui = true;
    }

    public function allInput($name, $value = '', $textArea = false) {
        return
        (($textArea) ?
        form_textarea(array(
            'name' => $name,
            'value' => $value,
            'rows' => '2',
            'cols' => '30',
            'class' => 'form-control'
        )) :
        form_input(array(
            'name' => $name,
            'value' => $value,
            'class' => 'form-control input-daftar'
        ))).((array_key_exists($name, $this->jenjangState->contoh)) ? ' Contoh: '.$this->jenjangState->contoh[$name] : '');
    }

    public function nilaiInput($name, $value = '') {
        $int = intval($value);
        if (($pos = strpos($value, '.')) !== false) {
            $fract = substr($value, $pos + 1);
        } else {
            $fract = '0';
        }
        return form_input(array(
            'name' => $name.'_int',
            'value' => $int,
            'size' => '2',
            'maxlength' => '3',
            'class' => 'nilai-un'
        )).','.form_input(array(
            'name' => $name.'_fract',
            'value' => $fract,
            'size' => '2',
            'maxlength' => '2',
            'class' => 'nilai-un'
        )).((array_key_exists($name, $this->jenjangState->contoh)) ? '<br />Contoh: '.$this->jenjangState->contoh[$name] : '');
    }

    public function jenisKelaminDropDown($value = '0') {
        $options = array(
            'L' => 'Laki-laki',
            'P' => 'Perempuan'
        );
        $radio = array();
        foreach ($options as $key => $val) {
            $radio[] = form_radio('jenis_kelamin', $key, $value == $key).' '.$val;
        }
        //return form_dropdown('jenis_kelamin', $options, $value);
        return implode(' ', $radio);
    }

    public function tamatanInput($sekolahAsal = '', $tamatan = '0', $attr = '') {
        return form_input(array(
            'name' => 'sekolah_asal',
            'value' => $sekolahAsal,
            'class' => 'form-control input-daftar'
        )).' '.$this->tamatanDropDown($tamatan, $attr).'Contoh: '.$this->jenjangState->contoh['sekolah_asal'];
    }

    public function tamatanDropDown($value = '0', $attr = '') {
        $options = $this->jenjangState->getKkDanTamatan();

        $radio = array();
        $attr = $attr . "style = 'display: none;'";
        foreach ($options as $key => $val) {
            // $radio[] = form_radio('tamatan', $key, $value == $key, $attr).' '.$val;
            $radio[] = form_radio('tamatan', $key, $value == $key, $attr);
        }
        //return form_dropdown('tamatan', $options, set_value('tamatan', $value), $attr);
        return implode(' ', $radio);
    }

    public function nuBigInput($value = '') {

    }

    public function kecamatanDropDown($value = '0', $attr = '') {
        $options =
            array('0' => '- Pilih Kecamatan -') +
            $this->jenjangState->getKecamatan();
        return form_dropdown('kecamatan', $options, $value, $attr).' <img src="'.URL_STATIC.'/img/ajax-loader.gif" />';
    }

    public function wilayahByKecamatan($value = '0', $attr = '', $current_wilayah) {
        $wilayah = $this->jenjangState->getWilayahByKecamatan($value);
        return $wilayah[$current_wilayah].' '.form_hidden(array('wilayah' => $current_wilayah));
    }

    public function wilayahDropDown($value = '0', $attr = '') {
        $options =
            array('0' => '- Pilih Wilayah -') +
            $this->jenjangState->getWilayah();
        return form_dropdown('wilayah', $options, $value, $attr).' <img src="'.URL_STATIC.'/img/ajax-loader.gif" />';
    }

    public function setSiswa(&$siswa) {
        if (isset($_POST['nuBi_int'])) {
            $_POST['nuBi'] = $_POST['nuBi_int'].'.'.($_POST['nuBi_fract'] != '' ? $_POST['nuBi_fract'] : '0');
            $_POST['nuMat'] = $_POST['nuMat_int'].'.'.($_POST['nuMat_fract'] != '' ? $_POST['nuMat_fract'] : '0');
            $_POST['nuIpa'] = $_POST['nuIpa_int'].'.'.($_POST['nuIpa_fract'] != '' ? $_POST['nuIpa_fract'] : '0');
        }
        parent::setSiswa($siswa);
    }
}

?>
