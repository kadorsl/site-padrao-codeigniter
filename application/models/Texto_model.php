<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Texto_model extends CI_Model {
	
	public function getAll($tipo= NULL) {	
		$this->db->from('texto');	 
                $this->db->order_by('titulo');
		$query = $this->db->get();
		
		if($query -> num_rows() >= 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
        public function getByID($id = NULL) {
            if($id != NULL):
                $this->db->where('codigo',$id);
                $this->db->limit(1);                
                $query = $this->db->get('texto');
                
		if($query -> num_rows() >= 1)
		{
			return $query->row();
		}
		else
		{
			return FALSE;
		}                
                
            else:
                return FALSE;
            endif;
        }
     
        
        public function getByController($id = NULL) {
            if($id != NULL):
                $this->db->where('controller',$id);
                $this->db->order_by('titulo');             
                $query = $this->db->get('texto');
                
		if($query -> num_rows() >= 1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}                
                
            else:
                return FALSE;
            endif;
        }        
      
	public function insere($dados = NULL) {
            if($dados != NULL):
                $this->db->insert('texto', $dados);
                return $this->db->insert_id();
            endif;
	} 
        
	public function update($dados = NULL, $condicao = NULL) {
            if($dados != NULL && $condicao != NULL):
                $this->db->where('codigo', $condicao)->update('texto',$dados);
                return TRUE;
            else:
                return FALSE;
            endif;
	}     
        
	public function delete($condicao = NULL) {
            if($condicao != NULL):
                $this->db->where('codigo', $condicao)->delete('texto');
                return TRUE;
            else:
                return FALSE;
            endif;
	}             
}