<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StatistikModel extends CI_Model {
    private $db;
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }
    // public function getStatistik($jenjang='smp', $jalur='umum'){
    //     $jenjang = strtoupper(substr($jenjang, -1));
    //     $jalur = strtoupper(substr($jalur, 0, 1));
    //     $this->db->order_by('id_sekolah', 'asc');
    //     $query = $this->db->get_where('statistik', array('jenjang' => $jenjang, 'jalur' => $jalur, 'status_aktif' =>1));
    //     if($query->num_rows()>0){
    //         return $query->result_array();
    //     }
    //     else return null;
    // }

    public function getStatistik($jenjang='smp', $jalur='umum'){
        $id_awal = 0;
        $id_akhir = 0;
        
        if ($jenjang=='smp'){
            $id_awal = 200;
            $id_akhir = 300;
        }
        else if ($jenjang=='sma'){
            $id_awal = 400;
            $id_akhir = 500;
        }
        else if ($jenjang=='smk'){
            $id_awal = 10000;
            $id_akhir = 20000;
        }

        $jenjang = strtoupper(substr($jenjang, -1));
        $jalur = strtoupper(substr($jalur, 0, 1));

        $this->db->order_by('id_sekolah', 'asc');
        $query = $this->db->get_where('sekolah', array('jenjang' => $jenjang, 'id_sekolah >' => $id_awal, 'id_sekolah <' => $id_akhir, 'status_aktif' =>1));
        if($query->num_rows()>0){
            return $query->result_array();
        }
        else return null;
    }

}