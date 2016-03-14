<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of StateManager
 * @property CI_Controller $ci
 * @property PendaftaranState $currentState
 * @property JalurState $jalurState
 * @property JenjangState $jenjangState
 * @property JenisSiswaState $jenisSiswaState
 *
 * @author m.rap
 */
class StateManager {
    private $ci;
    private $currentState;
    private $jalurState;
    private $jenjangState;
    private $jenisSiswaState;

    public function __construct(&$ci) {
        $this->ci =& $ci;
    }
    
    /**
     * 
     * @return PendaftaranState
     */
    public function &getCurrentState() {
        require_once APPPATH.'libraries/PendaftaranState/PendaftaranState.php';
        if ($this->currentState == null) {
            $state = $this->ci->session->userdata('state');
            if (!$state) {
                require_once APPPATH.'libraries/PendaftaranState/InputNoUnState.php';
                $this->setCurrentState('InputNoUnState');
            } else {
                require_once APPPATH.'libraries/PendaftaranState/'.$state.'.php';
                $this->currentState = new $state($this->ci, $this);
            }
        }
        return $this->currentState;
    }
    
    /**
     * 
     * @param PendaftaranState $state
     */
    public function setCurrentState($state) {
        require_once APPPATH.'libraries/PendaftaranState/PendaftaranState.php';
        require_once APPPATH.'libraries/PendaftaranState/'.$state.'.php';
        $this->currentState = new $state($this->ci, $this);
        $this->ci->session->set_userdata('state', $state);
    }
    
    /**
     * 
     * @return JalurState
     */
    public function &getJalurState() {
        require_once APPPATH.'libraries/JalurState/JalurState.php';
        if ($this->jalurState == null) {
            $state = $this->ci->session->userdata('jalurState');
            if ($state) {
                require_once APPPATH.'libraries/JalurState/'.$state.'.php';
                $this->jalurState = new $state($this->ci, $this);
            }
        }
        return $this->jalurState;
    }
    
    /**
     * 
     * @param JalurState $state
     */
    public function setJalurState($state) {
        require_once APPPATH.'libraries/JalurState/JalurState.php';
        require_once APPPATH.'libraries/JalurState/'.$state.'.php';
        $this->jalurState = new $state($this->ci, $this);
        $this->ci->session->set_userdata('jalurState', $state);
    }
    
    /**
     * 
     * @return JenjangState
     */
    public function &getJenjangState() {
        require_once APPPATH.'libraries/JenjangState/JenjangState.php';
        if ($this->jenjangState == null) {
            $state = $this->ci->session->userdata('jenjangState');
            if ($state) {
                require_once APPPATH.'libraries/JenjangState/'.$state.'.php';
                $this->jenjangState = new $state($this->ci, $this);
            }
        }
        return $this->jenjangState;
    }
    
    /**
     * 
     * @param JenjangState $state
     */
    public function setJenjangState($state) {
        require_once APPPATH.'libraries/JenjangState/JenjangState.php';
        require_once APPPATH.'libraries/JenjangState/'.$state.'.php';
        $this->jenjangState = new $state($this->ci, $this);
        $this->ci->session->set_userdata('jenjangState', $state);
    }
    
    /**
     * 
     * @return JenisSiswaState
     */
    public function &getJenisSiswaState() {
        require_once APPPATH.'libraries/JenisSiswaState/JenisSiswaState.php';
        if ($this->jenisSiswaState == null) {
            $state = $this->ci->session->userdata('jenisSiswaState');
            if ($state) {
                require_once APPPATH.'libraries/JenisSiswaState/'.$state.'.php';
                $this->jenisSiswaState = new $state($this->ci, $this);
            }
        }
        return $this->jenisSiswaState;
    }
    
    /**
     * 
     * @param JenisSiswaState $state
     */
    public function setJenisSiswaState($state) {
        require_once APPPATH.'libraries/JenisSiswaState/JenisSiswaState.php';
        require_once APPPATH.'libraries/JenisSiswaState/'.$state.'.php';
        $this->jenisSiswaState = new $state($this->ci, $this);
        $this->ci->session->set_userdata('jenisSiswaState', $state);
    }
    
    public function resetAllState() {
        $data = array(
            'state' => '',
            'jalur' => '',
            'jenjangState' => '',
            'jenisSiswaState' => ''
        );
        $this->ci->session->unset_userdata($data);
    }
}

?>
