<div class="boxed-layout">
<div class="pane-wrapper clearfix">
<header class="header-middle row normal type-featured" style="min-height:0px">
<div class="limit-wrapper">
<div class="header-middle-content">
</div>
</div>
</header> 
    
    <div id="main-content">
<div id="sub-header" class="layout-left-only has-background">
<div class="meta-header" style="background-color:#666666;background-image:url('<?=base_url('assets/img/header_bg1.jpg')?>');background-repeat:no-repeat;background-size:auto;background-attachment:scroll;">
<div class="limit-wrapper">
<div class="meta-header-inside">
<header class="page-header ">
<div class="page-header-content">
<h1 style="color:#fff;">
<span class="title" itemprop="headline">ESTRUTURA</span>
</h1>
</div>
</header> </div>
</div>
</div>
</div>  
<div id="main" role="main" class="layout-left-only" style="background:url('<?=base_url('assets/img/background-textura.png')?>');">
<div class="limit-wrapper">
    <div class="row page-wrapper"   >

<article id="post-30"  >
    <div class="page-content"  >
    <div class="row " >
    <div class="wpv-grid grid-1-1  wpv-first-level first unextended" style="padding-top:0px;padding-bottom:0px" id="wpv-column-422572fbd816342477c818006195f379">
        <h2>Ambiente</h2>
        <p>
O Centro Vida e Paz, situado em uma colina em meio a jardins, bosque, piscina, plantas

ornamentais, pássaros, aves exóticas... é um ambiente que inspira Paz e tranquilidade.

Seus cômodos são simples, mas aconchegantes, dispõe de infraestrutura para

hospedar as pessoas durante o tratamento.            
        </p>
        
<section class="portfolios isotope normal row title-overlay no-description " id="59114e8377a7d">
<ul class="clearfix fit-rows portfolio-items" data-columns="4">
    
    
      <?php
        if($fotos):
            
            foreach ($fotos as $linha):
           // $capa = $this->showroom_model->getFotos($linha->codigo,1);
      ?>
<li data-id="325" data-type="image-lightbox" class="has-title no-description grid-1-4 has-button state-closed">
<div class="portfolio-item-wrapper">
<div class="portfolio_image">
<div class="thumbnail" style="max-height:400px">
<img width="262" height="175" src="<?php echo  $this->config->item("base_url_crm").'/uploads/'.$linha->image.'_md'.$linha->ext;?>" class="attachment-portfolio-loop-4 size-portfolio-loop-4 wp-post-image" alt="" 
     sizes="(max-width: 262px) 100vw, 262px"/> </div> 
</div>
<span class="thumbnail-overlay">
<span class="meta">
<div class="more-button ">
<a class="button button-border accent1 hover-accent1  vamtam-lightbox image" rel="album" target="_self" href="<?php echo  $this->config->item("base_url_crm").'/uploads/'.$linha->image.'_lg'.$linha->ext;?>">
Ampliar </a>
</div>
</span>
</span>
</div>
</li>    

      
      <?php
            endforeach;
       endif;
      ?>    


 </ul>
</section>        
      </div>

     

<div class="sep"></div>

<?php /*
<div class="row ">
    <div class="wpv-grid grid-1-1  wpv-first-level first unextended" style="padding-top:10px;padding-bottom:40px" id="wpv-column-62100bf4c954e7e9eaae9e109644d016">
        <div class="row ">
            <div class="wpv-grid grid-1-4  first unextended animation-from-left animated-active" style="padding-top:0px;padding-bottom:0px" id="wpv-column-9208d9b891e2a0a178972a3ed098a919"><h1 style="text-align: center;"><span class='icon shortcode theme ' style='font-size:50px !important;color:#D14D42;'>&#57463;</span></h1>
<h2 style="text-align: center;">History</h2>
<p style="text-align: center;">Never doubt that a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has.</p>
<p style="text-align: center;"><a target="_self" style='font-size: 12px;' class="button vamtam-button accent1  button-border hover-accent1 "><span class="btext">Read more</span></a>
            </div>
<div class="wpv-grid grid-1-4  unextended animation-from-left animated-active" style="padding-top:0px;padding-bottom:0px" id="wpv-column-c3729b51bd704d286b8fdb5e4a43af3e"><h1 style="text-align: center;"><span class='icon shortcode theme ' style='font-size:50px !important;color:#D14D42;'>&#57564;</span></h1>
<h2 style="text-align: center;">Our moto</h2>
<p style="text-align: center;">Never doubt that a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has.</p>
<p style="text-align: center;"><a target="_self" style='font-size: 12px;' class="button vamtam-button accent1  button-border hover-accent1 "><span class="btext">Read more</span></a>
</div>
<div class="wpv-grid grid-1-4  unextended animation-from-right animated-active" style="padding-top:0px;padding-bottom:0px" id="wpv-column-80f5967c7283b88a84107d19c0d3e4a3"><h1 style="text-align: center;"><span class='icon shortcode theme ' style='font-size:50px !important;color:#D14D42;'>&#57503;</span></h1>
<h2 style="text-align: center;">What we do</h2>
<p style="text-align: center;">Never doubt that a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has.</p>
<p style="text-align: center;"><a target="_self" style='font-size: 12px;' class="button vamtam-button accent1  button-border hover-accent1 "><span class="btext">Read more</span></a>
</div>
<div class="wpv-grid grid-1-4  unextended animation-from-right animated-active" style="padding-top:0px;padding-bottom:0px" id="wpv-column-5d0ca1e67048561ffa56ba35e89c498b"><h1 style="text-align: center;"><span class='icon shortcode theme ' style='font-size:50px !important;color:#D14D42;'>&#57466;</span></h1>
<h2 style="text-align: center;">Why us</h2>
<p style="text-align: center;">Never doubt that a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has.</p>
<p style="text-align: center;"><a target="_self" style='font-size: 12px;' class="button vamtam-button accent1  button-border hover-accent1 "><span class="btext">Read more</span></a>
</div></div></div>

</div>
 * */

?>
</div>
</article>
</div>
</div>  
</div> 
</div> 

    
<?php
    $this->load->view('rodape-contato');
?>   
</div> 
</div> 
