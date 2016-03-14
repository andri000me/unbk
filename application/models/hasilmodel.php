<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HasilModel extends CI_Model {
    private $db;
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', true);

    }

    public function getHasil($jalur='umum', $jenjang='smp', $idSekolah=array(), $kodeTabel=0, $isBiodata=FALSE, $perpage='', $urutan=''){
        if(is_array($idSekolah) && count($idSekolah)>0){
            $this->db->where_in('output_diterima', $idSekolah);
            $this->db->order_by('output_urut asc');
            if($isBiodata){
                $this->db->join('input_'.$jenjang.'_'.$jalur,
                 'input_'.$jenjang.'_'.$jalur.'.input_uasbn = output_'.$jenjang.'_'.
                 $jalur.$rankUtil.'.output_uasbn', 'left');
            }
            if(empty($perpage) && empty($urutan))
                $query = $this->db->get('output_'.$jenjang.'_'.$jalur.$kodeTabel);
            else $query = $this->db->get('output_'.$jenjang.'_'.$jalur.$kodeTabel, $perpage, $urutan);
            if($query->num_rows() > 0){
                return $query->result_array();
            }
        }
        return null;
    }

    public function getCountHasil($jalur='umum', $jenjang='smp', $idSekolah=array(), $kodeTabel=0){
        if(is_array($idSekolah) && count($idSekolah)>0){
            $this->db->select('count(*) as jum');
            $this->db->where_in('output_diterima', $idSekolah);
            $query = $this->db->get('output_'.$jenjang.'_'.$jalur.$kodeTabel);
            if($query->num_rows() > 0){
                $row = $query->row();
                return $row->jum;
            }
        }
        return null;
    }

    public function getIdSekolahByKode($kode){
        $jenjang = strtolower(substr($kode, 0, 3));
        $this->db->select('id_sekolah');
        $this->db->where('status_aktif', 1);
        $this->db->from('sekolah');
        if($jenjang != 'smk'){
            $this->db->where('kode_sekolah', $kode);
        }
        else{
            $nomorSmk = str_replace("SMK","",$kode);
            if($nomorSmk < 10) $nomorSmk= '0'.$nomorSmk;
            $this->db->where('subrayon', $nomorSmk);
            $this->db->where('id_sekolah >', 10000);
        }

        $getData = $this->db->get();
        $idSekolah = array();
        foreach($getData->result_array() as $row){
            array_push($idSekolah, $row['id_sekolah']);
        }
        return $idSekolah;
    }

    function getRankUtil($jenjang, $jalur){
        $this->db->select('mvalue')->from('configs')
                ->where('parameter', strtolower($jenjang).'_'.strtolower($jalur));
        $result = $this->db->get();
        if($result->num_rows() == 1){
            $r = $result->result_array();
            return $r[0]['mvalue'];
        }
        else return '0';
    }

    function getHasilMitraWarga($kodeSekolah){
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

    public function getIdSekolahAsPilihan($jenjang='', $jalur='') {
        $j = $jenjang;
        $this->db->from('sekolah')
                 ->order_by('id_sekolah');
        $this->db->where('status_aktif', 1);
        if($jenjang!=''){
            $jenjang = strtoupper(substr($jenjang, -1));
            $this->db->where('jenjang', $jenjang);
        }
        if($jalur!=''){
            $where = array();
            $this->whereId($where, $jalur, $j, 'id_sekolah');
            $this->db->where($where);
        }
        $query = $this->db->get();
        $sekolah = array();
        foreach ($query->result() as $item) {
            if($item->jenjang=='K') $sekolah[$item->id_sekolah] = $item->nama_sekolah.' - '.$item->nama_jurusan;
            else $sekolah[$item->id_sekolah] = $item->nama_sekolah;
        }
        return $sekolah;
    }

    private function whereId(&$where, $jalur, $jenjang, $idField) {
        if ($jenjang == 'smp' && $jalur == 'kawasan') {
            $where[$idField.' <'] = 200;
        } else if ($jenjang == 'smp' && $jalur == 'umum') {
            $where[$idField.' >'] = 200;
            $where[$idField.' <'] = 300;
        } else if ($jenjang == 'sma' && $jalur == 'kawasan') {
            $where[$idField.' >'] = 300;
            $where[$idField.' <'] = 400;
        } else if ($jenjang == 'sma' && $jalur == 'umum') {
            $where[$idField.' >'] = 400;
            $where[$idField.' <'] = 500;
        } else if ($jenjang == 'smk') {
            $where[$idField.' >'] = 10000;
        }
    }

    function getSiswaDiterima($jenjang, $jalur, $noUn, $isBiodata=FALSE){
        $rankUtil = $this->getRankUtil($jenjang, $jalur);
        $this->db->from('output_'.$jenjang.'_'.$jalur.$rankUtil)->where('output_uasbn', $noUn);
        if($isBiodata){
            $this->db->join('input_'.$jenjang.'_'.$jalur,
                 'input_'.$jenjang.'_'.$jalur.'.input_uasbn = output_'.$jenjang.'_'.
                 $jalur.$rankUtil.'.output_uasbn', 'left');
        }
        $query = $this->db->get();
        if ($query->num_rows() == 1){
            $q = $query->result_array();
            return $q[0];
        } else {
            $this->db->from('output_'.$jenjang.'_'.$jalur.'_tidak'.$rankUtil)->where('output_uasbn', $noUn);
            if($isBiodata){
                $this->db->join('input_'.$jenjang.'_'.$jalur,
                     'input_'.$jenjang.'_'.$jalur.'.input_uasbn = output_'.$jenjang.'_'.
                     $jalur.'_tidak'.$rankUtil.'.output_uasbn', 'left');
            }
            $query = $this->db->get();
            if ($query->num_rows() == 1){
                $q = $query->result_array();
                return $q[0];
            } else return null;
        }
    }

    function getJumlahDaftarUlang($jalur='', $jenjang=''){
        if($jalur=='mitrawarga'){
            $sql = 'SELECT `input_pilihan1` AS kode, count( * ) AS jum FROM `input_mitra_warga` WHERE `input_status_validasi` =1 and `input_status_daftar_ulang`=1 GROUP BY `input_pilihan1`';
        }
        else if($jalur=='kawasan' || $jalur=='umum'){
            $util =  $this->getRankUtil('kawasan', $jalur);
            $sql = 'SELECT `output_diterima` AS kode, count( * ) AS jum FROM `output_'.$jenjang.'_kawasan'.$util.'` left join `input_'.$jenjang.'_kawasan` on `output_'.$jenjang.'_kawasan'.$util.'`.input_'.$jenjang.'_id = `input_'.$jenjang.'_kawasan`.input_'.$jenjang.'_id WHERE `input_status_daftar_ulang`=1 GROUP BY `output_diterima`';
        }
        $q = $this->db->query($sql);
        if($q->num_rows()>0){
            $stat = array();
            foreach($q->result_array() as $row){
                $stat[$row['kode']] = $row['jum'];
            }
            return $stat;
        }
        else return null;
    }

    function getDataSiswa($jenjang='', $noUn=''){
        if($jenjang=='smp')
            $prev = 'sd';
        else if($jenjang=='sma' || $jenjang=='smk')
            $prev = 'smp';
        else return null;
        if($noUn!=''){
            $this->db->where($prev.'_uasbn', $noUn);
            $query = $this->db->get('data_siswa_'.$prev);
            if($query->num_rows()>0){
                $res = $query->row_array();
                $res['pin'] = $res[$prev.'_pin'];
                return $res;
            }
        }
        else return null;
    }

    function getDataPemenuhan($jenjang='smp', $jalur='umum', $idSekolah =array(), $part=1, $isBiodata=TRUE) {
        $jenjang = strtolower($jenjang);
        $jalur = strtolower($jalur);
        $parameter= 'pp1'.$jenjang."_".$jalur;
        $query = $this->db->get_where('configs', array('parameter' => $parameter));
        $ret = $query->row();
        $kodeTabel = $ret->mvalue;

        if (is_array($idSekolah) && count($idSekolah) > 0) {
            if ($isBiodata) {
                $this->db->join('output_pp1'.$jenjang.'_'.$jalur.$kodeTabel,
                'output_pp1'.$jenjang.'_'.$jalur.$kodeTabel.'.output_uasbn = pp1'.$jenjang."_".$jalur.'_summary'.'.output_uasbn', 'left');
            }
            $this->db->where_in('output_pindah', $idSekolah);
            $this->db->where('pindahan <>', '11');
            $this->db->where('pindahan <>', '22');
            if ($jalur == 'umum') {
                $this->db->order_by('output_pilihan', 'asc');
            }
            $this->db->order_by('output_urut', 'asc');
            $query = $this->db->get('pp1'.$jenjang."_".$jalur.'_summary');
            if($query->num_rows() > 0) {
                return $query->result_array();
            }
        }
        return null;
    }

    function getSiswaDiterimaPemenuhan($jenjang, $noUn, $isBiodata=FALSE) {
        $jenjang = strtolower($jenjang);
        $jalur = 'umum';
        $parameter= 'pp1'.$jenjang."_".$jalur;
        $query = $this->db->get_where('configs', array('parameter' => $parameter));
        $ret = $query->row();
        $kodeTabel = $ret->mvalue;

        if ($isBiodata) {
            $this->db->join('output_pp1'.$jenjang.'_'.$jalur.$kodeTabel,
            'output_pp1'.$jenjang.'_'.$jalur.$kodeTabel.'.output_uasbn = pp1'.$jenjang."_".$jalur.'_summary'.'.output_uasbn', 'left');
        }
        $this->db->where('pp1'.$jenjang."_".$jalur.'_summary'.'.output_uasbn', $noUn);
        $this->db->where('pindahan <>', '11');
        $this->db->where('pindahan <>', '22');
        $this->db->order_by('output_urut', 'asc');
        $query = $this->db->get('pp1'.$jenjang."_".$jalur.'_summary');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return null;
    }

    function getPilihanPemenuhanUmum($jenjang, $jalur, $noUn){
        $jenjang = strtolower($jenjang);
        $jalur = strtolower($jalur);
        $parameter= $jenjang."_".$jalur;
        $query = $this->db->get_where('configs', array('parameter' => $parameter));
        $ret = $query->row();
        $aktif = $ret->mvalue;

        $query2 = $this->db->get_where('output_'.$parameter.$aktif, array('output_uasbn' => $noUn));
        if ($query2->num_rows() > 0){
            $q = $query2->result_array();
            return $q[0];
        }
        else{
            $queryTidak = $this->db->get_where('output_'.$parameter.'_tidak'.$aktif, array('output_uasbn' => $noUn));
            if ($queryTidak->num_rows() > 0){
                $q = $queryTidak->result_array();
                return $q[0];
            }
            else return null;
        }
    }

    function getSiswaDiterimaPemenuhanKawasan($jenjang, $noUn, $isBiodata=FALSE) {
        $jenjang = strtolower($jenjang);
        $jalur = 'kawasan';
        $parameter= 'pp1'.$jenjang."_".$jalur;
        $query = $this->db->get_where('configs', array('parameter' => $parameter));
        $ret = $query->row();
        $kodeTabel = $ret->mvalue;

        if ($isBiodata) {
            $this->db->join('output_pp1'.$jenjang.'_'.$jalur.$kodeTabel,
            'output_pp1'.$jenjang.'_'.$jalur.$kodeTabel.'.output_uasbn = pp1'.$jenjang."_".$jalur.'_summary'.'.output_uasbn', 'left');
        }
        $this->db->where('pp1'.$jenjang."_".$jalur.'_summary'.'.output_uasbn', $noUn);
        $this->db->where('pindahan <>', '11');
        $this->db->where('pindahan <>', '22');
        $this->db->order_by('output_urut', 'asc');
        $query = $this->db->get('pp1'.$jenjang."_".$jalur.'_summary');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return null;
    }

    public function getDataSiswaInput($jenjang, $jalur, $noUn) {
        $this->db->where('input_uasbn', $noUn);
        $query = $this->db->get('input_'.$jenjang.'_'.$jalur);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else return null;
    }
    public function getWaktuRanking($jenjang='smp', $jalur='umum'){
        $jenjang = strtoupper($jenjang);
        $jalur = strtoupper($jalur);
        $parameter= $jenjang."_".$jalur;
        $query = $this->db->get_where('configs', array('parameter' => $parameter));
        $ret = $query->row();
        $aktif = $ret->mvalue;

        $like = "lastrun_output_".$parameter.$aktif."";
        $query = $this->db->get_where('configs', array('parameter' => $like));
        $ret = $query->row();

        if($ret)
        {
            $waktu = $ret->mvalue;
            if($waktu)
                return($waktu);
            else
                return null;
        }
        else return null;
    }

}
?>
