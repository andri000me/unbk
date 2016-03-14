<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KecamatanModel extends CI_Model {
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
    
    public function getKecamatan() {
        $this->db->select('id_kecamatan, nama_kecamatan');
        $this->db->order_by('nama_kecamatan', 'asc');
        $query = $this->db->get('kecamatan');

        $kecamatan = array();
        foreach ($query->result() as $item) {
            $kecamatan[$item->id_kecamatan] = $item->nama_kecamatan;
        }
        return $kecamatan;
    }

    public function getWilayahByKecamatan($id_kecamatan, $jalur, $jenjang) {
        $field = 'wilayah_' . $jenjang . '_' . $jalur;
        $this->db->select($field);
        $this->db->where('id_kecamatan', $id_kecamatan);
        $query = $this->db->get('kecamatan');

        if ($query->num_rows() > 0) {
            $result = array(
              $query->first_row()->$field => $this->wilayah[$query->first_row()->$field] 
            );
            return $result;
        }
        return array();
    }

}