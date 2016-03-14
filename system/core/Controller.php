<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	private static $instance;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		self::$instance =& $this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');

		$this->load->initialize();

		$this->load->library('user_agent');
		if ($this->agent->is_browser('Safari')) {
			$this->config->set_item('base_url', 'http://6c3620.ppdbsurabaya.net/');
		}


		log_message('debug', "Controller Class Initialized");
	}

	public static function &get_instance()
	{
		return self::$instance;
	}

	public function validateTanggalDaftar($jalur) {
		// return TRUE;
		date_default_timezone_set('Asia/Jakarta');
		if($jalur=='kawasan'){
			$startTime = mktime(0, 0, 0, 7, 1, 2015);
			$endTime = mktime(23, 59, 59, 7, 3, 2016);
			$currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
			if ($currentTime < $startTime || $currentTime > $endTime) {
				return false;
			}
			return true;
		}

		if($jalur=='umum'){
			$startTime = mktime(0, 0, 0, 7, 6, 2015);
			$endTime = mktime(23, 59, 59, 7, 9, 2016);
			$currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
			if ($currentTime < $startTime || $currentTime > $endTime) {
				return false;
			}
			return true;
		}

		if($jalur=='mitrawarga'){
			$startTime = mktime(8, 0, 0, 6, 27, 2015);
			$endTime = mktime(16, 0, 0, 6, 30, 2016);
			$currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
			if ($currentTime < $startTime || $currentTime > $endTime) {
				return false;
			}
			return true;
		}
	}

	public function validateTanggalTutup($jalur, $sekolah) {
		if ($sekolah != 1) {
			date_default_timezone_set('Asia/Jakarta');
			$currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
			$endTime = $currentTime;
			if ($jalur == 'kawasan') {
				$endTime = mktime(14, 0, 0, 7, 3, 2016);
			} else if ($jalur == 'umum') {
				$endTime = mktime(14, 0, 0, 7, 9, 2016);
			}
			if ($currentTime > $endTime) return false;
			return true;
		} else {
			return true;
		}
	}
}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */