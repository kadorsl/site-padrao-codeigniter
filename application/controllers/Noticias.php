<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {
        
        
        /**
        * Layout default utilizado pelo controlador.
        */
        public $layout = 'default';

        /**
        * Titulo default.
        */
        public $title = 'Notícias | Gaho - Ferramentas Especiais';

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
            array('icheck-1.x/skins/all.css?v=1.0.2','C'),
            array('icheck-1.x/icheck.js?v=1.0.2','J'),  
            array('colorbox/jquery.colorbox-min.js','J'),  
            array('colorbox/example4/colorbox.css','C'),
            array('mapIt/jquery.mapit.js','J'),
        );     
        
        public function __construct() {
            parent::__construct(); 
            $this->load->helper('text');          
            $this->load->model('noticia_model');
        }         
        
	public function index()
	{
            $dados = array(
              'noticias' => $this->noticia_model->getAll(20),              
            );            
            // Carregando a view.       
            $this->load->view('noticias',$dados);		
	}
        
	public function visualiza($id)
	{
         
            $dados = array(
              'noticias' => $this->noticia_model->getAll(4),
              'noticia' => $this->noticia_model->getByID($id),    
              'foto' =>   $this->noticia_model->getFoto($id),    
            );            
            // Carregando a view.       
            $this->load->view('noticias-visualiza',$dados);		
	}  
    
}
