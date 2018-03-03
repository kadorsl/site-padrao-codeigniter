<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
        
        
        /**
        * Layout default utilizado pelo controlador.
        */
        public $layout = 'default';

        /**
        * Titulo default.
        */
        public $title = 'Gaho - Ferramentas Especiais';

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
            $this->load->helper(array('url','text'));
            $this->load->model('noticia_model');
            $this->load->model('produto_model');
        }         
        
	public function index()
	{
            
            // Carregando a view.  
            $dados = array( 
                'noticias' => $this->noticia_model->getAll(6),
                'produtos' => $this->produto_model->getAll(6),
                //'banner' => $this->banner_model->getByController('home'), 
                'popup' => true,
            );
        
            // Carregando a view.       
            $this->load->view('home',$dados);	
	}
    
}
