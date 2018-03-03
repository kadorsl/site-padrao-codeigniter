<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User_model extends CI_Model {
	
    // database table name
        var $table = 'pessoa';    
        
        public function getMax() {
            // need the library for hashing the password

            $this->db->select_max('codigo');
            $query = $this->db->get($this->table);
            if($query -> num_rows() >= 1)
              {
                      return $query->row_array();
              }
              else
              {

                      return $this->db->get_compiled_select();
              }          

        }    
    
	public function loginfolha($codigo, $password) {
		$this->db->select('codigo, email, nome');
		$this->db->from('pessoa');
		$this->db->where('codigo', $codigo);
		$this->db->where('senha', $password);
		//$this->db->where('senha', MD5($password));
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if($query -> num_rows() == 1)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}
	public function loginguia($cnpj, $password) {
		$this->db->select('codigo, cnpj, orgao, updated_at');
		$this->db->from('contribuinte');
		$this->db->where('cnpj', $cnpj);
		$this->db->where('senha', $password);
		//$this->db->where('senha', MD5($password));
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if($query -> num_rows() == 1)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}        
        public function inserePessoal($user) {
            // need the library for hashing the password     
            $this->db->insert($this->table, $user);
            return $this->db->insert_id();
        }
        
        public function insereTelefone($id, $user = NULL) {
            if($user != NULL):
                $user['pes_codigo'] = $id;
                $this->db->insert('pessoatelefone', $user);
                return $this->db->insert_id();
            else:
                return FALSE;
            endif;
        }    
	public function insereEndereco($dados = NULL) {
            if($dados != NULL):
                $this->db->insert('enderecos', $dados);
                return $this->db->insert_id();
            endif;
	} 
	public function insereFisica($dados = NULL) {
            if($dados != NULL):
                $this->db->insert('pessoafisica', $dados);
                return $this->db->insert_id();
            endif;
	}   
	public function insereJuridica($dados = NULL) {
            if($dados != NULL):
                $this->db->insert('pessoajuridica', $dados);
                return $this->db->insert_id();
            endif;
	} 
	public function insereLog($dados = NULL) {
            if($dados != NULL):
                $this->db->insert('logpessoa', $dados);
                return $this->db->insert_id();
            endif;
	}          
        
        public function getTipo($tag) {

            $this->db->where('tag', $tag);                 
            $query = $this->db->get('tipopessoa');

            if($query -> num_rows() >= 1)
            {
                    return $query->result();
            }
            else
            {

                    return FALSE;
            }
        }   
        

        public function get($id) {
            $this->db->where('codigo', $id);  
            $query = $this->db->get('pessoa');

            if($query -> num_rows() >= 1)
            {
                    return $query->row_array();
            }
            else
            {

                    return FALSE;
            }
        }  
        
        public function getContribuinte($id) {
            $this->db->where('codigo', $id);  
            $query = $this->db->get('contribuinte');

            if($query -> num_rows() >= 1)
            {
                    return $query->row_array();
            }
            else
            {

                    return $id;
            }
        }   
        public function getContribuinteByCNPJ($cnpj) {
            $this->db->where('cnpj', $cnpj);  
            $query = $this->db->get('contribuinte');

            if($query -> num_rows() >= 1)
            {
                    return $query->row();
            }
            else
            {

                    return $cnpj;
            }
        }           
        public function getById($id,$codpai) {
            $this->db->where('codigo', $id);  
            if($codpai!='admin'):
                $this->db->where('cod_pai',$codpai);
            endif;
            $query = $this->db->get('pessoa');

            if($query -> num_rows() >= 1)
            {
                    return $query->row();
            }
            else
            {

                    return FALSE;
            }
        }   

        public function getTelefone($id) {
            $this->db->where('pes_codigo', $id);  
            $this->db->group_by("numero"); // Produces: GROUP BY title
            $query = $this->db->get('pessoatelefone');

            if($query -> num_rows() >= 1)
            {
                    return $query->result();
            }
            else
            {

                    return FALSE;
            }
        }     
        public function getLog($id,$limit=NULL) {
            $this->db->where('pes_codigo', $id);  
            if($limit):
                $this->db->limit($limit);  
            endif;
            $this->db->order_by('codigo', 'DESC');
            $query = $this->db->get('logpessoa');

            if($query -> num_rows() >= 1)
            {
                    if($limit):
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
	public function delete($condicao = NULL) {
            if($condicao != NULL):
                $this->db->where('pes_codigo', $condicao)->delete('pessoatelefone');
                $this->db->where('pes_codigo', $condicao)->delete('pessoafisica');
                $this->db->where('pes_codigo', $condicao)->delete('pessoajuridica');
                $this->db->where('codigo', $condicao)->delete('pessoa');
                return TRUE;
            else:
                return FALSE;
            endif;
	}   
	public function deleteTelefone($condicao = NULL) {
            if($condicao != NULL):
                $this->db->where('pes_codigo', $condicao)->delete('pessoatelefone');
                return TRUE;
            else:
                return FALSE;
            endif;
	}           


        public function updateEndereco($id, $user) {

            $this->db->where('end_id', $id)->update("enderecos", $user);
            return $id;
            //$this->session->set_flashdata('editarok','Endereço alterado com sucesso!');
        } 

        public function updatePessoal($id, $user) {

            $this->db->where('codigo', $id)->update('pessoa', $user);
            return $id;
            //$this->session->set_flashdata('editarok','Dados pessoais alterados com sucesso!');
        }   
        public function updateContribuinte($id, $user) {

            $this->db->where('codigo', $id)->update('contribuinte', $user);
            return $id;
            //$this->session->set_flashdata('editarok','Dados pessoais alterados com sucesso!');
        }         
}