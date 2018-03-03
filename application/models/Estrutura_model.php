<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estrutura_model extends CI_Model {
	
	public function verifyGrupoPermission($grupo_id, $controller, $action) {
		
		$this->db->select('id');
		$this->db->from('estrutura');
		$this->db->join('grupo_acl', 'estrutura.id = grupo_acl.estrutura_id');
		$this->db->where('grupo_acl.grupo_id', $grupo_id);
		$this->db->where('estrutura.controller', $controller);
		$this->db->where('estrutura.action', $action);
		
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function verifyUsuarioPermission($usuario_id, $controller, $action) {
	
		/*$this->db->select('estrutura.id, usuario_acl.ativo');
		$this->db->from('estrutura');
		$this->db->join('usuario_acl', 'estrutura.id = usuario_acl.estrutura_id');
		$this->db->where('usuario_acl.usuario_id', $usuario_id);
		$this->db->where('estrutura.controller', $controller);
		$this->db->where('estrutura.action', $action);
	
		$this->db->limit(1);
	
		$query = $this->db->get();
	
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}*/
            return true;
	}
	
	public function getUsuarioPermissions($usuario, $ativo = "true", $execute = true) {
		$this->db->select("estrutura_id");
		$this->db->from("usuario_acl");
		$this->db->where("usuario_id", $usuario);
		$this->db->where("ativo", $ativo);
		
		if($execute) {
			$query = $this->db->get();
			return $query->result();	
		} else
			return $this->db->get_compiled_select();
	}
	
	public function getGrupoPermissions($grupo, $notIn = false, $execute = true) {
		$this->db->select("estrutura_id");
		$this->db->from("grupo_acl");
		$this->db->where("grupo_id", $grupo);
		
		if($notIn) {
			if(is_array($notIn))
				$this->db->where_not_in("estrutura_id", $notIn);
		}
		
		
		
		if($execute) {
			$query = $this->db->get();
			return $query->result();
		} else
			return $this->db->get_compiled_select();
	}
	
	public function carregaMenu($usuario, $grupo) {
		$noUserPermission = $this->getUsuarioPermissions($usuario, "0", true);
		
		$arrayNoPermission = array();
		
		foreach($noUserPermission as $row) {
			$arrayNoPermission[] = $row->estrutura_id;
		}
		
		$groupPermission = $this->getGrupoPermissions($grupo, $arrayNoPermission, true);
		
		$userPermission = $this->getUsuarioPermissions($usuario, "1");
		
		foreach($groupPermission as $row) {
			$arrayGroupPermission[] = $row->estrutura_id;
		}
		
		foreach($userPermission as $row) {
			$arrayUserPermission[] = $row->estrutura_id;
		}
		/*
		echo "<pre>";
		
		
		print_r($arrayGroupPermission);
		print_r($arrayUserPermission);
		
		
		$final = array_merge($arrayGroupPermission, $arrayUserPermission);
		
		$final = array_unique($final);
		print_r($final);
		echo "</pre>";
		*/
		//$this->db->select("estrutura.descricao, estrutura.action, estrutura.controller");
		//$this->db->from("estrutura");
		//$this->db->where
	}
	public function getCidadeImovel() {     
                $this->db->select("cid_id, cid_nome");
                $this->db->join('enderecos','imovel.end_id=enderecos.end_id'); 
                $this->db->join('cidades','cidades.cid_id=enderecos.end_cid_id');                   
                $this->db->group_by('cidades.cid_id');
                $query = $this->db->get('imovel');
                
		if($query -> num_rows() >= 1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}       
	}  
	public function getBairroImovel($cid_id) {     
                $this->db->select("bai_id, bai_nome");
                $this->db->where('enderecos.end_cid_id',$cid_id);
                $this->db->join('enderecos','imovel.end_id=enderecos.end_id');                 
                $this->db->join('bairros','bairros.bai_id=enderecos.end_bai_id'); 
                $this->db->group_by('bairros.bai_id');
                $query = $this->db->get('imovel');
                
		if($query -> num_rows() >= 1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}       
	}            
}