<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
        
        
        /**
        * Layout default utilizado pelo controlador.
        */
        public $layout = 'default';

        /**
        * Titulo default.
        */
        public $title = 'Clientes | Murara - Engenharia | Construções';

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
            $this->load->model('cliente_model');
            $this->load->helper('date');
        }         
        
	public function index()
	{

            $dados = array(
              'clientes' => $this->cliente_model->getAll(),
            );               
            // Carregando a view.       
            $this->load->view('clientes', $dados);		
	}
      
    
}
