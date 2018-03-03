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

<div class=" text-center "  >
    <div class="container topspace35 " style="margin-bottom: 15px">
  <div class='row no-padding '>
      <div class='col-sm-12 no-padding '>
       
<!--  :::  SERVICES ::: -->
<section class="services zeroM " >
    <div class="container" >
    	
        <?php
            if($eventos):
                foreach ($eventos as $linha):
                $foto = $this->foto_model->getByAlbum($linha->id,'evento', 1);
        ?>
        <div class="col-md-4 col-sm-6 col-xs-12 wow zoomIn" data-wow-duration="0.50s" data-wow-delay="0.65s" style="min-height: 430px"  >
           
          <div class="info-block-bordered" style="padding: 4px;cursor: pointer" onClick="document.location = '<?=base_url('eventos/visualiza/'.$linha->id)?>'">
              <div class="item text-justify text-center-xs" style="margin: 0;padding: 0;width: 100%" >
                   
                <img class="img img-responsive img-center" src="<?php
                if($foto):
                   echo base_url('assets/img/'.$foto->pasta.'/'.$foto->id_album.'/p_'.$foto->id.'.'.$foto->extensao);
                endif;
                ?>" width="350" height="229" />
                
                <div class="overlay">
                    <a class="link" href="<?=base_url('eventos/visualiza/'.$linha->id)?>" title=""><i class="fa fa-link square"></i></a>
                </div>
                <h2><?=$linha->nome?></h2>
               <?=character_limiter($linha->descricao,125)?>               
              </div>
  
          </div>
               
        </div>       
        <?php
                endforeach;
            endif;
        ?>
 
    </div>
</section>
<!-- ::: END ::: -->                     
    </div>
  </div>
</div>   
    
</div>  
<div class="clearfix"></div>
<?php
    $this->load->view('rodape-contato');
?>


      
<script>
var cboxOptions = {
  width: '95%',
  height: '95%',
  maxWidth: '960px',
  maxHeight: '660px',
  iframe:true,
  fixed:true
};     
 $(document).ready(function(){

    $(".youtube").colorbox({iframe:true, innerWidth:853, innerHeight:480,fixed:true});
    $(".mapahome").colorbox({iframe:true, innerWidth:'60%', innerHeight:480,fixed:true,scrolling: false});
    $(".link-blog").colorbox(cboxOptions);
    
    var sliderFornecedor = $('.slider-fornecedor').bxSlider({
    auto: false,
    pager: false,
    autoHover: false,
    autoControls: true,        
  minSlides: 2,
  maxSlides: 6,
  slideWidth: 170,
  slideMargin: 10
    });    

  
});
// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause:'hover',
    interval: 4000,
  });
});
  
</script>    
