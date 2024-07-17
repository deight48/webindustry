<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){ parent::__construct(); }
	
	public function index()
	{
		if($this->session->userdata('datausuario'))$this->load->view('main');
		else $this->load->view('auth-login');
	}
	
	public function dologin()
	{
		//$pass = $this->input->post('userpassword');
		//$hash = '$2y$10$YZB4J3DQJIMsayqMpuLCWOurdy.9fKqSI4Q716CyZzz65QOCe.Nw60
		//$hash = password_hash($pass, PASSWORD_DEFAULT, [15]);
		//echo password_verify($pass, $hash);
		$this->load->model('Consultas_model');
		$usuario = $this->Consultas_model->queryindividual('*','usuarios',['usuario' => $this->input->post('username'),'status' => 1]);
		
		if(!empty($usuario)){
			if(password_verify($this->input->post('userpassword'),$usuario->passwd)){
				$modulos = $this->Consultas_model->modulos(['p.idperfil' => $usuario->idperfil,'p.status' => 1]);
				$menu = $this->Consultas_model->menus(['pm.idperfil' => $usuario->idperfil,'pm.status' => 1]);				
				$data = array(
					'usuario' => $usuario,
					'modulos' => $modulos,
					'menu' => $menu,
				);
				$this->session->set_userdata('datausuario',json_encode($data));
			}else $this->session->set_flashdata('loginError', 'Contrase&ntilde;a incorrecta');
		}else $this->session->set_flashdata('loginError', 'Usuario no existe');
		
		header('location:' .base_url());
	}
	
	public function logout(){
		$this->session->sess_destroy();
        header('location:' .base_url());
	}
	
	public function error()
	{
	    $this->load->view('mantenimiento');
	}
	public function tabla($modulos, $menu)
	{
		$tabla = '<table style="border:1px solid #ececec"><th>Id</th><th>Perfil</th><th>Status</th><th>IdmodPerfil</th><th>Idmodulo</th>
					<th>Descripcion</th><th>Menu</th><th>Icono</th><th>Url</th><th>Mini</th><th>Orden</th>';
		foreach($modulos as $row):
			$tabla .= '<tr><td>'.$row->idperfil.'</td><td>'.$row->perfil.'</td><td>'.$row->status.'</td><td>'.$row->idmoduloperfil.'</td>
					<td>'.$row->idmodulo.'</td><td>'.$row->descripcion.'</td><td>'.$row->menu.'</td><td>'.$row->icono.'</td>
					<td>'.$row->url.'</td><td>'.$row->mini.'</td><td>'.$row->orden.'</td>';
		endforeach;
		$tabla .= '</table>';
		echo $tabla;
		
		$tabla = '<table style="border:1px solid #ececec"><th>Id</th><th>Idmenu</th><th>Idperfil</th><th>Status</th><th>Idmenu</th>
				<th>Idmodulo</th><th>Descripcion</th><th>Nivel</th><th>Url</th><th>Icono</th><th>Status</th>';
		
		foreach($menu as $row):
			$tabla .= '<tr><td>'.$row->idpermisosmenu.'</td><td>'.$row->idmenu.'</td><td>'.$row->idperfil.'</td><td>'.$row->status.'</td>
					<td>'.$row->idmenu.'</td><td>'.$row->idmodulo.'</td><td>'.$row->descripcion.'</td><td>'.$row->nivel.'</td>
						<td>'.$row->url.'</td><td>'.$row->icono.'</td><td>'.$row->status.'</td>';
		endforeach;
		$tabla .= '</table>';
		echo $tabla;
	}
}
