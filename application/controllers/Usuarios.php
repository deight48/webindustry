<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	private $usuario;
	
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('America/Lima');
		if($this->session->userdata('datausuario')){
			$data = json_decode($this->session->userdata('datausuario'));
			$this->usuario = $data->usuario;
		}else header('location:'.base_url());
	}
	
	public function index(){ $this->load->view('main'); }
}
