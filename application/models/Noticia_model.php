<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Noticia_model extends CI_Model {
	
	public function getAll($limit= NULL) {	
		$this->db->from('noticia');	 
                $this->db->order_by('created_at DESC, id DESC');
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
                $this->db->limit(1);                
                $query = $this->db->get('noticia');
                
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
     
        public function getFoto($id = NULL, $limit = NULL) {
            if($id != NULL):
                $this->db->where('not_id',$id);   
                $this->db->order_by('ordem');
                if($limit):
                    $this->db->limit($limit);
                endif;
                $query = $this->db->get('noticiafoto');
                
		if($query -> num_rows() >= 1)
		{
                        if($limit && $limit == 1):
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
  
      
	public function insere($dados = NULL) {
            if($dados != NULL):
                $this->db->insert('noticia', $dados);
                return $this->db->insert_id();
            endif;
	} 
        
	public function update($dados = NULL, $condicao = NULL) {
            if($dados != NULL && $condicao != NULL):
                $this->db->where('id', $condicao)->update('noticia',$dados);
                return TRUE;
            else:
                return FALSE;
            endif;
	}     
        
	public function delete($condicao = NULL) {
            if($condicao != NULL):
                $this->db->where('id', $condicao)->delete('noticia');
                return TRUE;
            else:
                return FALSE;
            endif;
	}             
}