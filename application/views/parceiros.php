<div id="wrapper">
    <!-- content-holder  -->
    <div class="content-holder scale-bg2" style="padding:0 0 0 300px;">
        <!-- top-bar-holder  -->
        <div class="top-bar-holder fw-topbar" style="padding-left:30px">
            <div class="top-bar">
                <div class="top-bar-title">
                    <h2><a href="#" class="ajax">Parceiros</a></h2>
                </div>
                <div class="show-share">
                    <span>Compartilhar</span>
                    <i class="fa fa-chain-broken"></i>
                </div>
                <div class="share-container"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"><a class="closeshare"><i class="fa fa-times"></i></a></div>
            </div>
        </div>
        <!-- top-bar-holder end  -->
        <!-- wrapper-inner  -->
        <div class="wrapper-inner">
                        <!-- content-->
                        <div class="content pad-con2">
                            <!-- page title -->
                            <div class="page-title">
                                 <div class="overlay"></div>
                                 <div class="slider-mask"></div>
                                 <div class="bg"  style="background-image:url(<?=base_url()?>assets/images/bg1.jpg)"></div>
                                 <h2 data-top-bottom="transform: translateY(-150px);" data-bottom-top="transform: translateY(150px);">Parceiros</h2>
                                 <div class="page-title-inner">
                                   <div class="row">
                                     <div class="container-fluid">
                                         <div class="page-title-decor">
                                         </div>
                                     </div>
                                     </div>
                                 </div>
                             </div>
                            <!-- page title end -->
                            <!-- container  -->
                        <div class="row">    
                            <div class="container-fluid">
                                <!-- section  -->
                                <section>
                                    <div class="container small-container">
                                        <?php
                                        if($parceiros):                                            
                                        
                                        ?>
                                        <!-- gallery-items   -->
                                        <div class="gallery-items     grid-small-pad three-coulms box-folio">
                                            
                                            <?php
                                                foreach ($parceiros as $parceiro):
                                                    if($parceiro->arquivo):
                                                        $imagem = $this->config->item('base_url_crm').'uploads/parceiros/'.$parceiro->arquivo.'_lg'.$parceiro->ext;
                                                    else:
                                                        $imagem = base_url('assets/images/logo-no-image.jpg');
                                                    endif;
                                                    if($parceiro->link):
                                                        $link = 'href="'.$parceiro->link.'" target="_blank"';;
                                                    else:
                                                        $link = '';
                                                    endif;
                                            ?>     
                                            <!-- <?=$parceiro->codigo?> -->
                                            <div class="gallery-item">

                                                <div class="grid-item-holder">
                                                    <div class="box-item">
                                                        <a <?=$link?>>
                                                        <img  src="<?=$imagem?>"   alt=""> 
                                                        <div class="overlay"></div>
                                                        </a>  
                                                       
                                                    </div>
                                                    <div class="grid-item">
                                                        <h3><a <?=$link?>><?=$parceiro->nome?></a></h3>
                                                        <?php
                                                            if($link):
                                                                echo '<a href="'.$parceiro->link.'" target="_blank"><span>'.$parceiro->link.'</span></a>';
                                                            endif;
                                                        ?>
                                                        
                                                    </div>
                                                </div>                                                
                                                 
                                            </div>
                                            <!-- <?=$parceiro->codigo?> end -->
                                            <?php
                                                endforeach;
                                            ?>                                            
    
         
                                        </div>
                                        <?php
                                        else:
                                            echo '                    <section class="md-padding"  id="sec1" >

                                                    <div class="container small-container">
                                                        <div class="inner-wrap">
                                                            <h3>NÃO EXISTEM CADASTROS NO MOMENTO</h3>
                                                        </div>
                                                    </div>
                                                </section>';                                        
                                        endif;
                                        ?>
                                        <!-- end gallery items -->
                                    </div>
                                    <!-- container end-->
                                </section>
                                <!-- section end -->

                            </div>
                        </div>
                            <!-- container end-->
                        </div>
                        <!-- content end -->
        </div>
        <!-- wrapper-inner  end -->
    </div>
    <!-- content-holder end -->
</div>
