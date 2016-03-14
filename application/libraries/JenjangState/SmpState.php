<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/JenjangState/JenjangState.php';

/**
 * Description of SmpState
 *
 * @author m.rap
 */
class SmpState extends JenjangState {
    public function __construct(&$ci, &$stateManager) {
        parent::__construct($ci, $stateManager);
        $this->name = 'smp';
        $this->prevName = 'sd';
        $this->contoh['tgl_lahir'] = '2001-08-11';
        $this->contoh['sekolah_asal'] = 'SD NEGERI 1001 MALAM';
    }

    public function onSubmit(&$siswa, &$errors) {
        $parentSubmit = parent::onSubmit($siswa, $errors);
        $jenisSiswaState =& $this->stateManager->getJenisSiswaState();
        if ($jenisSiswaState->belumDiketahui) {
            $jalur =& $this->stateManager->getJalurState()->getName();
            $siswa['nuBi'] = $this->ci->input->post('nuBi');
            $siswa['nuMat'] = $this->ci->input->post('nuMat');
            $siswa['nuIpa'] = $this->ci->input->post('nuIpa');
            $nuBi  = floatval($siswa['nuBi']);
            $nuMat = floatval($siswa['nuMat']);
            $nuIpa = floatval($siswa['nuIpa']);
            $siswa['nuTot'] = $nuBi + $nuMat + $nuIpa;
            if ($jalur == 'kawasan') {
                if (
                        // $nuBi  < 75.0 ||
                        // $nuMat < 75.0 ||
                        // $nuIpa < 75.0 ||
                        $siswa['nuTot'] < 255.0
                ) {
                    $errors .= '<div class="notice-text">Maaf, batas minimal total UN 255,00 untuk PPDB Jalur Sekolah Kawasan tingkat SMP.</div>';
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
