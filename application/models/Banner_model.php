<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Banner_model extends CI_Model {
	
	public function getAll($limit= NULL) {	
		$this->db->from('banner');
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
        public function getByController($id = NULL, $limit = NULL) {
            if($id != NULL):
                $this->db->where('controller',$id);
                if($limit):
                    $this->db->limit($limit);
                endif;     
                $this->db->where('ativo',1);
                $this->db->order_by('id ASC');
                $query = $this->db->get('banner');
                
		if($query -> num_rows() >= 1)
		{
                        if($limit == 1):
                            return $query->row();
                        else:
                            return $query->result();
                        endif;
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