<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {
    
        /**
        * Layout default utilizado pelo controlador.
        */
        public $layout = 'default';

        /**
        * Titulo default.
        */
        public $title = 'Contato | Gaho - Ferramentas Especiais';

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
	}        
	public function index()
	{

            
            $this->load->view('contato');		
	}
        public function enviar(){
            //VERIFICA SE O USUARIO ESTÁ LOGADO PARA PREENCHER OS DADOS DO FORMULARIO
            $this->layout = '';
            $this->form_validation->set_rules('form_name','NOME','trim|required|max_length[200]|ucwords');
            $this->form_validation->set_rules('form_email','E-MAIL','trim|required|max_length[100]|strtolower|valid_email');                                   
            $this->form_validation->set_rules('form_phone','TELEFONE','trim|required');
            $this->form_validation->set_rules('form_subject','CIDADE','trim|required');            
            $this->form_validation->set_rules('form_message','MENSAGEM','trim|required'); 
            //$this->form_validation->set_rules('codigo','CODIGO DE VERIFICAÇÃO','trim|required|callback_verificaCodigo');
            
            if($this->form_validation->run()== TRUE): 
                
                    /*$config['protocol'] = 'smtp';
                    $config['charset'] = 'utf-8';
                    $config['mailtype'] = 'html';
                    $config['wordwrap'] = TRUE;
                    /*$config['smtp_host'] = "smtp.i10.art.br"; // eg. tls://email-smtp.eu-west-1.amazonaws.com
                    $config['smtp_user'] = "rodrigo@i10.art.br";
                    $config['smtp_pass'] = "cev123paz";
                    $config['smtp_port'] = "587";*/
                    /*$config['crlf'] = "\r\n";
                    $config['newline'] = "\r\n";*/


                    $this->email->initialize();
                    $this->email->from('sac@gaho.com.br', 'GAHO Site');
                    $this->email->to('sac@gaho.com.br'); 
                    $this->email->subject('Contato através do site - GAHO');
                    $this->email->message('<h2>CONTATO</h2>'
                            . '            Nome: <strong>'.$this->input->post('form_name').'</strong> <br>'
                            . '            Telefone: <strong>'.$this->input->post('form_phone').'</strong> <br>'
                            . '            E-mail: <strong>'.$this->input->post('form_email').'</strong><br>'
                            . '            Cidade: <strong>'.$this->input->post('form_subject').'</strong><br>'
                            . '            Mensagem: <strong>'.$this->input->post('form_message').'</strong>'
                                         );
                    $this->email->set_mailtype('html');
                    $this->email->send();  
                    
                    $this->email->from('sac@gaho.com.br', 'GAHO Site');                   
                    $this->email->to($this->input->post('form_email'));
                    $this->email->subject('Contato através do site - GAHO');
                    $this->email->message('<h2>Olá '.$this->input->post('form_name').'</h2>Recebemos seu contato através do site, em breve estaremos retornando seu pedido ou dúvida, obrigado!');
                    $this->email->set_mailtype('html');
                    $this->email->send();          
                    
                 $this->session->set_flashdata('enviarok','Seu e-mail foi enviado com sucesso, em breve estaremos retornando seu contato, Obrigado!');
                 echo json_encode(array('status'=>'true','message'=>'Seu e-mail foi enviado com sucesso, em breve estaremos retornando seu contato, Obrigado!'));

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