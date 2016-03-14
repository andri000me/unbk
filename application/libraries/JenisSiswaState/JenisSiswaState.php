<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of JenisSiswaState
 * @property CI_Controller $ci
 * @property StateManager $stateManager
 * @property JenjangState $jenjangState
 *
 * @author m.rap
 */
abstract class JenisSiswaState {
    protected $ci;
    protected $stateManager;

    private $jenjangState;

    public $mainFields = array(
        'nama',
        'tmpt_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'sekolah_asal',
        'tamatan',
        'no_kk',
        'kk',
        'nama_ortu',
        'alamat',
        'telepon',
        'nuBi',
        'nuMat',
        'nuIpa',
        'nuTot',
    );

    public $belumDiketahui;

    public function __construct(&$ci, &$stateManager) {
        $this->ci =& $ci;
        $this->stateManager =& $stateManager;
        $this->belumDiketahui = false;
    }

    public function __get($name) {
        if ($this->$name == null) {
            switch ($name) {
                case 'jenjangState':
                    $this->jenjangState =& $this->stateManager->getJenjangState();
                    break;
            }
        }
        return $this->$name;
    }

    public function isBelumDiketahui() {
        return true;
    }

    public abstract function allInput($name, $value = '');

    public abstract function nilaiInput($name, $value = '');

    public function tglLahirInput($name, $value = '') {
        return $value.' '.form_hidden(array($name => $value));
    }

    public abstract function jenisKelaminDropDown($value = '0');

    public function kkDropDown($value = '0', $attr = '') {
        $options = $this->__get('jenjangState')->getKkDanTamatan();

        $radio = array();
        foreach ($options as $key => $val) {
            $radio[] = form_radio('kk', $key, $value == $key, $attr).' '.$val;
        }

        //return form_dropdown('kk', $options, set_value('kk', $value), $attr);
        return implode(' ', $radio);
    }

    public abstract function tamatanDropDown($value = '0', $attr = '');
    public abstract function nuBigInput($value = '');

    public abstract function wilayahDropDown();
    public abstract function kecamatanDropDown();

    public function subRayonDropDown($wilayah, $value, $attr) {
        $options =
            array('0' => '- Pilih Sub Rayon -') +
            $this->__get('jenjangState')->getSubRayon($wilayah);
        return form_dropdown('subRayon', $options, $value, $attr).' <img src="'.URL_STATIC.'/img/ajax-loader.gif" />';
    }

    private function sekolahDropDownDalamSubRayon($name, $wilayah, $subRayon, &$terpilih, $value = '0', $attr = '') {
        $sudahPilihLuar = $value == '99';
        if (!$sudahPilihLuar && is_array($terpilih)) {
            foreach ($terpilih as $t) {
                if (is_array($t) && array_key_exists('99', $t)) {
                    $sudahPilihLuar = true;
                    break;
                }
            }
        } else {
            $sudahPilihLuar = false;
        }
        $options =
            array('0' => '- Pilih Sekolah -') +
            $this->__get('jenjangState')->getSekolah($wilayah, $subRayon, $terpilih) +
            (($sudahPilihLuar) ? array() : array('99' => 'Luar Sub Rayon'));
        if ($terpilih != null && is_array($terpilih)) {
            foreach ($terpilih as $item) {
                //echo "item $item value $value<br />\r\n";
                if (is_array($item) || $item == $value)
                    continue;
                if (isset($options[$item]))
                    unset($options[$item]);
            }
        }
        //if (!isset($options[$value]))
        //    $options[$value] = $value;

        // hardcode menghapus pilihan sma3 dan sma20 karena pagu rl dan rd sudah habis di jalur kawasan.
        $siswa = $this->ci->session->userdata('siswa');
        if ($siswa['tamatan'] == '1') {
            if ($siswa['kk'] == '1') {
                $siswa['jenisValidasi'] = 'DK';
            } else if ($siswa['kk'] == '2') {
                $siswa['jenisValidasi'] = 'RD';
            }
        } else if ($siswa['tamatan'] == '2') {
            if ($siswa['kk'] == '1') {
                $siswa['jenisValidasi'] = 'MT';
            } else if ($siswa['kk'] == '2') {
                $siswa['jenisValidasi'] = 'RL';
            }
        }
        if ($siswa['jenisValidasi'] == 'RD' || $siswa['jenisValidasi'] == 'RL') {
            if (isset($options['403'])) unset($options['403']);
            if (isset($options['420'])) unset($options['420']);
        }
        // end hardcode menghapus pilihan sma3 dan sma20 karena pagu rl dan rd sudah habis di jalur kawasan.

        return form_dropdown($name, $options, $value, $attr);
    }

    public function sekolahDropDown($wilayah, $subRayon, &$terpilih, $value = '0', $attr = '') {
        $this->ci->load->model('sekolahModel');
        if (is_array($value)) {
            foreach ($value as $key => $val) {
                if ($key != '99')
                    continue;
                $options = $this->__get('jenjangState')->getSekolah($wilayah, $subRayon, $terpilih, $value);
                // hardcode menghapus pilihan sma3 dan sma20 karena pagu rl dan rd sudah habis di jalur kawasan.
                $siswa = $this->ci->session->userdata('siswa');
                if ($siswa['tamatan'] == '1') {
                    if ($siswa['kk'] == '1') {
                        $siswa['jenisValidasi'] = 'DK';
                    } else if ($siswa['kk'] == '2') {
                        $siswa['jenisValidasi'] = 'RD';
                    }
                } else if ($siswa['tamatan'] == '2') {
                    if ($siswa['kk'] == '1') {
                        $siswa['jenisValidasi'] = 'MT';
                    } else if ($siswa['kk'] == '2') {
                        $siswa['jenisValidasi'] = 'RL';
                    }
                }
                if ($siswa['jenisValidasi'] == 'RD' || $siswa['jenisValidasi'] == 'RL') {
                    if (isset($options['403'])) unset($options['403']);
                    if (isset($options['420'])) unset($options['420']);
                }
                // end hardcode menghapus pilihan sma3 dan sma20 karena pagu rl dan rd sudah habis di jalur kawasan.
                return
                    $this->sekolahDropDownDalamSubRayon('pilihan[]', $wilayah, $subRayon, $terpilih, '99', $attr).' '.
                    form_dropdown('pilihanLuar', $options, $val, 'class="form-control"').' <img src="'.URL_STATIC.'/img/ajax-loader.gif" />';
            }
        } else if ($value == '99') {
            $pilihanLuar = $this->ci->input->post('pilihanLuar');
            $options = $this->__get('jenjangState')->getSekolah($wilayah, $subRayon, $terpilih, array('99' => $pilihanLuar));
            // hardcode menghapus pilihan sma3 dan sma20 karena pagu rl dan rd sudah habis di jalur kawasan.
            $siswa = $this->ci->session->userdata('siswa');
            if ($siswa['tamatan'] == '1') {
                if ($siswa['kk'] == '1') {
                    $siswa['jenisValidasi'] = 'DK';
                } else if ($siswa['kk'] == '2') {
                    $siswa['jenisValidasi'] = 'RD';
                }
            } else if ($siswa['tamatan'] == '2') {
                if ($siswa['kk'] == '1') {
                    $siswa['jenisValidasi'] = 'MT';
                } else if ($siswa['kk'] == '2') {
                    $siswa['jenisValidasi'] = 'RL';
                }
            }
            if ($siswa['jenisValidasi'] == 'RD' || $siswa['jenisValidasi'] == 'RL') {
                if (isset($options['403'])) unset($options['403']);
                if (isset($options['420'])) unset($options['420']);
            }
            // end hardcode menghapus pilihan sma3 dan sma20 karena pagu rl dan rd sudah habis di jalur kawasan.
            return
                $this->sekolahDropDownDalamSubRayon('pilihan[]', $wilayah, $subRayon, $terpilih, '99', $attr).' '.
                form_dropdown('pilihanLuar', $options, $pilihanLuar, 'class="form-control"').' <img src="'.URL_STATIC.'/img/ajax-loader.gif" />';
        } else {
            return $this->sekolahDropDownDalamSubRayon('pilihan[]', $wilayah, $subRayon, $terpilih, $value, $attr).' <img src="'.URL_STATIC.'/img/ajax-loader.gif" />';
        }
    }

    public function setSiswa(&$siswa) {
        foreach ($this->mainFields as $field) {
            $siswa[$field] = set_value($field, isset($siswa[$field]) ? $siswa[$field] : '');
        }
        if ($this->belumDiketahui) {
            $siswa['kecamatan'] = set_value('kecamatan', isset($siswa['kecamatan']) ? $siswa['kecamatan'] : '0');
        }
    }

    public function onSubmit(&$siswa) {
        foreach ($this->mainFields as $field) {
            $siswa[$field] = strtoupper($this->ci->input->post($field));
        }
        if ($siswa['tamatan'] == '1') {
            if ($siswa['kk'] == '1') {
                $siswa['jenisValidasi'] = 'DK';
            } else if ($siswa['kk'] == '2') {
                $siswa['jenisValidasi'] = 'RD';
            }
        } else if ($siswa['tamatan'] == '2') {
            if ($siswa['kk'] == '1') {
                $siswa['jenisValidasi'] = 'MT';
            } else if ($siswa['kk'] == '2') {
                $siswa['jenisValidasi'] = 'RL';
            }
        }
    }
}

?>
