    <!-- Section: inner-header -->

    <section class="inner-header bg-lighter">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="mt-10 text-uppercase">Notícias</h2>
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
    
    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
            <?php
                if($noticias):
            ?>             
          <div class="blog-posts">
                  
            <?php
                foreach($noticias as $linha):
                    $foto = $this->noticia_model->getFoto($linha->id,1);
                    if(strip_tags(word_limiter($linha->supercomentario, 25)) == ''):
                        $descricao = NULL;
                    else:
                        $descricao = strip_tags(word_limiter($linha->supercomentario, 30));
                    endif;                      
            ?>              
            <div class="col-md-4">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                      <a href="<?= base_url('noticias/'.$linha->id) ?>">
                    <?php
                       if($foto):
                           $foto = $this->config->item('base_url_crm').'uploads/'.$foto->image.'_home'.$foto->ext;
                       else:
                           $foto = base_url('assets/img/semfoto.jpg');
                       endif;
                   ?>                       
                    <img src="<?=$foto?>" alt="" class="img-responsive img-fullwidth"> 
                      </a>
                  </div>
                </div>

                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600"><?=nice_date($linha->created_at, 'd')?></li>
                        <li class="font-12 text-white text-uppercase">
                            <?php
                                switch (nice_date($linha->created_at, 'M')):
                                    case 'Jan': echo'Jan';break;
                                    case 'Feb': echo'Fev';break;
                                    case 'Mar': echo'Mar';break;
                                    case 'Apr': echo'Abr';break;
                                    case 'May': echo'Mai';break;
                                    case 'Jun': echo'Jun';break;
                                    case 'Jul': echo'Jul';break;
                                    case 'Aug': echo'Ago';break;
                                    case 'Sep': echo'Set';break;
                                    case 'Oct': echo'Out';break;
                                    case 'Nov': echo'Nov';break;
                                    case 'Dec': echo'Dez';break;        
                                endswitch;                            
                            ?>
                            
                        </li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="<?= base_url('noticias/'.$linha->id) ?>"><?=$linha->titulo?></a></h4>
                             
                      </div>
                    </div>
                  </div>
                  <p class="mt-10"><?=$descricao?></p>
                  <a href="<?= base_url('noticias/'.$linha->id) ?>" class="btn-read-more">Leia mais...</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
              
            <?php
                 endforeach;
            ?>
            <div class="col-md-12 hidden">
              <nav>
                <ul class="pagination theme-colored">
                  <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                </ul>
              </nav>
            </div>
          </div>
            <?php
                 else:
            ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    Nenhuma notícia no momento!
                </div>
            </div>            
            <?php
                 endif;
             ?>             
        </div>
      </div>
    </section>