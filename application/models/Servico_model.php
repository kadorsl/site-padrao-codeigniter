<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Servico_model extends CI_Model {
	
	public function getAll($limit= NULL) {	
		$this->db->from('servico');	
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
                $query = $this->db->get('servico');
                
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
     
        
  
      
	public function insere($dados = NULL) {
            if($dados != NULL):
                $this->db->insert('servico', $dados);
                return $this->db->insert_id();
            endif;
	} 
        
	public function update($dados = NULL, $condicao = NULL) {
            if($dados != NULL && $condicao != NULL):
                $this->db->where('id', $condicao)->update('servico',$dados);
                return TRUE;
            else:
                return FALSE;
            endif;
	}     
        
	public function delete($condicao = NULL) {
            if($condicao != NULL):
                $this->db->where('id', $condicao)->delete('servico');
                return TRUE;
            else:
                return FALSE;
            endif;
	}             
}