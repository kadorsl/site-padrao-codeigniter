<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Foto_model extends CI_Model {
	
	public function getAll() {	
		$this->db->from('fotos');	 
                $this->db->order_by('principal');
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
                $this->db->limit(1);                
                $query = $this->db->get('fotos');
                
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
        
        public function getByAlbum($id = NULL, $pasta = NULL, $limit = NULL) {
            
            if($id != NULL):
                $this->db->where('id_album',$id);
                $this->db->where('pasta',$pasta);
                $this->db->order_by('principal DESC, ordem ASC');  
                if($limit):
                    $this->db->limit($limit);
                endif;   
                
                $query = $this->db->get('fotos');
                
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
     
        
        public function getByController($id = NULL, $limit = NULL) {
            if($id != NULL):
                $this->db->where('pasta',$id);
                $this->db->order_by('principal');   
                if($limit):
                    $this->db->limit($limit);
                endif;                
                $query = $this->db->get('fotos');
                
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