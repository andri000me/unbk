<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FaqModel extends CI_Model {
    private $db;
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }
       
    function getFaqById($id){
        $query = $this->db->where('faq_id', $id)->limit(1)->get('faq_unbk'); 
        if ($query->num_rows() == 1) return $query->row_array();
        else return null;
    }
        
    public function getAllFaq($perpage, $urutan){
        $this->db->select('*')->from('faq_unbk')->where('status_tampil !=', 0)->order_by('status_tampil desc, tanggal_dibuat desc');
        $query = $this->db->get('', $perpage, $urutan);
        $res = array();
        foreach ($query->result_array() as $q){
            $res[$q['faq_id']] = $q;
        }
        return $res;
    }
    
    public function getCountFaq(){
        $this->db->select('count(*) as jum');
        $this->db->from('faq_unbk');
		$this->db->where('status_tampil = 1');
        $getData = $this->db->get();
        
        if($getData->num_rows() == 1){
            $res = $getData->result_array();
            return $res[0]['jum']; 
        }
        else return null;
    }
    
    public function tambahFaq($tanya, $jawab, $pembuat, $status){
        $blade = $this->load->database('blade_sd', true);
        $data = array(
               'isi_pertanyaan' => $tanya ,
               'jawaban' => $jawab,
               'pembuat_faq' => $pembuat,
               'status_tampil' => $status,
               'tanggal_dibuat' => date('Y-m-d H:i:s')
            );
        return $blade->insert('faq_unbk', $data);
    }
    
    public function updateFaq($id, $tanya, $jawab, $status, $tanggal){
        $blade = $this->load->database('blade_sd', true);
        $data = array(
               'isi_pertanyaan' => $tanya ,
               'jawaban' => $jawab,
               'status_tampil' => $status,
               'tanggal_dibuat' => $tanggal
            );
        $blade->where('faq_id', $id);
        return $blade->update('faq_unbk', $data);
    }
    
    public function hapusFaq($id){
        $blade = $this->load->database('blade_sd', true);
        return $blade->delete('faq_unbk', array('faq_id' => $id)); 
    }
}
?>
