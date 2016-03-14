<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BeritaModel extends CI_Model {
    private $db;
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }
       
    function getBeritaById($id){
        $query = $this
            ->db->where('berita_id', $id)->limit(1)->get('berita'); 
        if ($query->num_rows() == 1) return $query->row_array();
        else return null;
    }
        
    public function getAllBerita($perpage, $urutan){
        $this->db->select('*')->from('berita')->order_by('tanggal_dibuat desc');
        $query = $this->db->get('', $perpage, $urutan);
        $res = array();
        foreach ($query->result_array() as $q){
            $res[$q['berita_id']] = $q;
        }
        return $res;
    }
    
    public function getCountBerita(){
        $this->db->select('count(*) as jum');
        $this->db->from('berita');
        $getData = $this->db->get();
        
        if($getData->num_rows() == 1){
            $res = $getData->result_array();
            return $res[0]['jum']; 
        }
        else return null;
    }
    
    public function tambahBerita($judul, $isi, $pembuat, $status){
        $blade = $this->load->database('blade_sd', true);
        $data = array(
               'judul_berita' => $judul ,
               'isi_berita' => $isi,
               'pembuat_berita' => $pembuat,
               'status_tampil' => $status,
               'tanggal_dibuat' => date('Y-m-d H:i:s')
            );
        return $blade->insert('berita', $data);
    }
    
    public function updateBerita($id, $judul, $isi, $status, $tanggal){
        $blade = $this->load->database('blade_sd', true);
        $data = array(
               'judul_berita' => $judul ,
               'isi_berita' => $isi,
               'status_tampil' => $status,
               'tanggal_dibuat' => $tanggal
            );
        $blade->where('berita_id', $id);
        return $blade->update('berita', $data);
    }
    
    public function hapusBerita($id){
        $blade = $this->load->database('blade_sd', true);
        return $blade->delete('berita', array('berita_id' => $id)); 
    }
}
?>
