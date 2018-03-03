    <script src="<?=base_url('/assets/plugins/maskedinput/jquery.maskedinput.min.js')?>"></script>
    
    <!-- Section: inner-header -->

    <section class="inner-header bg-lighter">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="mt-10 text-uppercase"><?= $curso->nome ?></h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb mt-10 text-right xs-text-center">
                  <li><a href="<?= base_url('/')?>">Home</a></li>                
                <li class="active text-uppercase">Cursos</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section> 
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row ">
          <div class="col-md-7">

            <h4 class="mt-0 mb-30 line-bottom">Faça sua pré-inscrição para o treinamento dos equipamentos Gaho</h4>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" method="post" action="<?=base_url('curso/enviar')?>">

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="nome">Nome <small>*</small></label>
                    <input id="form_name" name="nome" class="form-control" type="text" placeholder="Seu Nome" required="">
                  </div>
                  <div class="form-group">
                    <label for="email">E-mail <small>*</small></label>
                    <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Seu E-mail">
                  </div>
                  <div class="form-group">
                    <label for="telefone">Telefone <small>*</small></label>
                    <input id="form_phone" name="telefone" class="form-control telefone required" type="text" placeholder="Seu Telefone" >
                  </div>    
                  <div class="form-group">
                    <label for="endereco">Endereço <small>*</small></label>
                    <input id="endereco" name="endereco" class="form-control required" type="text" placeholder="Digite seu Endereço">
                  </div>                    
                  <div class="form-group">
                    <label for="cidade">Cidade / Estado<small>*</small></label>
                    <input id="cidade" name="cidade" class="form-control required" type="text" placeholder="Digite a Cidade/Estado">
                  </div>
                  <div class="form-group">
                    <label for="treinamento">Treinamento <small>*</small></label>
                    <input id="treinamento" class="form-control disabled" type="text"  disabled="" value="<?php
                    echo $curso->nome;
                    if($curso->periodo){
                        echo ' de '.$curso->periodo;
                    }
                     ?>">
                    <input  name="treinamento" type="hidden" value="<?php
                    echo $curso->nome;
                    if($curso->periodo){
                        echo ' de '.$curso->periodo;
                    }
                     ?>">                    
                  </div>     
                  

                  <div class="form-group">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Aguarde...">Enviar Solicitação de Treinamento</button>
                    
                  </div>
                </div>
              </div>

            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
            jQuery("input.telefone")
                .mask("(99) 9999-9999?9")
                .focusout(function (event) {  
                    var target, phone, element;  
                    target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
                    phone = target.value.replace(/\D/g, '');
                    element = $(target);  
                    element.unmask();  
                    if(phone.length > 10) {  
                        element.mask("(99) 99999-999?9");  
                    } else {  
                        element.mask("(99) 9999-9999?9");  
                    }  
                });
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  $("#contact_form").after('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');                  
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                        $("#contact_form").remove();
                      }else{
                          $(form_result_div).removeClass('alert-success');
                          $(form_result_div).addClass('alert-danger');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      //setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-4 col-md-offset-1">
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-book font-36 mb-10 text-theme-colored"></i>
              <h4><?= $curso->descricao ?></h4>
         
            </div>
              <?php
                if($curso->periodo):
              ?>              
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-calendar font-36 mb-10 text-theme-colored"></i>
              <h4>Período do Curso</h4>
              <h4 class="text-gray"><?= $curso->periodo ?></h4>
            </div>
              <?php
              endif;
              ?>              
              <?php
                if($curso->grade):
              ?>
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-graduation-cap font-36 mb-10 text-theme-colored"></i>
              <h4>Grade do Curso</h4>
              <h4 class="text-gray"><?= $curso->grade ?></h4>
            </div>
              <?php
              endif;
              ?>
          </div>          
        </div>
      </div>
    </section>

