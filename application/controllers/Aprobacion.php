<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aprobacion extends CI_Controller {

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
	
	public function index(){ }
	
	public function certificados()
	{
	    $this->load->model('Consultas_model');
	    $certificados = $this->Consultas_model->certificados(['c.status' => 1, 'c.idstatus' => 2]);
		$this->load->view('main',['certificados' => $certificados]);
	}
}
