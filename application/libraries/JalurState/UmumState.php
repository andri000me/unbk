<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/JalurState/JalurState.php';

/**
 * Description of UmumState
 *
 * @author m.rap
 */
class UmumState extends JalurState {

    public function __construct(&$ci, &$stateManager) {
        parent::__construct($ci, $stateManager);
        $this->name = 'umum';
    }
    
    public function validasi() {
        
    }
}
