<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of JalurState
 * @property CI_Controller $ci
 * @property StateManager $stateManager
 * @property JenisSiswaState $jenisSiswaState
 *
 * @author m.rap
 */
abstract class JalurState {
    protected $ci;
    protected $stateManager;
    
    private $jenisSiswaState;
    
    protected $name;

    public function __construct(&$ci, &$stateManager) {
        $this->ci =& $ci;
        $this->stateManager =& $stateManager;
    }
    
    public function &getName() {
        return $this->name;
    }
    
    public function __get($name) {
        if ($this->$name == null) {
            switch ($name) {
                case 'jenisSiswaState':
                    $this->jenisSiswaState =& $this->stateManager->getJenisSiswaState();
                    break;
            }
        }
        return $this->$name;
    }
    
    public abstract function validasi();
}
