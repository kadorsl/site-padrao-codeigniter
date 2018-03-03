<!--  :::  HOME SLIDER ::: -->
<section id="slides" class="BGdark slides2" >
    <ul class="bxslider" style="min-height: 150px">
     
          
        <?php
                foreach ($banner as $linha):
                    $foto = $this->foto_model->getByAlbum($linha->id,'banner', 1);
                    echo ' <li>'
  
                         . '<img class="img-responsive" src="'.base_url('assets/img/'.$foto->pasta.'/'.$foto->id_album.'/g_'.$foto->id.'.'.$foto->extensao).'">'
                         .'  <div class="container hidden-xs hidden-sm">
                                <div class="bg-slide pull-left col-md-3">
                                    <div>'.mb_strtoupper($linha->nome).'</div>
                                </div>
                            </div>'                              
                         . '</li>   ';
                endforeach;
                
        ?>          
          

        
    </ul>

</section>
<!-- ::: END ::: -->