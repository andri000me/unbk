<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiswaModel extends CI_Model {
    private $db;
    public function __construct() {
        parent::__construct();
        $timezone = "Asia/Jakarta";
        if (function_exists('date_default_timezone_set')) date_default_timezone_set ($timezone);
        $this->db = $this->load->database('default', true);
    }

    public function getSiswa(&$siswa = array(), $jenjang = 'smp', $noUn = '', $jalur = 'umum') {
        $query = $this->db->get_where('data_siswa_'.$jenjang, array($jenjang.'_uasbn' => $noUn));
        if ($query->num_rows() > 0)
            $siswaDb = $query->row();
        else
            return null;

        $id = $jenjang.'_id';
        $statusPendaftaran = $jenjang.'_pendaftaran_'.$jalur;
        $statusDiterima = $jenjang.'_status_diterima';
        $statusJapres = $jenjang.'_status_japres';
        $pin = $jenjang.'_pin';
        $siswa['id'] = $siswaDb->$id;
        $siswa['statusPendaftaran'] = $siswaDb->$statusPendaftaran;
        $siswa['statusDiterima'] = $siswaDb->$statusDiterima;
        $siswa['statusJapres'] = $siswaDb->$statusJapres;
        $siswa['pin'] = $siswaDb->$pin;

        if ($siswaDb->$statusPendaftaran != false || $siswaDb->$statusDiterima != false) {
            $this->getSiswaFromInput($siswa, $jenjang, $noUn, $jalur);
            return;
        }

        $tglLahir = $jenjang.'_tanggal_lahir';
        $jenisKelamin = $jenjang.'_jenis_kelamin';
        $namaOrtu = $jenjang.'_nama_orang_tua';
        $alamat = $jenjang.'_alamat_siswa';
        $tmptLahir = $jenjang.'_tempat_lahir';
        $nama = $jenjang.'_nama_siswa';
        $sekolahAsal = $jenjang.'_asal_sekolah';
        $nuBi = $jenjang.'_nu_bind';
        $nuMat = $jenjang.'_nu_mat';
        $nuIpa = $jenjang.'_nu_ipa';
        if ($jenjang == 'smp') {
            $nuBing = $jenjang.'_nu_bing';
        }
        $nuTot = $jenjang.'_nu_total';
        $wilayah = $jenjang.'_wilayah';

        $siswa['tgl_lahir'] = $siswaDb->$tglLahir;
        $siswa['jenis_kelamin'] = $siswaDb->$jenisKelamin;
        $siswa['nama_ortu'] = $siswaDb->$namaOrtu;
        $siswa['alamat'] = $siswaDb->$alamat;
        $siswa['telepon'] = '';
        $siswa['tmpt_lahir'] = $siswaDb->$tmptLahir;
        $siswa['nama'] = $siswaDb->$nama;
        $siswa['sekolah_asal'] = $siswaDb->$sekolahAsal;
        $siswa['nuBi'] = $siswaDb->$nuBi;
        $siswa['nuMat'] = $siswaDb->$nuMat;
        $siswa['nuIpa'] = $siswaDb->$nuIpa;
        if ($jenjang == 'smp') {
            $siswa['nuBig'] = $siswaDb->$nuBing;
        }
        $siswa['nuTot'] = $siswaDb->$nuTot;
        $siswa['wilayah'] = $siswaDb->$wilayah;
    }

    public function getSiswaFromInput(&$siswa, $jenjang, $noUn, $jalur = 'umum') {
        $tableName = '';
        if ($jalur == 'umum') {
            if ($jenjang == 'sd') {
                $tableName = 'input_smp_umum';
            } else {
                $tableName = 'input_sma_umum';
            }
        } else {
            if ($jenjang == 'sd') {
                $tableName = 'input_smp_kawasan';
            } else {
                $tableName = 'input_sma_kawasan';
            }
        }
        $query = $this->db->get_where($tableName, array('input_uasbn' => $noUn));
        if ($query->num_rows() > 0)
            $siswaDb = $query->row();
        else {
            $tableName = 'input_smk_umum';
            $query = $this->db->get_where($tableName, array('input_uasbn' => $noUn));
            if ($query->num_rows() > 0)
                $siswaDb = $query->row();
            else
                return null;
        }
        $tglLahir = 'input_tanggal_lahir';
        $jenisKelamin = 'input_jenis_kelamin';
        $namaOrtu = 'input_nama_ortu';
        $alamat = 'input_alamat_siswa';
        $telepon = 'input_telepon';
        $tmptLahir = 'input_tempat_lahir';
        $nama = 'input_nama_siswa';
        $sekolahAsal = 'input_asal_sekolah';
        $nuBi = 'input_nilai_bind';
        $nuMat = 'input_nilai_mat';
        $nuIpa = 'input_nilai_ipa';
        $validator = 'input_validator';
        $statusValid = 'input_status_validasi';

        if ($jenjang == 'smp') {
            $nuBing = 'input_nilai_bing';
        }
        $nuTot = 'input_nilai_uan';
        $wilayah = 'input_wilayah';
        $datastamp = 'input_datastamp';

        $siswa['tgl_lahir'] = $siswaDb->$tglLahir;
        $siswa['jenis_kelamin'] = $siswaDb->$jenisKelamin;
        $siswa['nama_ortu'] = $siswaDb->$namaOrtu;
        $siswa['alamat'] = $siswaDb->$alamat;
        $siswa['telepon'] = $siswaDb->$telepon;
        $siswa['tmpt_lahir'] = $siswaDb->$tmptLahir;
        $siswa['nama'] = $siswaDb->$nama;
        $siswa['sekolah_asal'] = $siswaDb->$sekolahAsal;
        $siswa['nuBi'] = $siswaDb->$nuBi;
        $siswa['nuMat'] = $siswaDb->$nuMat;
        $siswa['nuIpa'] = $siswaDb->$nuIpa;
        if ($jenjang == 'smp') {
            $siswa['nuBig'] = $siswaDb->$nuBing;
        }
        $siswa['nuTot'] = $siswaDb->$nuTot;
        $siswa['wilayah'] = $siswaDb->$wilayah;
        $siswa['no_kk'] = $siswaDb->input_no_kk;
        $siswa['kk'] = $siswaDb->input_status_kk == 'DK' ? '1' : '2';
        $siswa['tamatan'] = $siswaDb->input_status_tamatan == 'DK' ? '1' : '2';
        $siswa['subRayon'] = $siswaDb->input_subrayon;
        $siswa['ip'] = $siswaDb->input_ip;
        $siswa['timestamp'] = $siswaDb->input_timestamp;
        $siswa['datastamp'] = $siswaDb->$datastamp;
        $siswa['pilihan'] = array();
        for ($i = 1; $i <= 2; $i++) {
            $pilihanField = 'input_pilihan'.$i;
            if ($siswaDb->$pilihanField != false) {
                $siswa['pilihan'][] = $siswaDb->$pilihanField;
            }
        }
        $siswa['validator'] = $siswaDb->$validator;
        $siswa['statusValidasi'] = $siswaDb->$statusValid;
        if($jalur=='kawasan'){
            $idUjian = 'input_no_ujian';
            $this->getLokasiUjian($siswaDb->$idUjian, $siswa);
        }
    }

    public function getLokasiUjian($idUjian, &$siswa){
        $blade = $this->load->database('blade_sd', true);
        $blade->select('*')->from('no_ujian')
                 ->join('lokasi_tpa', 'no_ujian.lokasi_tpa = lokasi_tpa.id_lokasi');
        $blade->where('id_ujian', $idUjian);
        $query = $blade->get();
         if ($query->num_rows() > 0) {
            $ujianDb = $query->row();
            $siswa['nomorTes'] = $ujianDb->no_ujian;
            $siswa['lokasiTes'] = $ujianDb->nama_lokasi;
            $siswa['alamatTes'] = $ujianDb->alamat_lokasi;
            $siswa['ruangTes'] = $ujianDb->no_ruang;
            $siswa['bangkuTes'] = $ujianDb->no_kursi;
         }
    }

    public function simpan($jalur, $jenjang, &$siswa) {
        $prevJenjang = '';
        if ($jenjang == 'smp')
            $prevJenjang = 'sd';
        else
            $prevJenjang = 'smp';

        $statusPendaftaran = $prevJenjang.'_pendaftaran_'.$jalur;
        $statusDiterima = $prevJenjang.'_status_diterima';
        $this->db->select($statusPendaftaran.', '.$statusDiterima);
        $query = $this->db->get_where('data_siswa_'.$prevJenjang, array($prevJenjang.'_uasbn' => $siswa['no_un']));
        if ($query->num_rows() > 0) {
            $siswaDb = $query->row();
            $siswa['statusPendaftaran'] = $siswaDb->$statusPendaftaran;
            $siswa['statusDiterima'] = $siswaDb->$statusDiterima;
            if ($siswaDb->$statusPendaftaran != false || $siswaDb->$statusDiterima != false) {
                $this->getSiswaFromInput($siswa, $jenjang, $siswa['no_un'], $jalur);
                return;
            }
        }

        $data = array(
            'input_uasbn' => $siswa['no_un'],
            'input_tanggal_lahir' => $siswa['tgl_lahir'],
            'input_jenis_kelamin' => $siswa['jenis_kelamin'],
            'input_nama_ortu' => $siswa['nama_ortu'],
            'input_alamat_siswa' => $siswa['alamat'],
            'input_telepon' => $siswa['telepon'],
            'input_tempat_lahir' => $siswa['tmpt_lahir'],
            'input_nama_siswa' => $siswa['nama'],
            'input_asal_sekolah' => $siswa['sekolah_asal'] ,
            'input_nilai_bind' => $siswa['nuBi'],
            'input_nilai_mat' => $siswa['nuMat'],
            'input_nilai_ipa' => $siswa['nuIpa'],
            'input_nilai_uan' => $siswa['nuTot'],
            'input_wilayah' => $siswa['wilayah'],
            'input_subrayon' => $siswa['subRayon'],
            'input_no_kk' => $siswa['no_kk'],
            'input_status_kk' => ($siswa['kk'] == '1') ? 'DK' : 'LK',
            'input_status_tamatan' => ($siswa['tamatan'] == '1') ? 'DK' : 'LK',
            'input_jenis_validasi' => $siswa['jenisValidasi'],
            'input_ip' => $siswa['ip'],
            'input_browser' => $siswa['browser'],
            'input_timestamp' => $siswa['timestamp'],
            'input_status_validasi' => $siswa['statusValidasi']
        );
        $idField = 'input_'.$prevJenjang.'_id';

        $inputFormula =
                sprintf("%04d", intval($siswa['nuTot'])).
                sprintf("%04d", intval($siswa['nuBi'])).
                sprintf("%04d", intval($siswa['nuMat']));

        if ($jenjang != 'smp') {
            $data['input_nilai_bing'] = $siswa['nuBig'];
            $inputFormula .= sprintf("%04d", intval($siswa['nuIpa']));
        }
        $data['input_formula'] = $inputFormula.'0000000';

        $datastamp =
                $jalur.'|'.
                $jenjang.'|'.
                $siswa['no_un'].'|'.
                $inputFormula;

        $i = 1;
        foreach ($siswa['pilihan'] as $pilihan) {
            if (is_array($pilihan)) {
                $data['input_pilihan'.$i] = $pilihan['99'];
            } else {
                $data['input_pilihan'.$i] = $pilihan;
            }
            $datastamp .= ('|'.$data['input_pilihan'.$i]);
            $i++;
        }

        $data['input_datastamp'] = $datastamp;
        $siswa['datastamp'] = $datastamp;

        $blade = $this->load->database('blade_'.$prevJenjang, true);
        $blade->insert('input_'.$jenjang.'_'.$jalur, $data);

        $data = array();
        $master = 'data_siswa_'.$prevJenjang;
        if ($jenjang == 'smp') {
            $data[$prevJenjang.'_pendaftaran_'.$jalur] = $jalur == 'umum' ? 'P' : '1';
        } else {
            if ($jenjang == 'smk') {
                $data[$prevJenjang.'_pendaftaran_'.$jalur] = $jalur == 'umum' ? 'K' : '1';
            } else {
                $data[$prevJenjang.'_pendaftaran_'.$jalur] = $jalur == 'umum' ? 'A' : '1';
            }
        }

        $idField = $prevJenjang.'_id';

        if (!$siswa['insertMaster']) {
            $blade->where($idField, $siswa['id']);
            $blade->update($master, $data);
        } else {
            $data[$prevJenjang.'_uasbn'] = $siswa['no_un'];
            $blade->insert($master, $data);
        }
        if($jalur=='kawasan'){
            $idUjian = $this->getIdUjian($jenjang, $siswa['no_un']);
            $this->getLokasiUjian($idUjian, $siswa);
        }
    }

    /*najib : fungsi rekap*/
    function rekapDaftar($jalur, $jenjang, $perPage, $uri, $noUn){
        $this->db->select('*');
        $this->db->from('input_'.$jenjang.'_'.$jalur);
        $where = array('input_status_validasi' => 1);
        if(!empty($noUn)) {
            $where = array('input_uasbn' => $noUn);
        }
        $this->db->where($where);
        $this->db->order_by('input_timestamp','desc');

        $getData = $this->db->get('', $perPage, $uri);

        if($getData->num_rows() > 0)
            return $getData->result_array();
        else
            return null;
    }

    /*najib : fungsi getSiswaSimpel */
    function getSiswaByUn($jenjang, $noUn){
        $query = $this->db->get_where("data_siswa_".$jenjang, array($jenjang.'_uasbn' => $noUn));
        if ($query->num_rows() > 0)
            return $query->result_array();
        else return null;
    }

    function getIdUjian($jenjang, $noUn){
        $blade = $this->load->database('blade_sd', true);
        $noUjian = 'input_no_ujian';
        $blade->select($noUjian);
        $query = $blade->get_where("input_".$jenjang."_kawasan", array('input_uasbn' => $noUn));
        if ($query->num_rows() > 0){
            $res = $query->row();
            return $res->$noUjian;
        }

        else return null;
    }

    function pengumumanMitrawarga($kodeSekolah){
        $idPilihan = $this->getIdSekolahByKode($kodeSekolah);
        $this->db->select('*');
        $this->db->from('input_mitra_warga');
        if(count($idPilihan)>0) {
            $this->db->where_in('input_pilihan1', $idPilihan);
            $this->db->where('input_status_validasi', 1);
            $this->db->order_by('input_pilihan1','desc');
            $this->db->order_by('input_nilai_uan','desc');
            $this->db->order_by('input_nilai_bind','desc');
            $this->db->order_by('input_nilai_mat','desc');
            $this->db->order_by('input_nilai_ipa','desc');
            $this->db->order_by('input_nilai_bing','desc');
            $this->db->order_by('input_timestamp','asc');
            $getData = $this->db->get();

            if($getData->num_rows() > 0)
                return $getData->result_array();
            else
                return null;
        }
        else return null;
    }

    function getIdSekolahByKode($kode){
        $jenjang = strtolower(substr($kode, 0, 3));
        $this->db->select('id_sekolah');
        $this->db->from('sekolah');
        $this->db->where('status_aktif', 1);
        if($jenjang != 'smk'){
            $this->db->where('kode_sekolah', $kode);
        }
        else{
            $nomorSmk = str_replace("SMK","",$kode);
            if($nomorSmk < 10) $nomorSmk= '0'.$nomorSmk;
            $this->db->where('subrayon', $nomorSmk);
            $this->db->where('id_sekolah >', 10000);
        }
        $this->db->where(array('status_aktif' => '1'));
        $getData = $this->db->get();
        $idSekolah = array();
        foreach($getData->result_array() as $row){
            array_push($idSekolah, $row['id_sekolah']);
        }
        return $idSekolah;
    }
}

?>
