<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imoveis extends CI_Controller {
        
        
        /**
        * Layout default utilizado pelo controlador.
        */
        public $layout = 'default';

        /**
        * Titulo default.
        */
        public $title = 'Imóveis | Murara - Engenharia | Construções';

        /**
        * Definindo os css default.
        */
        public $css = array('PictoPro/style');

        /**
        * Carregando os js default.
        */
        public $js = array();     
        
        /**
        * Carregando os plugins default.
        */
        public $plugins = array();            

        public function __construct() {
            parent::__construct(); 
            //$this->load->model('links_model');
        }         
        
	public function index()
	{

       
            // Carregando a view.       
            $this->load->view('imoveis');		
	}
      
    
}
