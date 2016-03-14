<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/PendaftaranState/PendaftaranState.php';

/**
 * Description of KonfirmasiState
 *
 * @author m.rap
 */
abstract class KonfirmasiState extends PendaftaranState {
    private $count;
    protected $maxCount;

    /**
     * 
     * @param CI_Controller $ci
     * @param StateManager $stateManager
     */
    public function __construct(&$ci, &$stateManager) {
        parent::__construct($ci, $stateManager);
        $this->maxCount = 1;
    }
    
    public function getCount() {
        if ($this->count == null) {
            $count = $this->ci->session->userdata('konfirmasiCount');
            if (!$count) {
                $this->setCount(0);
            } else {
                $this->count = intval($count);
            }
        }
        return $this->count;
    }
    
    public function setCount($count) {
        $this->count = $count;
        $this->ci->session->set_userdata('konfirmasiCount', $count);
    }
}

?>
