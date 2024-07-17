<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verificacion extends CI_Controller {

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
	    $certificados = $this->Consultas_model->certificados(['c.status' => 1, 'c.idstatus' => 1]);
		$this->load->view('main',['certificados' => $certificados]);
	}
	public function modificacion()
	{
		$this->load->model('Consultas_model');
		$id = $this->input->get('i'); $status = 500; $icono = 'error';
		$msg = 'No se pudo enviar a &nbsp;<b>Modificaci&oacute;n</b>';
		
		if($this->Consultas_model->actualizar('certificados',['idstatus' => 4],['idcertificado' => $id])){
			$msg = 'Certificado enviado a &nbsp;<b>Modificaci&oacute;n</b>'; $icono = 'success';
		}
		$data = array('msg' => $msg,'icono' => $icono);
		$this->session->set_flashdata('msg', $data);
		
		header('location: '.base_url().'verificacion');		
	}
	public function verificacion()
	{
		$this->load->model('Consultas_model');
		$id = $this->input->post('idmodal'); $status = 500; $icono = 'error'; $c = $this->input->post('correlativo');
		$c1 = $this->input->post('sgdocorrelativo'); $c2 = $this->input->post('tercercorrelativo');
		$msg = 'No se pudo enviar a &nbsp;<b>Aprobaci&oacute;n</b>';
		
		if($this->Consultas_model->actualizar('certificados',['idstatus' => 2,'corr1' => $c,'corr2' => $c1,'corr3' => $c2],['idcertificado' => $id])){
			$msg = 'Certificado enviado a &nbsp;<b>Aprobaci&oacute;n</b>'; $icono = 'success';
		}

		$data = array('msg' => $msg,'icono' => $icono);
		$this->session->set_flashdata('msg', $data);
		
		header('location: '.base_url().'verificacion');
	}
}
