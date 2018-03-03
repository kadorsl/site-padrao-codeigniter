<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Evento_model extends CI_Model {
	
	public function getAll($limit= NULL) {	
		$this->db->from('evento');
                $this->db->where('ativo',1);
                $this->db->order_by('id ASC');
                if($limit):
                    $this->db->limit($limit);
                endif;
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
                $this->db->where('id',$id);
                $this->db->where('ativo',1);
                $this->db->limit(1);                
                $query = $this->db->get('evento');
                
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