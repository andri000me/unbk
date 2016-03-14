<?php

class Template {
	
	protected $_ci;
	
	function __construct()
	{
		$this->_ci = &get_instance();
		header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
        header("Pragma: no-cache"); //HTTP 1.0
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	}

	function display($page, $data)
	{
		$data['_content']=$this->_ci->load->view($page, $data, true);
		$data['_header']=$this->_ci->load->view('base/header', $data, true);
		$data['_footer']=$this->_ci->load->view('base/footer', $data, true);
		$data['_sidebar']=$this->_ci->load->view('base/sidebar', $data, true);

		$this->_ci->load->view('base/template_default.php',$data);
	}

	function display_home($page, $data)
	{
		$data['_content']=$this->_ci->load->view($page, $data, true);
		$data['_header']=$this->_ci->load->view('base/header', $data, true);
		$data['_footer']=$this->_ci->load->view('base/footer', $data, true);

		$data['_sidebar']=$this->_ci->load->view('base/sidebar', $data, true);
		

		$this->_ci->load->view('base/template_home.php',$data);
	}

	function display_daftar($page, $data)
	{
		$data['_content']=$this->_ci->load->view($page, $data, true);
		$data['_header']=$this->_ci->load->view('base/header', $data, true);
		$data['_footer']=$this->_ci->load->view('base/footer', $data, true);

		$this->_ci->load->view('base/template_daftar.php',$data);
	}

	function display_error($page, $data)
	{
		$data['_content']=$this->_ci->load->view($page, $data, true);
		$data['_header']=$this->_ci->load->view('base/header', $data, true);
		$data['_footer']=$this->_ci->load->view('base/footer', $data, true);
		$data['_sidebar']=$this->_ci->load->view('base/sidebar', $data, true);

		$this->_ci->load->view('base/template_error.php',$data);
	}

	function display_rekap($page, $data)
	{
		$data['_content']=$this->_ci->load->view($page, $data, true);
		$data['_header']=$this->_ci->load->view('base/header', $data, true);
		$data['_footer']=$this->_ci->load->view('base/footer', $data, true);
		$data['_sidebar']=$this->_ci->load->view('base/sidebar_rekap', $data, true);

		$this->_ci->load->view('base/template_default.php',$data);
	}

	function display_unbk($page, $data)
	{
		$data['_content']=$this->_ci->load->view($page, $data, true);
		$data['_header']=$this->_ci->load->view('base/header', $data, true);
		$data['_footer']=$this->_ci->load->view('base/footer', $data, true);
		$data['_sidebar']=$this->_ci->load->view('base/sidebar', $data, true);

		$this->_ci->load->view('base/template_default.php',$data);
	}
}