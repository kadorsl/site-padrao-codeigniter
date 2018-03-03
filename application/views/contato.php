    <script src="<?=base_url('/assets/plugins/maskedinput/jquery.maskedinput.min.js')?>"></script>
    <!-- Section: inner-header -->

    <section class="inner-header bg-lighter">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="mt-10 text-uppercase">Fale Conosco</h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb mt-10 text-right xs-text-center">
                  <li><a href="<?= base_url('/')?>">Home</a></li>                
                <li class="active text-uppercase">Fale Conosco</li>
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
            <h4 class="mt-0 mb-30 line-bottom">Tire suas dúvidas preenchendo o o formulário abaixo:</h4>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="<?=base_url('contato/enviar')?>" method="post">

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_name">Nome <small>*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Seu Nome" required="">
                  </div>
                  <div class="form-group">
                    <label for="form_email">E-mail <small>*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Seu E-mail">
                  </div>
                  <div class="form-group">
                    <label for="form_phone">Telefone <small>*</small></label>
                    <input id="form_phone" name="form_phone" class="form-control telefone required" type="text" placeholder="Seu Telefone">
                  </div>                    
                  <div class="form-group">
                    <label for="form_name">Cidade <small>*</small></label>
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Digite a Cidade">
                  </div>
     
                  <div class="form-group">
                    <label for="form_name">Mensagem <small>*</small></label>
                    <textarea id="form_message" name="form_message" class="form-control required" rows="8" placeholder="Digite a Mensagem"></textarea>
                  </div>
                  <div class="form-group">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Aguarde...">Enviar Contato</button>
                    
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
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }else{
                          $(form_result_div).removeClass('alert-success');
                          $(form_result_div).addClass('alert-danger');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-4 col-md-offset-1">
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
              <h4>Ligue para a Gaho</h4>
              <h4 class="text-gray">Telefone: (47) 3533-1210</h4>
            </div>
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
              <h4>E-mail</h4>
              <h4 class="text-gray">sac@gaho.com.br</h4>
            </div>
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
              <h4>Endereço</h4>
              <h6 class="text-gray">Rua Alda Vandresen Philippi, 170 Galpão<br>
Bairro: Distrito Insdustrial<br>
Cidade: ITUPORANGA – SC<br>
CEP: 88400-000</h6>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
	<!-- GOOGLE MAP -->
        <div class="frame" style="margin-top: 0px;"><div id="google_map_285" class="google_map" style="height:400px;"></div></div>        
	<!-- google map api -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_qDiT4MyM7IxaGPbQyLnMjVUsJck02N0"></script>
	<script type="text/javascript">
		// When the window has finished loading create our google map below
		google.maps.event.addDomListener(window, 'load', init);
	
		function init() {
			var mapOptions = {
				// How zoomed in you want the map to start at (always required)
				zoom: 10,
				// The latitude and longitude to center the map (always required)
				center: new google.maps.LatLng(-27.44396, -49.6190477), // New York
				scrollwheel: false,
				
				// How you would like to style the map. 
				/*styles: [
                                    {"featureType":"all","elementType":"labels.text.fill",
                                        "stylers":[{"saturation":36},{"color":"#000000"},
                                            {"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke",
                                        "stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},
                                    {"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                                    {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},
                                    {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},
                                    {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},
                                    {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},
                                    {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},
                                    {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},
                                            {"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},
                                            {"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},
                                            {"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}
                                ]*/
styles:[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]            
			};

			// We are using a div with id="map" seen below in the <body>
			var mapElement = document.getElementById('google_map_285');

			// Create the Google Map using our element and options defined above
			var map = new google.maps.Map(mapElement, mapOptions);

			// Let's also add a marker while we're at it
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(-27.44396, -49.6190477),
				map: map,
				title: 'GAHO FERRAMENTAS ESPECIAIS',
				icon: '<?= base_url()?>assets/img/marker.png'
			});
		}
	</script>
    </section>
