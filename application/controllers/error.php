<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

	public function index()
	{
		show_404();
	}

	public function halaman_tidak_tersedia()
	{
		show_404();
	}
	
}