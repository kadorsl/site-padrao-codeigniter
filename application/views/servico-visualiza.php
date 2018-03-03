<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>   
<?php
    if($banner):

         $this->load->view('banner');
    else:
        echo '<section id="slides" class="BGdark slides2" >'
            . '<ul class="bxslider" style="min-height: 150px">'
            . '<li><img class="img-responsive" src="'.base_url('assets/img/slider-padrao.jpg').'"</li>'
            . '</ul>'
            . '</section>';
    endif;
?>
<section id="services-single" class="services zeroM  topspace25 bottomspace25">
            <div class="container topspace25 bottomspace25">
                <div class="row " >
                    <div class="col-sm-12 content-box wow fadeIn text-justify">

                       
                                    <div class="hidden-xs col-sm-5 pull-right no-padding img-empresa " style="margin-top: 65px;margin-bottom: 7px">
                           
                                         <?php
                                         $foto = $this->foto_model->getByAlbum($servico->id,'servico');
                                         if($foto):
                                             foreach ($foto as $foto):
                                                echo '<img src="'.base_url('assets/img/'.$foto->pasta.'/'.$foto->id_album.'/m_'.$foto->id.'.'.$foto->extensao).'" class="img img-responsive img-center"  >    ';
                                             endforeach;
                                         endif;
                                         ?>
                                        
                              
                               
                                    </div>                                            
                                            <h2><?= mb_strtoupper($servico->nome)?></h2>  
                                            <p class="texto-padrao">
                                                <?=nl2br($servico->descricao)?>
                                      
                                              </p>
                                 
                                

 
                       
                          
                            
      

                </div>
            </div>
        </section> 
<div class="clearfix"></div>
<?php
    $this->load->view('rodape-contato');
?>