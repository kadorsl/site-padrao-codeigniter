<?php

if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class Youtube {
    
    // default values
    private $ci;
    
    /**
     * Constructor, loads dependencies, initializes the library
     * and detects the autologin cookie
     */
    public function __construct() {
        $this->ci = &get_instance();
        
        
    }
    

    public function verifica($video) {
                    //regex alternativo: /(youtu\.be\/|youtube\.com\/(watch\?(.*&)?v=|(embed|v)\/))([^\?&\"'>]+)/
                    //grupo do match #5
        
                    //regex ativo (parece funcionar perfeito com todos os links): /(youtu(?:\.be|be\.com)\/(?:.*v(?:\/|=)|(?:.*\/)?)([\w'-]+))/i
                    //grupo do match #2
        
                    $url = $video;   
                    if(preg_match("/(youtu(?:\.be|be\.com)\/(?:.*v(?:\/|=)|(?:.*\/)?)([\w'-]+))/i", $url, $match)){
                            if($match[2]):
                                return $match[2];
                            else:
                                return FALSE;
                            endif;
                    }else{
                            return FALSE;
                    }
    }
    
   

}