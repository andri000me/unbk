<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SekolahModel extends CI_Model {
    private $db;
    public $wilayah = array(
        'U' => 'UTARA',
        'P' => 'PUSAT',
        'S' => 'SELATAN',
        'B' => 'BARAT',
        'T' => 'TIMUR'
    );
    
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }
    
    public function getWilayah($jalur, $jenjang) {
        return $this->wilayah;
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
        
    public function getSubRayon($jalur, $jenjang, $wilayah) {
        $field = 'subrayon';
        $this->db->select($field);
        
        $where = array(
            'wilayah'        => $wilayah,
        );
        $idField = 'id_sekolah';
        $this->whereId($where, $jalur, $jenjang, $idField);
        $this->db->where('status_aktif', 1);
        $this->db->order_by('subrayon', 'asc');
        $query = $this->db->get_where("sekolah", $where);
        
        $subRayon = array();
        foreach ($query->result() as $item) {
            $subRayon[$item->$field] = 'SUB RAYON '.$item->$field;
        }
        return $subRayon;
    }
    
    public function getSekolah($jalur, $jenjang, $wilayah, $subRayon) {
        $idField = 'id_sekolah';
        $namaField = 'nama_sekolah';
        
        $where = array(
            'wilayah'  => $wilayah,
            'subrayon' => $subRayon
        );
        $this->whereId($where, $jalur, $jenjang, $idField);
        
        $this->db->select("$idField, $namaField");
        $this->db->where('status_aktif', 1);
        $this->db->order_by('nama_sekolah', 'asc');
        $query = $this->db->get_where("sekolah", $where);
        $sekolah = array();
        foreach ($query->result() as $item) {
            $sekolah[$item->$idField] = $item->$namaField;
        }
        return $sekolah;
    }
    
    public function getSmk() {
        $this->db->select('subrayon, nama_sekolah');
        $this->db->distinct();
        $this->db->where(array('id_sekolah >' => 10000));
        $this->db->where('status_aktif', 1);
        $query = $this->db->get('sekolah');
        $smk = array();
        foreach ($query->result() as $s) {
            $smk[$s->subrayon] = $s->nama_sekolah;
        }
        return $smk;
    }
    
    public function getJurusan($smk) {
        $this->db->select('id_sekolah, nama_jurusan');
        $this->db->where('status_aktif', 1);
        $query = $this->db->get_where('sekolah', array('subrayon' => $smk, 'id_sekolah >' => 10000));
        $jurusan = array();
        foreach ($query->result() as $j) {
            $jurusan[$j->id_sekolah] = $j->nama_jurusan;
        }
        return $jurusan;
    }
    
    public function getNamaPilihan($jenjang, $pilihan = array()) {
        $fieldId = 'id_sekolah';
        $isSmk = false;
        if (!is_array($pilihan) || count($pilihan) == 0) {
            return array();
        }
        foreach ($pilihan as $item) {
            if (intval($item) > 10000) {
                $isSmk = true;
                break;
            }
        }
        $fieldNama = (($isSmk) ? 'nama_jurusan' : 'nama_sekolah');
        $this->db->select("$fieldId, $fieldNama".(($isSmk) ? ', nama_sekolah' : ''));
        $this->db->where_in($fieldId, $pilihan);
        $this->db->where('status_aktif', 1);
        $query = $this->db->get('sekolah');
        $sekolah = array();
        foreach ($query->result() as $item) {
            if ($isSmk)
                $sekolah['smk'] = $item->nama_sekolah;
            $sekolah[$item->$fieldId] = $item->$fieldNama;
        }
        return $sekolah;
    }
    
    public function getSekolahByJenjang($jenjang, $jalur = '') {
        $jenjang = strtoupper(substr($jenjang, 2,1));
        if(empty($jalur)){
        $query = $this->db->query("SELECT * FROM sekolah where `status_aktif` = 1 and `jenjang` = '".
                $jenjang."' ORDER BY RIGHT(`nama_sekolah`, 2), no");
        }
        else {
            $jalur = strtolower($jalur);
            $whereJalur = '';
            if ($jenjang == 'P' && $jalur == 'kawasan') {
                $whereJalur = 'id_sekolah < 200';
            } else if ($jenjang == 'P' && $jalur == 'umum') {
                $whereJalur = 'id_sekolah > 200 AND id_sekolah < 300';
            } else if ($jenjang == 'A' && $jalur == 'kawasan') {
                $whereJalur = 'id_sekolah > 300 AND id_sekolah < 400';
            } else if ($jenjang == 'A' && $jalur == 'umum') {
                $whereJalur = 'id_sekolah > 400 AND id_sekolah < 500';
            } else if ($jenjang == 'K') {
                $whereJalur = 'id_sekolah > 10000';
            }
            $query = $this->db->query("SELECT * FROM sekolah WHERE `status_aktif` = 1 and ".$whereJalur." AND `jenjang` = '".
                $jenjang."' ORDER BY RIGHT(`nama_sekolah`, 2), no");
        }
        $sekolah = array();
        foreach ($query->result() as $item) {
            $sekolah[$item->kode_sekolah] = $item;
        }
        return $sekolah;
    }
    
    public function getCountSmk() {
        $this->db->select('subrayon, count(*) as total');
        $this->db->where(array('id_sekolah >' => 10000));
        $this->db->where('status_aktif', 1);
        $this->db->group_by('subrayon');
        $query = $this->db->get('sekolah');
        $smk = array();
        foreach ($query->result() as $s) {
            $smk[$s->subrayon] = $s->total;
        }
        return $smk;
    }
    
    public function getSekolahAsPilihan($jenjang='', $jalur='') {
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
            if($item->jenjang=='K'){
                $nomor = intval($item->subrayon);
                $sekolah['SMK'.$nomor] = $item->nama_sekolah;
            }
            else $sekolah[$item->kode_sekolah] = $item->nama_sekolah;
        }
        return $sekolah;
    }
    
    public function getAllSekolah() {
        $this->db->where('status_aktif', 1);
        $query = $this->db->get('sekolah');
        $sekolah = array();
        foreach ($query->result() as $item) {
            $sekolah[$item->id_sekolah] = $item;
        }
        return $sekolah;
    }

    public function getSubRayonSekolah($id_sekolah) {
        $this->db->select('subrayon');
        $query = $this->db->get_where("sekolah", array('id_sekolah' => $id_sekolah));
        if ($query->num_rows() > 0) {
            $res = $query->row();
            return $res->subrayon;
        }
        return 0;
    }
}