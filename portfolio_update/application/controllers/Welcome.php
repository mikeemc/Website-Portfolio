<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('header/header_view');
		$this->load->view('navbar');
		$this->load->view('intro');
		$this->load->view('portfolio');
		$this->load->view('about');
		$this->load->view('footer/footer_view');
	}
}
