<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of JenjangState
 * @property CI_Controller $ci
 * @property StateManager $stateManager
 * @property JalurState $jalurState
 *
 * @author m.rap
 */
abstract class JenjangState {
    protected $ci;
    protected $stateManager;

    private $jalurState;

    protected $name;
    protected $prevName;

    protected $kkDanTamatan;
    protected $kecamatan;
    protected $wilayah;
    protected $subRayon;
    protected $sekolah;
    protected $sekolahLuar;

    public $contoh = array(
        'nama' => 'ARYA DARRAS SINAGA',
        'tmpt_lahir' => 'MEDAN',
        'tgl_lahir' => '1998-08-11',
        'sekolah_asal' => 'SMP NEGERI 1001 MALAM',
        'nama_ortu' => 'REINALDY HANIFUDIN',
        'alamat' => 'JL. GURAME ASEM MANIS XII NO 23, MALANG',
        'nuBi' => '75,0',
        'nuMat' => '75,0',
        'nuIpa' => '75,0',
        'nuBig' => '75,0',
        'nuTot' => '75,0'
    );

    /**
     *
     * @param CI_Controller $ci
     * @param StateManager $stateManager
     */
    public function __construct(&$ci, &$stateManager) {
        $this->ci =& $ci;
        $this->stateManager =& $stateManager;
    }

    public function __get($name) {
        if ($this->$name == null) {
            switch ($name) {
                case 'jalurState':
                    $this->jalurState =& $this->stateManager->getJalurState();
                    break;
            }
        }
        return $this->$name;
    }

    public function &getName() {
        return $this->name;
    }

    public function &getPrevName() {
        return $this->prevName;
    }

    public function &getKkDanTamatan() {
        if ($this->kkDanTamatan == null) {
            $this->kkDanTamatan = array(
                '1' => 'Dalam Kota Surabaya',
                '2' => 'Luar Kota Surabaya'
            );
        }
        return $this->kkDanTamatan;
    }

    public function &getKecamatan() {
        if ($this->kecamatan == null) {
            $this->ci->load->model('kecamatanModel');
            $this->kecamatan = $this->ci->kecamatanModel->getKecamatan($this->__get('jalurState')->getName(), $this->name);
        }
        return $this->kecamatan;
    }

    public function &getWilayahByKecamatan($id_kecamatan) {
        if ($this->wilayah == null) {
            $this->ci->load->model('kecamatanModel');
            $this->wilayah = $this->ci->kecamatanModel->getWilayahByKecamatan($id_kecamatan, $this->__get('jalurState')->getName(), $this->name);
        }
        return $this->wilayah;
    }

    public function &getWilayah() {
        if ($this->wilayah == null) {
            $this->ci->load->model('sekolahModel');
            $this->wilayah = $this->ci->sekolahModel->getWilayah($this->__get('jalurState')->getName(), $this->name);
        }
        return $this->wilayah;
    }

    public function &getSubRayon($wilayah) {
        if ($this->subRayon == null) {
            $this->ci->load->model('sekolahModel');
            $this->subRayon = $this->ci->sekolahModel->getSubRayon($this->__get('jalurState')->getName(), $this->name, $wilayah);
        }
        return $this->subRayon;
    }

    public function &getSekolah($wilayah, $subRayon, &$terpilih, $value = '0') {
        $this->ci->load->model('sekolahModel');
        if (is_array($value) && array_key_exists('99', $value)) {
            if ($this->sekolahLuar == null) {
                $this->sekolahLuar = array();
                $subRayonLuar =& $this->getSubRayon($wilayah);
                foreach ($subRayonLuar as $ksr => $sr) {
                    if ($ksr == $subRayon)
                        continue;
                    $sekolahTemp = $this->ci->sekolahModel->getSekolah($this->__get('jalurState')->getName(), $this->name, $wilayah, $ksr);
                    $this->sekolahLuar += $sekolahTemp;
                }
                $wilayahLuar = $this->ci->sekolahModel->getWilayah($this->__get('jalurState')->getName(), $this->name);
                foreach ($wilayahLuar as $kwl =>$wl) {
                    if ($kwl == $wilayah)
                        continue;
                    $subRayonLuar = $this->ci->sekolahModel->getSubRayon($this->__get('jalurState')->getName(), $this->name, $kwl);
                    foreach ($subRayonLuar as $ksr => $sr) {
                        if ($ksr == $subRayon)
                            continue;
                        $sekolahTemp = $this->ci->sekolahModel->getSekolah($this->__get('jalurState')->getName(), $this->name, $kwl, $ksr);
                        $this->sekolahLuar += $sekolahTemp;
                    }
                }
                /*
                $this->sekolahLuar = array_combine($this->sekolahLuar, $this->sekolahLuar);
                if ($terpilih != null && is_array($terpilih)) {
                    foreach ($terpilih as $item) {
                        if (is_array($item) && array_key_exists('99', $item)) {
                            if (isset($this->sekolah[$item['99']]))
                                unset($this->sekolah[$item['99']]);
                            continue;
                        }
                        if (isset($this->sekolah[$item]))
                            unset($this->sekolah[$item]);
                    }
                }
                 */
            }
            return $this->sekolahLuar;
        } else {
            if ($this->sekolah == null) {
                $this->sekolah = $this->ci->sekolahModel->getSekolah($this->__get('jalurState')->getName(), $this->name, $wilayah, $subRayon);
                /*
                $this->sekolah = array_combine($this->sekolah, $this->sekolah);
                if ($terpilih != null && is_array($terpilih)) {
                    foreach ($terpilih as $item) {
                        if (!is_string($item) && !is_int($item))
                            continue;
                        if (array_key_exists($item, $this->sekolah))
                            unset($this->sekolah[$item]);
                    }
                }
                 */
            }
            return $this->sekolah;
        }
    }

    public function subView() {
        return 'nonsmk';
    }

    public function cleanPilihan(&$siswa) {
        if ($siswa['pilihan'] != null) {
            if (is_array($siswa['pilihan'])) {
                $tidakMemilihKeys = array();
                foreach ($siswa['pilihan'] as $k => $v) {
                    if ($v == '0') {
                        $tidakMemilihKeys[] = $k;
                    }
                }
                foreach ($tidakMemilihKeys as $item) {
                    unset($siswa['pilihan'][$item]);
                }
            } else {
                $siswa['pilihan'] = null;
            }
        }
    }

    public function setSiswa(&$siswa) {
        $siswa['kecamatan'] = set_value('kecamatan', isset($siswa['kecamatan']) ? $siswa['kecamatan'] : '0');
        $siswa['wilayah']   = set_value('wilayah', isset($siswa['wilayah']) ? $siswa['wilayah'] : '0');
        $siswa['subRayon']  = set_value('subRayon', isset($siswa['subRayon']) ? $siswa['subRayon'] : '0');
        $siswa['pilihan']   = set_value('pilihan', isset($siswa['pilihan']) ? $siswa['pilihan'] : null);
        $this->cleanPilihan($siswa);
    }

    public function onSubmit(&$siswa, &$errors) {
        if ($this->ci->input->post('kecamatan')) {
            $siswa['kecamatan'] = $this->ci->input->post('kecamatan');
        }
        $siswa['wilayah'] = $this->ci->input->post('wilayah');
        $siswa['subRayon'] = $this->ci->input->post('subRayon');
        $siswa['pilihan'] = $this->ci->input->post('pilihan');

        if (!$siswa['pilihan'] || !is_array($siswa['pilihan'])) {
            $siswa['pilihan'] = array();
        }

        $this->ci->load->model('sekolahModel');
        $jalurState = $this->stateManager->getJalurState();
        $validSekolah = $this->ci->sekolahModel->getSekolah($jalurState->getName(), $this->name, $siswa['wilayah'], $siswa['subRayon']);

        $tidakMemilihKeys = array();
        $pilihanLuarCount = 0;
        $pilihanIsInvalid = false;
        foreach ($siswa['pilihan'] as $key => $value) {
            if ($value == '0') {
                $tidakMemilihKeys[] = $key;
                continue;
            }
            if ($value == '99') {
                $pilihanLuar = $this->ci->input->post('pilihanLuar');
                if (!$pilihanLuar) {
                    $tidakMemilihKeys[] = $key;
                    continue;
                }
                if (array_key_exists($pilihanLuar, $validSekolah)) {
                    $pilihanIsInvalid = true;
                    break;
                }
                $validLuar = $this->ci->sekolahModel->getNamaPilihan($this->name, array($pilihanLuar));
                if (!isset($validLuar[$pilihanLuar])) {
                    $pilihanIsInvalid = true;
                    break;
                }
                $siswa['pilihan'][$key] = array('99' => $this->ci->input->post('pilihanLuar'));
                $pilihanLuarCount++;
                if ($pilihanLuarCount > 1) {
                    $pilihanIsInvalid = true;
                    break;
                }
                continue;
            }
            if (!array_key_exists($value, $validSekolah)) {
                $pilihanIsInvalid = true;
                break;
            }
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
        if (isset($siswa['kecamatan'])) {
            $siswa['kecamatan'] = set_value('kecamatan');
        }
        $siswa['wilayah'] = set_value('wilayah');
        $siswa['subRayon'] = set_value('subRayon');
        $siswa['pilihan'] = set_value('pilihan');
        while (false !== ($key = array_search('0', $siswa['pilihan']))) {
            unset($siswa['pilihan'][$key]);
        }
        while (false !== ($key = array_search('99', $siswa['pilihan']))) {
            $siswa['pilihan'][$key] = array('99' => set_value('pilihanLuar'));
        }
    }

    public function onJurusanChange() {
    }

    public function &getJurusan() {
    }

    public function smkDropDown() {
    }

    public function jurusanDropDown() {
    }

    public function konfirmasiView(&$viewData, &$siswa) {
        $kkDanTamatan =& $this->getKkDanTamatan();
        $wilayah =& $this->getWilayah();
        $subRayon =& $this->getSubRayon($siswa['wilayah']);
        $viewData['tamatan']      = $kkDanTamatan[$siswa['tamatan']];
        //$viewData['kk']           = $kkDanTamatan[$siswa['kk']];
        $viewData['wilayah']      = $wilayah[$siswa['wilayah']];
        $viewData['subRayon']     = $subRayon[$siswa['subRayon']];
    }
}

?>
