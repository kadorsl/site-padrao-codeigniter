<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->session->set_flashdata('currenturl',uri_string());
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Sacenti Design - Desenvolvimento de Sites e Sistemas WEB">
    <meta name="description" content="Equimatec - Indústria de Máquinas Ltda - Rio do Sul - SC, Interfolhador,Ralador de queijos">
    <meta name="keywords" content="Equimatec - Indústria de Máquinas Ltda - Rio do Sul - SC, Interfolhador,Ralador de queijos">    
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>{title_for_layout}</title>
    <link href="<?=  base_url('assets/img/favicon.ico');?>" rel="shortcut icon" type="image/x-icon" />
    <!-- JQUERY -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?=  base_url('assets/js/bootstrap.min.js');?>"></script>    
    <!-- Latest compiled and minified CSS -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">    -->
    
   
    <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">-->
    <link rel="stylesheet/less" href="<?=  base_url('assets/css/less/bootstrap.less');?>"> 
    <script src="<?=  base_url('assets/js/less.js');?>" type="text/javascript"></script>
    <!-- CSS -->
    {css_for_layout}       


    <!-- JAVASCRIPT-->
    <script type="text/javascript">
        var BASE_URL = "<?php echo base_url();?>";
    </script>    
    {js_for_layout}
    
    <!-- PLUGINS -->
    {plugins_for_layout}
        
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>    
    <!--Respond js -->
    <script src="<?php echo base_url('assets/js/css3-mediaqueries.js'); ?>"></script> 
    <!--eModal -->
    <script src="<?php echo base_url('assets/js/eModal.min.js'); ?>"></script>      
    <!-- FONTES -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>  
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js SUPORTE PARA ELEMENTOS DO I.E 8 -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  



  </head>
  <body>
{content_for_layout}
</body>
</html>