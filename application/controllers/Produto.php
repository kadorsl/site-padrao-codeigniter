<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {
        
        
        /**
        * Layout default utilizado pelo controlador.
        */
        public $layout = 'default';

        /**
        * Titulo default.
        */
        public $title = 'Produtos | Gaho - Ferramentas Especiais';

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
            $this->load->model('produto_model');
            $this->load->helper('date');
        }         
        
	public function index()
	{
      
            // Carregando a view.       
            $this->load->view('home');		
	}
        
	public function categoria($tag=NULL)
	{
   
            if($tag):
                $categoria = $this->categoria_model->getByTag($tag);
                $dados = array(
                  'categoria' => $categoria,                    
                  'produtos' => $this->produto_model->getByCategoria($categoria->codigo),    
                );         
                // Carregando a view.       
                $this->load->view('produto-categoria',$dados);                
            endif;
		
	}  
	public function listAll($offset=NULL,$tag = NULL)
	{
            $this->layout = '';
            if($offset):
                if($tag):
                    $categoria = $this->categoria_model->getByTag($tag);
                    $categoria = $categoria->codigo;
                else:
                    $categoria = NULL;
                endif;
                $dados = $this->portfolio_model->getOffset($offset,6,$categoria);
                if($dados):
                        $c = 0;
                        foreach ($dados as $linha):
                            $capa = $this->portfolio_model->getFotos($linha->codigo,1);
                            if($capa):
                                $imagem = $this->config->item('base_url_crm').'uploads/'.$capa->image.'_md'.$capa->ext;
                            else:
                                $imagem = '';
                            endif;    
                            if(!$imagem && $linha->video):
                                $dados[$c]->video = $linha->video;
                            else:
                                $dados[$c]->video = '';
                            endif;
                            $dados[$c]->imagem = $imagem;
                            $dados[$c]->link =
                                                base_url('portfolio/v/'.$linha->codigo.'/'. 
                                                mb_strtolower(
                                                url_title(
                                                            convert_accented_characters($linha->nome), 'dash', TRUE
                                                         )
                                                ));   
                            $dados[$c]->tag = url_title($linha->categoria, 'underscore', TRUE);
                            $c++;
                        endforeach;
                endif;
                echo json_encode($dados);
               
            endif;
		
	}          
	public function visualiza($codigo=NULL)
	{
            $produto = $this->produto_model->getByID($codigo);
            $dados = array(
              'produto' => $produto,   
              'produtos' => $this->produto_model->getByCategoria($produto->cat_codigo),   
              'fotos' => $this->produto_model->getFotos($codigo),   
            );         
            // Carregando a view.       
            $this->load->view('produto-visualiza',$dados);		
	}        
     
    
}
