<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('login');
		$this->load->view('layout/footer');
	}
	public function login()
	{
		$this->load->view('layout/header');
		$this->load->view('login');
		$this->load->view('layout/footer');
	}
	public function cadastro()
	{
		$this->load->view('layout/header');
		$this->load->view('cadastro');
		$this->load->view('layout/footer');
	}
	public function sair()
	{
		$this->load->view('layout/header');
		$this->load->view('sair');
		$this->load->view('layout/footer');
	}
}
