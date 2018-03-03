<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Parceiro_model extends CI_Model {
	
	public function getAll() {		
		$this->db->from('parceiro');	 
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
                $this->db->limit(1);                
                $query = $this->db->get('parceiro');
                
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
      
          
}