<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/JenjangState/JenjangState.php';

/**
 * Description of SmaState
 *
 * @author m.rap
 */
class SmaState extends JenjangState {
    public function __construct(&$ci, &$stateManager) {
        parent::__construct($ci, $stateManager);
        $this->name = 'sma';
        $this->prevName = 'smp';
    }

    public function setSiswa(&$siswa) {
        if ($this->stateManager->getJenisSiswaState()->belumDiketahui) {
            if (isset($_POST['nuBig_int'])) {
                $_POST['nuBig'] = $_POST['nuBig_int'].'.'.($_POST['nuBig_fract'] != '' ? $_POST['nuBig_fract'] : '0');
            }
        }
        $siswa['nuBig'] = set_value('nuBig', isset($siswa['nuBig']) ? $siswa['nuBig'] : '');
        parent::setSiswa($siswa);
    }

    public function onSubmit(&$siswa, &$errors) {
        $parentSubmit = parent::onSubmit($siswa, $errors);
        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        if ($jenisSiswaState->belumDiketahui) {
            $jalur =& $this->stateManager->getJalurState()->getName();
            $siswa['nuBi'] = $this->ci->input->post('nuBi');
            $siswa['nuMat'] = $this->ci->input->post('nuMat');
            $siswa['nuIpa'] = $this->ci->input->post('nuIpa');
            $siswa['nuBig'] = $this->ci->input->post('nuBig');
            $nuBi  = floatval($siswa['nuBi']);
            $nuMat = floatval($siswa['nuMat']);
            $nuIpa = floatval($siswa['nuIpa']);
            $nuBig = floatval($siswa['nuBig']);
            $siswa['nuTot'] = $nuBi + $nuMat + $nuIpa + $nuBig;
            if ($jalur == 'kawasan') {
                if (
                        // $nuBi  < 70.0 ||
                        // $nuMat < 70.0 ||
                        // $nuIpa < 70.0 ||
                        // $nuBig < 70.0 ||
                        $siswa['nuTot'] < 320.0
                ) {
                    $errors .= '<div class="notice-text">Maaf, batas minimal total UN 320,00 untuk PPDB Jalur Sekolah Kawasan tingkat SMA.</div>';
                    return false;
                }
            }
        }
        if (!$parentSubmit)
            return false;
        return true;
    }
}

?>
