<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Curso_model extends CI_Model {
	
	public function getAll($limit= NULL) {	
		$this->db->from('curso');	 
                $this->db->order_by('created_at DESC, codigo DESC');
                if($limit):
                    $this->db->limit($limit);
                endif;
		$query = $this->db->get();
		
		if($query -> num_rows() >= 1)
		{
                        if($limit && $limit == 1){
                            return $query->row();
                        }else{
                            return $query->result();
                        }
			
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
                $query = $this->db->get('curso');
                
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