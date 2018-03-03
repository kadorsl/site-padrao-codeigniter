    <!-- Section: inner-header -->

    <section class="inner-header bg-lighter">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="mt-10 text-uppercase">Vídeos</h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb mt-10 text-right xs-text-center">
                  <li><a href="<?= base_url('/')?>">Home</a></li>                
                <li class="active text-uppercase">Vídeos</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section> 
    
    <section>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php
                if($videos):
            ?>             
          <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
                  
            <?php
                foreach($videos as $linha):
                    //$video = $this->youtube->verifica($linha->link);
            ?>              
                <!-- Portfolio Item Start -->
                <div class="gallery-item photography hidden-xs">
                  
                  <div class="thumb">
                      
                    <img class="img-fullwidth" src="<?php
             
                   echo 'https://i.ytimg.com/vi/'.$linha->link.'/mqdefault.jpg';
              
                ?>" >
                    <a class="popup-youtube" href="http://www.youtube.com/watch?v=<?=$linha->link?>">
                    <div class="overlay-shade"></div></a>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                          
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-youtube" href="http://www.youtube.com/watch?v=<?=$linha->link?>"><i class="fa fa-youtube-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>                  
                  <a class="popup-youtube hidden-xs" href="http://www.youtube.com/watch?v=<?=$linha->link?>">
                    <div class="image-box-details text-center p-20 pt-10 pb-10 mb-10 bg-lighter">
                      <h3 class="title mt-0"><?=$linha->nome?></h3>                                
                    </div>                    
                  </a>
                </div>
               

                <div class="col-xs-12 col-sm-4 col-md-4 hidden-sm hidden-md hidden-lg">
                  <iframe width="360" height="240" src="https://www.youtube.com/embed/<?=$linha->link?>?&showinfo=0" allowfullscreen></iframe>
                  <div class="image-box-details text-center p-20 pt-30 pb-30 bg-lighter">
                    <h3 class="title mt-0"><?=$linha->nome?></h3>

                  </div>
                </div>                
              
                 <!-- Portfolio Item End -->
                
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
                    Nenhum vídeo no momento!
                </div>
            </div>   
                
               
            <?php
                 endif;
             ?>   
              </div>   
        </div>
      </div>
    </section>