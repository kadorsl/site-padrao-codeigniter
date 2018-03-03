
<section class="inner-header bg-lighter">
  <div class="container pt-70 pb-70">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row"> 
        <div class="col-sm-8 xs-text-center">
          <h2 class="mt-10 text-uppercase"><?=$noticia->titulo?></h2>
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb mt-10 text-right xs-text-center">
              <li><a href="<?= base_url('/')?>">Home</a></li>                
            <li class="active text-uppercase">Notícias</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section> 
<!-- Section: About -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            

           <i class="fa fa-calendar text-theme-colored mr-5"></i> <?=nice_date($noticia->created_at, 'd/m/Y')?>
                    <?=$noticia->descricao?>
            <?php
                if($foto && count($foto) == 1):

                    foreach($foto as $linha):
                            echo ' 
                    
                                             <a data-lightbox="image" href="'.$this->config->item('base_url_crm').'uploads/'.$linha->image.'_lg'.$linha->ext.'"> <img src="'.$this->config->item('base_url_crm').'uploads/'.$linha->image.'_lg'.$linha->ext.'" class=" mr-15 thumbnail pull-left col-xs-12"></a>
                                       
                                         ';
                    endforeach;

                endif;
            ?>              
            <div class="clearfix"></div>            
            <div class="separator separator-rouned">
            </div>
            <div class="row">
            <?php
                if($foto && count($foto) > 1):

                    foreach($foto as $linha):
                            echo ' 
                    
                                      <div class="col-xs-6 col-md-3"> <a class="thumbnail" data-lightbox="image" href="'.$this->config->item('base_url_crm').'uploads/'.$linha->image.'_lg'.$linha->ext.'"> <img src="'.$this->config->item('base_url_crm').'uploads/'.$linha->image.'_thumb'.$linha->ext.'" class="img-fullwidth"> </a> </div>
                                     
                                         ';
                    endforeach;

                endif;
            ?>                 
              
            </div>

          </div>
        </div>
      </div>
    </section>
    
    