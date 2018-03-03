    <!-- Section: inner-header -->

    <section class="inner-header bg-lighter">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="mt-10 text-uppercase"><?=$categoria->nome?></h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb mt-10 text-right xs-text-center">
                  <li><a href="<?= base_url('/')?>">Home</a></li>                
                <li class="active text-uppercase">Produtos</li>
                <li class="active text-uppercase"><?=$categoria->nome?></li>
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
                if($produtos):
            ?>             
          <div class="products">
                  
            <?php
                foreach($produtos as $linha):
                    $foto = $this->produto_model->getFotos($linha->codigo,1);  
                    if($foto):
                        $foto = $this->config->item('base_url_crm').'uploads/'.$linha->codigo.'/'.$foto->arquivo.'_home'.$foto->ext;
                    else:
                        $foto = base_url('assets/img/semfoto.jpg');
                    endif;
                         
                     
            ?>              

                <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                  <div class="product pb-0">
                    <a href="<?= base_url('produto/'.$linha->codigo) ?>">  
                    <div class="product-thumb"> 
                      <img alt="" src="<?=$foto?>" class="img-responsive img-fullwidth">
                      <div class="overlay">
      
                        <div class="btn-product-view-details">
                          <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="<?= base_url('produto/'.$linha->codigo) ?>">Ver Detalhes</a>
                        </div>
                      </div>
                    </div>
                    </a>    
                    <div class="product-details text-center bg-lighter pt-15 pb-10">
                      <a href="<?= base_url('produto/'.$linha->codigo) ?>"><h5 class="product-title mt-0"><?=$linha->nome?></h5></a>

                    </div>
                  </div>
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
                    Nenhum produto no momento!
                </div>
            </div>            
            <?php
                 endif;
             ?>             
        </div>
      </div>
    </section>
    
    <!-- Section: inner-header -->

    <section class="inner-header bg-lighter">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-12 xs-text-center">
              <h2 class="mt-10 text-uppercase">TREINAMENTO</h2>
            </div>

          </div>
        </div>
      </div>
    </section>     
    
    
    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
            <?php
                if($produtos):
            ?>             
          <div class="products">
                  
            <?php
                foreach($produtos as $linha):
                    $foto = $this->produto_model->getFotos($linha->codigo,1);  
                    if($foto):
                        $foto = $this->config->item('base_url_crm').'uploads/'.$linha->codigo.'/'.$foto->arquivo.'_home'.$foto->ext;
                    else:
                        $foto = base_url('assets/img/semfoto.jpg');
                    endif;
                         
                     
            ?>              

                <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                  <div class="product pb-0">
                    <a href="<?= base_url('produto/'.$linha->codigo) ?>">  
                    <div class="product-thumb"> 
                      <img alt="" src="<?=$foto?>" class="img-responsive img-fullwidth">
                      <div class="overlay">
      
                        <div class="btn-product-view-details">
                          <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="<?= base_url('produto/'.$linha->codigo) ?>">Ver Detalhes</a>
                        </div>
                      </div>
                    </div>
                    </a>    
                    <div class="product-details text-center bg-lighter pt-15 pb-10">
                      <a href="<?= base_url('produto/'.$linha->codigo) ?>"><h5 class="product-title mt-0"><?=$linha->nome?></h5></a>

                    </div>
                  </div>
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
                    Nenhum produto no momento!
                </div>
            </div>            
            <?php
                 endif;
             ?>             
        </div>
      </div>
    </section>    