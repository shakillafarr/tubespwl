<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');


/**
 * 
 */
class loginn extends CI_Controller
{
	
	public function login()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header-register');
		$this->load->view('login/login');
		$this->load->view('layout/footer');
	}
	
	public function register()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header-login');
		$this->load->view('login/registrasi');
		$this->load->view('layout/footer');
	}
}

 ?>