    <!-- Section: inner-header -->

    <section class="inner-header bg-lighter">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="mt-10 text-uppercase"><?=$produto->nome?></h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb mt-10 text-right xs-text-center">
                  <li><a href="<?= base_url('/')?>">Home</a></li>                
                  <li class="text-uppercase"><a href="<?= base_url('produtos/'.$produto->tag) ?>"><?=$produto->categoria?></a></li>
                  <li class="active text-uppercase"><?=$produto->nome?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section> 
<section style="border-top:1px solid #eee">
      <div class="container" >
        <div class="section-content">
          <div class="row">
              <div class="col-md-3 hidden-sm hidden-xs">

                <div class="widget">
                  <h4 class="widget-title line-bottom">Mais Produtos</h4>
                  <div class="categories">
                    <ul class="list list-border angle-double-right">
                      <?php
                        foreach($produtos as $linha):
                            echo '<li><a href="'. base_url('produto/'.$linha->codigo).'">'.$linha->nome.'</span></a></li>';
                        endforeach;
                      ?>
                      
                    </ul>
                  </div>
                </div>                  
              </div>  
              <div class="col-md-9">
                <div class="product" >
                  <div class="col-md-5 hidden">
                      <div class="widget">
                            <div class="product-image">
                              <div class="owl-carousel-1col " data-dots="true">                          
                          <?php
                            foreach ($fotos as $foto){
                                $arquivo = $foto->arquivo;
                                $ext = $foto->ext;
                                $foto = $this->config->item('base_url_crm').'uploads/'.$produto->codigo.'/'.$arquivo.'_md'.$ext;
                                $fotoG = $this->config->item('base_url_crm').'uploads/'.$produto->codigo.'/'.$arquivo.'_lg'.$ext;
                          ?>


                                  <div class="item "><a href="<?=$fotoG?>" title="<?=$produto->nome?>" class="image-popup-fit-width" ><img src="<?=$foto?>" class="img-thumbnail"></a></div>

                          
                          <?php
                            }
                          ?>                  

                      
                             </div>
                            </div> 
            
         
    
                        </div>
                      
                  </div>
                  <div class="col-md-7 ">
                    <div class="product-summary">
                      <h2 class="product-title"><?=$produto->nome?></h2>
                      <?php
                      if($produto->referencia):
                      ?>
                      <div class="product_review">
                        <ul class="review_text list-inline">
                          <li>Referência: <strong><?=$produto->referencia?></strong></li>
                        </ul>
                      </div>
                      <?php
                      endif;
                      ?>
                      <div class="short-description">
                          <p>
                              <?=$produto->descricao?>
                          </p>
                      </div>

                    </div>
                  </div>


                    <div class="zoom-gallery">
                          <?php
                            foreach ($fotos as $foto){
                                $arquivo = $foto->arquivo;
                                $ext = $foto->ext;
                                $foto = $this->config->item('base_url_crm').'uploads/'.$produto->codigo.'/'.$arquivo.'_md'.$ext;
                                $fotoG = $this->config->item('base_url_crm').'uploads/'.$produto->codigo.'/'.$arquivo.'_lg'.$ext;
                          ?>


                        <a href="<?=$fotoG?>" title="<?=$produto->nome?>" class="image-popup-fit-width" ><img src="<?=$foto?>" class="img-thumbnail" ></a>

                          
                          <?php
                            }
                          ?>                         

                    </div>

                    
                    <?php
                        if($produto->caracteristicas):
                    ?>
                  <div class="col-md-12">
                    <div class="horizontal-tab product-tab">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Descrição técnica</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            <p>
                                <?=$produto->caracteristicas?>
                            </p>

                        </div>
                        <div class="tab-pane fade" id="tab2">

                        </div>
                        <div class="tab-pane fade" id="tab3">

                        </div>
                      </div>
                    </div>
                  </div>
                    <?php
                        endif;
                    ?>                    
                </div>
              </div>    
          </div>
        </div>
      </div>
    </section>