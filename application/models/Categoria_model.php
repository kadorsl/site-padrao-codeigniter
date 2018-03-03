<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Categoria_model extends CI_Model {
	
	public function getAll($tipo= NULL) {
		$this->db->from('categoria');	
                if($tipo):
                        $this->db->where_not_in('cod_pai',NULL);                                    
                else:
                        $this->db->where('cod_pai',NULL);                                    
                endif;
                $this->db->where('status',1); 
                $this->db->order_by('nome');
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
                $this->db->where('status',1); 
                $this->db->limit(1);                
                $query = $this->db->get('categoria');
                
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
        public function getByTag($tag = NULL) {
            if($tag != NULL):
                $this->db->where('tag',$tag);
                $this->db->where('status',1); 
                $this->db->limit(1);                
                $query = $this->db->get('categoria');
                
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
        public function getByTipo($id = NULL) {
            if($id != NULL):
                $this->db->where('cod_pai',$id); 
                $this->db->where('status',1); 
                $this->db->order_by('nome');
                $query = $this->db->get('categoria');
                
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
           
}