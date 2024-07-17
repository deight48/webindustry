<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Consultas_model extends CI_Model
{    
	public function __construct(){ parent::__construct(); }
    
	public function modulos($where)
	{
		$this->db->db_debug = TRUE;
		$this->db->select('p.*,mp.*,m.*');
		$this->db->from('perfil p');
		$this->db->join('modulo_perfil mp','mp.idperfil=p.idperfil');
		$this->db->join('modulos m','m.idmodulo=mp.idmodulo');
		$this->db->where($where);
		$this->db->order_by('m.idmodulo','ASC');
		$result = $this->db->get();
		return ($result->num_rows() > 0)? $result->result() : array();
	}
	public function menus($where)
	{
		$this->db->db_debug = TRUE;
		$this->db->select('pm.*,m.*');
		$this->db->from('permisos_menu pm');
		$this->db->join('menu m','pm.idmenu=m.idmenu');
		$this->db->where($where);
		$this->db->order_by('m.idmenu','ASC');
		$result = $this->db->get();
		return ($result->num_rows() > 0)? $result->result() : array();
	}
	public function certificados($w)
	{
		$this->db->db_debug = TRUE;
		$this->db->select('c.*, DATE_FORMAT(c.fecha_inspeccion,"%d/%m/%Y") as fecha,s.descripcion');
		$this->db->from('certificados c');
		$this->db->join('status s','c.idstatus=s.idstatus');
		$this->db->where($w);
		$this->db->order_by('c.idcertificado','DESC');
		$result = $this->db->get();
		return ($result->num_rows() > 0)? $result->result() : array();
	}
	public function queryindividual($q,$t,$where)
    {
		$this->db->db_debug = TRUE;
        $query = $this->db->select($q)->from($t)->where($where)->get();
		return $query->num_rows() > 0? $query->row() : array();
    }
	public function sqlwhere($q,$t,$where)
    {
        $query = $this->db->select($q)->from($t)->where($where)->get();
		return $query->num_rows() > 0? $query->result() : array();
    }
	public function registrar($t, $data)
	{
		$this->db->db_debug = TRUE;
		if ($this->db->insert($t, $data)) return $this->db->insert_id();
		else return 0;
	}
	public function actualizar($t, $data, $where)
	{
		//$this->db->db_debug = TRUE;
		$this->db->where($where);
		if($this->db->update($t, $data)) return true;
        else return false;
	}
}