<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formularios extends CI_Controller {

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
	
	public function index(){}
	public function certificados()
	{
	    $this->load->model('Consultas_model');
	    $certificados = $this->Consultas_model->certificados(['c.status' => 1, 'c.idstatus' => 4]);
		$this->load->view('main',['certificados' => $certificados]);
	}
	public function brazo()
	{
		$this->load->model('Consultas_model');
		$inspecciones = $this->Consultas_model->sqlwhere('*','inspecciones',['status' => 1]);
		$this->load->view('main',['inspeccion' => $inspecciones]);
	}
	public function regBrazo()
	{
		$this->load->model('Consultas_model');
		$data = null; $status = 500; $clase = 'text-danger'; $id = 0;
		$idcertificado = $this->input->post('idcertificado'); $idform = $this->input->post('idform');
		
		if($idform === 'frmgeneral'){
			$data = array(
				'idgrua' => $this->input->post('idgrua'),
				'ruc' => $this->input->post('ruc'),
				'razon_social' => $this->input->post('empresa'),
				'nro_os' => $this->input->post('nroos'),
				'nro_informe' => $this->input->post('nroinforme'),
				'nro_cert' => $this->input->post('nrocert'),
				'fecha_emision' => $this->input->post('fechaemision'),
				'fecha_inspeccion' => $this->input->post('fechainsp'),
				'lugar_inspeccion' => $this->input->post('lugarinsp'),
				'auditor' => $this->input->post('inspecpor'),
				'norma' => $this->input->post('normaespecif'),
				'procedimiento' => $this->input->post('procinterno'),
				'tipo_equipo' => $this->input->post('tipoequipo'),
				'marca' => $this->input->post('marca'),
				'modelo' => $this->input->post('modelomaquina'),
				'nroidpin' => $this->input->post('nroident'),
				'combustible' => $this->input->post('combustible'),
				'marca_brazo' => $this->input->post('marcamaquina'),
				'tipomodelo_brazo' => $this->input->post('tpmodbrazo'),
				'seriebrazo' => $this->input->post('seriebrazo'),
				'anio_fab' => $this->input->post('anio'),
				'capacidad' => $this->input->post('capamaquina'),
				'ejes' => $this->input->post('ejes'),
				'longitud' => $this->input->post('largo'),
				'ancho' => $this->input->post('ancho'),
				'alto' => $this->input->post('alto'),
				'fecha_registro' => date('Y-m-d H:i:s'),
				'idusuario_registro' => $this->usuario->idusuario,
			);
		}elseif($idform === 'frmhistoria'){
			$data = array(
				'historia1' => $this->input->post('historia1'),
				'obshistoria1' => $this->input->post('obshistoria1'),
				'historia2' => $this->input->post('historia2'),
				'obshistoria2' => $this->input->post('obshistoria2'),
				'historia3' => $this->input->post('historia3'),
				'obshistoria3' => $this->input->post('obshistoria3'),
				);
		}elseif($idform === 'frmcabina'){
			$data = array(
				'cabina1' => $this->input->post('cabina1'),
				'obscabina1' => $this->input->post('obscabina1'),
				'cabina2' => $this->input->post('cabina2'),
				'obscabina2' => $this->input->post('obscabina2'),
				'cabina3' => $this->input->post('cabina3'),
				'obscabina3' => $this->input->post('obscabina3'),
				'cabina4' => $this->input->post('cabina4'),
				'obscabina4' => $this->input->post('obscabina4'),
				'cabina5' => $this->input->post('cabina5'),
				'obscabina5' => $this->input->post('obscabina5'),
				'cabina6' => $this->input->post('cabina6'),
				'obscabina6' => $this->input->post('obscabina6'),
				'cabina7' => $this->input->post('cabina7'),
				'obscabina7' => $this->input->post('obscabina7'),
				'cabina8' => $this->input->post('cabina8'),
				'obscabina8' => $this->input->post('obscabina8'),
			);
		}elseif($idform === 'frmchasis'){
			$data = array(
				'chasis1' => $this->input->post('chasis1'),
				'obschasis1' => $this->input->post('obschasis1'),
				'chasis2' => $this->input->post('chasis2'),
				'obschasis2' => $this->input->post('obschasis2'),
				'chasis3' => $this->input->post('chasis3'),
				'obschasis3' => $this->input->post('obschasis3'),
				'chasis4' => $this->input->post('chasis4'),
				'obschasis4' => $this->input->post('obschasis4'),
			);
		}elseif($idform === 'frmestab'){
			$data = array(
				'estab1' => $this->input->post('estab1'),
				'obsestab1' => $this->input->post('obsestab1'),
				'estab2' => $this->input->post('estab2'),
				'obsestab2' => $this->input->post('obsestab2'),
				'estab3' => $this->input->post('estab3'),
				'obsestab3' => $this->input->post('obsestab3'),
				'estab4' => $this->input->post('estab4'),
				'obsestab4' => $this->input->post('obsestab4'),
				'estab5' => $this->input->post('estab5'),
				'obsestab5' => $this->input->post('obsestab5'),
				'estab6' => $this->input->post('estab6'),
				'obsestab6' => $this->input->post('obsestab6'),
				'estab7' => $this->input->post('estab7'),
				'obsestab7' => $this->input->post('obsestab7'),
			);
		}elseif($idform === 'frmbrazo'){
			$data = array(
				'brazo1' => $this->input->post('brazo1'),
				'obsbrazo1' => $this->input->post('obsbrazo1'),
				'brazo2' => $this->input->post('brazo2'),
				'obsbrazo2' => $this->input->post('obsbrazo2'),
				'brazo3' => $this->input->post('brazo3'),
				'obsbrazo3' => $this->input->post('obsbrazo3'),
				'brazo4' => $this->input->post('brazo4'),
				'obsbrazo4' => $this->input->post('obsbrazo4'),
				'brazo5' => $this->input->post('brazo5'),
				'obsbrazo5' => $this->input->post('obsbrazo5'),
				'brazo6' => $this->input->post('brazo6'),
				'obsbrazo6' => $this->input->post('obsbrazo6'),
				'brazo7' => $this->input->post('brazo7'),
				'obsbrazo7' => $this->input->post('obsbrazo7'),
				'brazo8' => $this->input->post('brazo8'),
				'obsbrazo8' => $this->input->post('obsbrazo8'),
				'brazo9' => $this->input->post('brazo9'),
				'obsbrazo9' => $this->input->post('obsbrazo9'),
				'brazo10' => $this->input->post('brazo10'),
				'obsbrazo10' => $this->input->post('obsbrazo10'),
				'brazo11' => $this->input->post('brazo11'),
				'obsbrazo11' => $this->input->post('obsbrazo11'),
			);
		}elseif($idform === 'frmgancho'){
			$data = array(
				'gancho1' => $this->input->post('gancho1'),
				'obsgancho1' => $this->input->post('obsgancho1'),
				'gancho2' => $this->input->post('gancho2'),
				'obsgancho2' => $this->input->post('obsgancho2'),
				'gancho3' => $this->input->post('gancho3'),
				'obsgancho3' => $this->input->post('obsgancho3'),
				'gancho4' => $this->input->post('gancho4'),
				'obsgancho4' => $this->input->post('obsgancho4'),
				'gancho5' => $this->input->post('gancho5'),
				'obsgancho5' => $this->input->post('obsgancho5'),
				'gancho6' => $this->input->post('gancho6'),
				'obsgancho6' => $this->input->post('obsgancho6'),
				'gancho7' => $this->input->post('gancho7'),
				'obsgancho7' => $this->input->post('obsgancho7'),
				'gancho8' => $this->input->post('gancho8'),
				'obsgancho8' => $this->input->post('obsgancho8'),
			);
		}elseif($idform === 'frmcarga'){
			$data = array(
				'estatica1' => $this->input->post('carga1'),
				'estatica2' => $this->input->post('carga2'),
				'estatica3' => $this->input->post('carga3'),
				'estatica4' => $this->input->post('carga4'),
				'estatica5' => $this->input->post('carga5'),
				'estatica6' => $this->input->post('carga6'),
				'estatica7' => $this->input->post('carga7'),
				'estaticaresult' => $this->input->post('cargaresult'),
				'dinamica1' => $this->input->post('dinamica1'),
				'dinamica2' => $this->input->post('dinamica2'),
				'dinamicaresult' => $this->input->post('dinamicaresult'),
			);
		}
		
		if(!$idcertificado){
			$msg = 'No se pudo registrar el <b>Certificado</b>';
			if($id = $this->Consultas_model->registrar('certificados',$data)){
				$msg = '<b>Certificado</b> Registrado'; $status = 200; $clase = 'text-success';
			}
		}else{
			$msg = 'No se pudo actualizar el <b>Certificado</b>';
			if($this->Consultas_model->actualizar('certificados',$data,['idcertificado' => $idcertificado])){
				$msg = '<b>Certificado</b> Actualizado'; $clase = 'text-success';
			}
		}
		
		$data = array(
			'msg' => $msg,
			'status' => $status,
			'id' => $id,
			'clase' => $clase,
		);
		
		echo json_encode($data);
	}
}
