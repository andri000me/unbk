<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $timezone = "Asia/Jakarta";
    if(function_exists('date_default_timezone_set')) date_default_timezone_set ($timezone);
    $this->data= array();
//    
////    date_default_timezone_set('Asia/Jakarta');
////        $startTime = mktime(8, 0, 0, 5, 20, 2013);
////        $endTime = mktime(16, 0, 0, 5, 23, 2013);
////        $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
////        if ($currentTime < $startTime || $currentTime > $endTime) {
////            
////        }
////        else $this->data['info'] = "<div class=\"bg-color-green padding10 fg-color-white text-center\"><strong>LATIHAN 1</strong></div><br>";
//    //kalo counterdown : $this->data['info'] = "<div class=\"span3 bg-color-green fg-color-white padding5\" id=\"bgcounterdown\"><center>LATIHAN 2</center><hr><span id=\"counterdown\"></span></div>";
    /*$umumStart = mktime(8, 0, 0, 6, 26, 2013);
    $currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
    if ($currentTime < $umumStart){
        $this->data['info'] = "<div class=\"bg-color-green padding5 fg-color-white text-center\" id=\"bgcounterdown\"><center><blink>PENDAFTARAN JALUR UMUM</blink></center><hr>Pendaftaran Jalur Umum dilaksanakan pada 26 Juni 2013 pk. 08.00 s.d. 29 Juni 2013 pk. 16.00</div><br>";
    }
    else{
        $this->data['info'] = "<div class=\"bg-color-green padding5 fg-color-white text-center\" id=\"bgcounterdown\"><center>PENDAFTARAN JALUR UMUM</center><hr>Terima Kasih. Pendaftaran Jalur Umum telah selesai.</div><br>";
        //$this->data['counterdown'] = array('countdownfix', 'umum');
    }*/
  }
  
  /**
   * Get user session data.
   * 
   * @return type 
   */
  protected function get_user_data()
  {
    return $this->session->all_userdata();
  }
  
  /**
   * Get logged in user id.
   * 
   * @return type 
   */
  protected function get_user_id()
  {
    $session_data = $this->session->all_userdata();
    return $session_data['user_id'];
  }
  
  /**
   * Determine if user is authenticated.
   * 
   * @return type 
   */
  protected function is_logged_in()
  {
    $session_data = $this->session->all_userdata();
    return (isset($session_data['user_id']) && $session_data['user_id'] > 0 && isset($session_data['logged_in']) && $session_data['logged_in'] == TRUE);
  }
  
  /**
   * Determine if logged in user is admin.
   * 
   * @return type 
   */
  protected function is_admin()
  {
    $session_data = $this->session->all_userdata();
    return (isset($session_data['is_admin']) && $session_data['is_admin'] == 1);
  }
  
  /**
   * Utility method for creating UUIDs.
   * 
   * @return type 
   */
  protected function create_uuid()
  {
    $uuid_query = $this->db->query('SELECT UUID()');
    $uuid_rs = $uuid_query->result_array();
    return $uuid_rs[0]['UUID()'];
  }
  
  /**
   * Utility method for sending emails.
   * 
   * @param type $to
   * @param type $subject
   * @param type $message 
   */
  protected function send_mail($to, $subject, $message)
  {
    $this->load->library('email');
    $this->email->from($this->config->item('from_email_address'));
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);
    $this->email->send();
  }
  
  /**
   * Utility method for determining if the request is a POST.
   * 
   * @return type 
   */
  protected function is_method_post()
  {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }
}