<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {
    
        /**
        * Layout default utilizado pelo controlador.
        */
        public $layout = 'default';

        /**
        * Titulo default.
        */
        public $title = 'Faça sua Inscrição | Gaho - Ferramentas Especiais';

        /**
        * Definindo os css default.
        */
        public $css = array('style','responsive-align','PictoPro/style');

        /**
        * Carregando os js default.
        */
        public $js = array('funcoes-colorbox');     
        
        /**
        * Carregando os plugins default.
        */
        public $plugins = array(
            /*array('icheck-1.x/skins/all.css?v=1.0.2','C'),
            array('icheck-1.x/icheck.js?v=1.0.2','J'),  
            array('colorbox/jquery.colorbox-min.js','J'),  
            array('colorbox/example4/colorbox.css','C'),            */
            array('mapIt/jquery.mapit.js','J'),
        );  
    
	public function __construct() {
		parent::__construct ();
                $this->load->helper(array('array'));
                $this->load->library('form_validation');     
                $this->load->library('email');
                $this->load->library('session');
                $this->load->model('curso_model');
	}        
	public function inscricao()
	{
            $dados = array(
              'curso' => $this->curso_model->getAll(1),              
            );               
            $this->load->view('inscricao',$dados);		
	}
	public function enviar()
	{
            $this->layout = '';
            $this->form_validation->set_rules('nome','NOME','trim|required|max_length[200]|ucwords');
            $this->form_validation->set_rules('email','E-MAIL','trim|required|max_length[100]|strtolower|valid_email');                                   
            $this->form_validation->set_rules('telefone','TELEFONE','trim|required');
            $this->form_validation->set_rules('cidade','CIDADE','trim|required');            
            $this->form_validation->set_rules('endereco','ENDEREÇO','trim|required'); 
            $this->form_validation->set_rules('treinamento','CURSO','trim|required'); 
            //$this->form_validation->set_rules('codigo','CODIGO DE VERIFICAÇÃO','trim|required|callback_verificaCodigo');
            
            if($this->form_validation->run()== TRUE): 
                

                    $this->email->initialize();
                    $this->email->from('sac@gaho.com.br', 'GAHO Site');
                    $this->email->to('sac@gaho.com.br'); 
                    $this->email->subject('Inscrição para curso '.$this->input->post('treinamento').' - GAHO');
                    $this->email->message('<h2>DADOS DO INTERESSADO</h2>'
                            . '            Nome: <strong>'.$this->input->post('nome').'</strong> <br>'
                            . '            Telefone: <strong>'.$this->input->post('telefone').'</strong> <br>'
                            . '            E-mail: <strong>'.$this->input->post('email').'</strong><br>'
                            . '            Endereço: <strong>'.$this->input->post('endereco').'</strong><br>'
                            . '            Cidade: <strong>'.$this->input->post('cidade').'</strong>'
                            . '            <h2>Curso</h2>'
                            . '            <strong>'.$this->input->post('treinamento').'</strong>'
                                         );
                    $this->email->set_mailtype('html');
                    $this->email->send();  
                    
                    $this->email->from('sac@gaho.com.br', 'GAHO Site');                   
                    $this->email->to($this->input->post('email'));
                    $this->email->subject('Inscrição para curso '.$this->input->post('treinamento').' - GAHO');
                    $this->email->message('<h2>Olá '.$this->input->post('nome').'</h2>Recebemos seu pedido de inscrição no curso '.$this->input->post('treinamento').' em breve estaremos retornando seu contato, obrigado!');
                    $this->email->set_mailtype('html');
                    $this->email->send();          
                    
                 $this->session->set_flashdata('enviarok','Pedido de inscrição enviado com sucesso, em breve retornaremos seu contato. Obrigado!');
                 echo json_encode(array('status'=>'true','message'=>'Pedido de inscrição enviado com sucesso, em breve retornaremos seu contato. Obrigado!'));		
            else:
                echo json_encode(array('status'=>'false','message'=>validation_errors()));		
            endif;              
            
	}        
        public function verificaCodigo($val)
        {
            if($val == 4):
                return TRUE;
            else:
                $this->form_validation->set_message('verificaCodigo', 'O Resultado da equação está errado!');
                return FALSE;
            endif;
        }   
        public function mapa()
        {
            $this->layout = 'modal';
            $this->load->view('mapa');
        } 
     
}