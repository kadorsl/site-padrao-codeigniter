<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Produto_model extends CI_Model {
	
	public function getAll($limit= NULL) {	
                $this->db->select('produto.*,categoria.nome as categoria, categoria.tag'); 
		$this->db->from('produto');                
                $this->db->join('produtofoto','produtofoto.prod_codigo = produto.codigo','LEFT');   
                $this->db->join('categoria','categoria.codigo = produto.cat_codigo','LEFT'); 
                $this->db->where('categoria.status',1); 
                //$this->db->where_not_in('portfoliofoto.image','NULL'); 
                $this->db->order_by('produto.created_at DESC');
                $this->db->group_by('produto.codigo');
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
	public function getOffset($offset, $limit= NULL, $categoria = NULL) {	
                $this->db->select('produto.*,categoria.nome as categoria, categoria.tag'); 
		$this->db->from('produto');                
                $this->db->join('produtofoto','produtofoto.prod_codigo = produto.codigo','LEFT');   
                $this->db->join('categoria','categoria.codigo = produto.cat_codigo','LEFT'); 
                $this->db->where('categoria.status',1); 
                if($categoria):
                    $this->db->where('categoria.codigo',$categoria); 
                endif;                
                //$this->db->where_not_in('portfoliofoto.image','NULL'); 
                $this->db->order_by('produto.created_at DESC');
                $this->db->group_by('produto.codigo');
                if($limit):
                    $this->db->limit($limit);
                endif;
                if($offset != FALSE):
                    $this->db->offset($offset);
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
	public function getByCategoria($categoria, $limit= NULL) {	
                $this->db->select('produto.*,categoria.nome as categoria, categoria.tag'); 
		$this->db->from('produto');                
                $this->db->join('produtofoto','produtofoto.prod_codigo = produto.codigo','LEFT');   
                $this->db->join('categoria','categoria.codigo = produto.cat_codigo','LEFT'); 
                $this->db->where('categoria.status',1); 
                $this->db->where('categoria.codigo',$categoria); 
                //$this->db->where_not_in('portfoliofoto.image','NULL'); 
                $this->db->order_by('produto.created_at DESC');
                $this->db->group_by('produto.codigo');
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
                $this->db->select('produto.*,categoria.nome as categoria, categoria.tag'); 
                $this->db->where('produto.codigo',$id);   
                $this->db->join('categoria','categoria.codigo = produto.cat_codigo','LEFT'); 
                $this->db->where('categoria.status',1);           
                $this->db->limit(1);  
                $query = $this->db->get('produto');
                
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
     
        
        public function getFotos($id = NULL, $limit = NULL, $order = NULL) {
                if($id != NULL):
                    $this->db->where('prod_codigo',$id);
                endif;
                if($limit):
                    $this->db->limit($limit);
                endif;
                
                if($order):
                    $this->db->order_by($order);
                else:  
                    $this->db->order_by('ordem');
                endif;
                
                
                
                $query = $this->db->get('produtofoto');
                
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
                

           
        }
    
          
}