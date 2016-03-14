<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/JalurState/JalurState.php';

/**
 * Description of KawasanState
 *
 * @author m.rap
 */
class KawasanState extends JalurState {

    public function __construct(&$ci, &$stateManager) {
        parent::__construct($ci, $stateManager);
        $this->name = 'kawasan';
    }
    
    public function validasi() {
        
    }
}
