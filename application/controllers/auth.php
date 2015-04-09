<?php

class Auth extends CI_Controller {
    private $uid;
    private $acces_token;
    public function _construct(){
        parent::__construct();
        $this->load->library("facebook",array(
            "appId" => "721890501265933",
            "secret" => "a052660dfe0e1c79e8d254984ec1add7"
        ));
        $this->uid = $this->facebook->getUser;
        
        $this->access_token = $this->facebook->getAccessToken();
        
        $this->facebook->setAccessToken($this->acces_token);
    }
    
    public function index(){
        if($this->uid){
         try{
             $me = $this->facebook->api("/me");
             print_r($me);
         } catch(FacebookApiException $e){
             $this->uid = NULL;
         }   
        }else{
            
        }
    }
}