    <!-- Section: inner-header -->

    <section class="inner-header bg-lighter">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="mt-10"><?=$texto->titulo?></h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb mt-10 text-right xs-text-center">
                  <li><a href="<?= base_url('/')?>">Home</a></li>                
                <li class="active"><?=$texto->titulo?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>   

<!-- Section: About  -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="line-bottom mt-0">A MARCA</h3>
              
              <p><?=$texto->descricao?></p>

            </div>
            <div class="col-md-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-hover-border mt-sm-60">
                    <img class="img-fullwidth" src="<?=base_url()?>assets/images/about/d1.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-hover-border mt-sm-30">
                    <img class="img-fullwidth" src="<?=base_url()?>assets/images/about/d2.jpg" alt="">
                  </div>
                  <div class="img-hover-border mt-15 mt-sm-30">
                    <img class="img-fullwidth" src="<?=base_url()?>assets/images/about/d3.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Why Choose Us -->
    <section class="bg-silver-light bg-no-repeat bg-img-left-top" >
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h3 class="line-bottom mt-0">Por que fazer cambagem é seguro?</h3>
              <div id="accordion1" class="panel-group accordion mb-0">
                <div class="panel">
                  <div class="panel-title"> 
                      <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> Diferencial 1</a> </div>
                  <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>
                        A cambagem tem como função distribuir o peso do veículo sobre a banda de rodagem dos
                        pneus de maneira uniforme, evitando assim, o desgaste irregular dos mesmos.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> 
                          Diferencial 2</a> </div>
                  <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>
                          Com a cambagem são evitadas alterações indesejáveis na direção.
                      </p>                      
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span> 
                          Diferencial 3</a> </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>
                          Os esforços laterais que ocorrem nas curvas são compensados pela cambagem, que gera maior
estabilidade para o veículo.
                      </p>                      
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span> 
                          Diferencial 4</a> </div>
                  <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>
                          Os equipamentos da Gaho Ferramentas Especiais oferecem dispositivos de alta durabilidade e
que não danificam o rolamento do veículo.
                      </p>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 hidden">
              <h3 class="line-bottom mt-0 mt-sm-40">O que dizem nossos clientes</h3>
              <div class="bxslider bx-nav-top">
                <div class="media border-1px bg-white sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="<?=base_url()?>assets/images/testimonials/1.jpg">
                    </div>
                    <div class="ml-100 ">
                      <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>                      
                      <p class="author mt-10">- <span class="text-theme-colored">Rodrigo</span> <small><em>Diretor I10</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="media border-1px bg-white sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="<?=base_url()?>assets/images/testimonials/1.jpg">
                    </div>
                    <div class="ml-100 ">
                      <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>      
                      <p class="author mt-10">- <span class="text-theme-colored">Rodrigo</span> <small><em>Diretor I10</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="media border-1px bg-white sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="<?=base_url()?>assets/images/testimonials/1.jpg">
                    </div>
                    <div class="ml-100 ">
                      <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>      
                      <p class="author mt-10">- <span class="text-theme-colored">Rodrigo</span> <small><em>Diretor I10</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="media border-1px bg-white sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="<?=base_url()?>assets/images/testimonials/1.jpg">
                    </div>
                    <div class="ml-100 ">
                      <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>      
                      <p class="author mt-10">- <span class="text-theme-colored">Rodrigo</span> <small><em>Diretor I10</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="media border-1px bg-white sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                     <img width="75" class="img-circle" alt="" src="<?=base_url()?>assets/images/testimonials/1.jpg">
                    </div>
                    <div class="ml-100 ">
                      <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>      
                      <p class="author mt-10">- <span class="text-theme-colored">Rodrigo</span> <small><em>Diretor I10</em></small></p>
                    </div>
                  </div>
                </div>
                <div class="media border-1px bg-white sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                     <img width="75" class="img-circle" alt="" src="<?=base_url()?>assets/images/testimonials/1.jpg">
                    </div>
                    <div class="ml-100 ">
                      <p>Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto </p>      
                      <p class="author mt-10">- <span class="text-theme-colored">Rodrigo</span> <small><em>Diretor I10</em></small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

