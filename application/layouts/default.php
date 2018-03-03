<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Gaho - Líder Absoluto em equipamentos para cambagem e caster" />
<meta name="keywords" content="cambagem,alinhamento de veículos,caster,suspensão dianteira,suspensão traseira" />
<meta name="author" content="Sacenti Design - www.sacentidesign.com.br" />

<!-- Page Title -->
<title>{title_for_layout}</title>

<!-- Favicon and Touch Icons -->
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/img/favicon.ico">
<link href="<?= base_url() ?>assets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?= base_url() ?>assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?= base_url() ?>assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?= base_url() ?>assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?= base_url() ?>assets/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?= base_url() ?>assets/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?= base_url() ?>assets/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?= base_url() ?>assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?= base_url() ?>assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?= base_url() ?>assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?= base_url() ?>assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?= base_url() ?>assets/css/colors/theme-skin-sky-blue-light.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?= base_url() ?>assets/js/jquery-2.2.4.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?= base_url() ?>assets/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?= base_url() ?>assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url() ?>assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">


  <!-- Header -->
  <header id="header" class="header">
      <div class="header-top  sm-text-center border-top-theme-color-3px p-0 " style="background: #25498e">
      <div class="container" style="background: #25498e">
        <div class="row" >
          <div class="col-md-6">
            <div class="widget no-border m-0">
              <ul class="list-inline xs-text-center text-white mt-5">
                <li class="m-0 pl-10 pr-10"> <a class="text-white"><i class="fa fa-phone text-white"></i> Telefone: 47 3533-1210</a> </li>
                <li class="m-0 pl-10 pr-10">
                  <a class="text-white"><i class="fa fa-envelope-o text-white"></i> E-mail: sac@gaho.com.br</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 pr-0">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-lightbulb icon-flat icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                  <li><a href="https://www.facebook.com/gahoferramentas/" target="_blank"><i class="fa fa-facebook text-white"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCA0bGWlnzLVfeVb36jqEAGQ?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play text-white"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 hidden">
            <a class="btn btn-colored btn-flat btn-theme-colored pb-10 ajaxload-popup" href="<?= base_url('contato') ?>">Peça um orçamento</a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip xs-pull-center mt-20" href="<?= base_url('/') ?>">
              <img src="<?= base_url() ?>assets/images/logo-wide.png" alt="">
            </a>
            <ul class="menuzord-menu">
              <li <?php if($this->uri->segment(1) == '') echo 'class="active"'; ?>><a href="<?= base_url('/') ?>">HOME</a>
  
              </li>
              <li <?php if($this->uri->segment(1) == 'quemsomos') echo 'class="active"'; ?>><a href="<?= base_url('quemsomos') ?>">QUEM SOMOS</a>
  
              </li>
              <?php
              $categorias = $this->categoria_model->getAll();
              if($categorias):
                if(count($categorias)>1):
                ?>
                <li <?php if($this->uri->segment(1) == 'produto' || $this->uri->segment(1) == 'produtos') echo 'class="active"'; ?>><a style="cursor: pointer">PRODUTOS</a>
                      <?php


                              echo '<ul class="dropdown" style="margin-top: -2px;">';
                              foreach ($categorias as $linha):
                                  echo '<li><a href="'.base_url('produtos/'.$linha->tag).'">'.$linha->nome.'</a></li>';
                              endforeach;
                              echo '</ul>';

                      ?>                  


                </li>
                <?php
                else:
                    
                    foreach ($categorias as $linha):
                 ?>    
                <li <?php if($this->uri->segment(1) == 'produto' || $this->uri->segment(1) == 'produtos') echo 'class="active"'; ?>><a style="cursor: pointer" href="<?=base_url('produtos/'.$linha->tag)?>">PRODUTOS</a></li>
             
              <?php
                    endforeach;
                endif;
              endif;
              ?>
              <li <?php if($this->uri->segment(1) == 'noticias') echo 'class="active"'; ?>><a href="<?= base_url('noticias') ?>">NOTÍCIAS</a>
  
              </li>
              <li <?php if($this->uri->segment(1) == 'videos') echo 'class="active"'; ?>><a href="<?= base_url('videos') ?>">VÍDEOS</a>
  
              </li>              
              <li <?php if($this->uri->segment(1) == 'curso') echo 'class="active"'; ?>><a href="<?= base_url('curso/inscricao') ?>">INSCRIÇÃO CURSO</a>
  
              </li>
              <li <?php if($this->uri->segment(1) == 'contato') echo 'class="active"'; ?>><a href="<?= base_url('contato') ?>">FALE CONOSCO</a>
  
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">
      
  {content_for_layout}

  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#444850">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-6">
          <div class="widget dark">
            <img class="mt-10 mb-20" alt="" src="<?= base_url() ?>assets/images/logo-wide-white-footer.png">
            <p class="text-gray">© www.gaho.com.br <?=date("Y")?> - Todos os direitos Reservados</p>

          </div>
        </div>
  

        <div class="col-sm-6 col-md-6 pull-right text-right">
          <div class="widget dark text-right">
              <p class="text-white">Rua Alda Vandresen Philippi, 170 - Ituporanga - SC</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white mr-5"></i> <a class="text-white" >47 3533-1210</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white mr-5"></i> <a class="text-white" >sac@gaho.com.br</a> </li>
            </ul>
            <ul class="social-icons icon-bordered icon-circled icon-sm mt-0">
              <li><a href="https://www.facebook.com/gahoferramentas/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCA0bGWlnzLVfeVb36jqEAGQ?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
 
            </ul>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <a class="scrollToTop" href="<?= base_url() ?>assets/#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?= base_url() ?>assets/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>
