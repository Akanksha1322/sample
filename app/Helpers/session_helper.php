<?php 

    function __add__session($key, $value){
      $session = session();
      $session->set($key, $value);
    } 
    
    function __get__session($key){
      $session = session();
      return $session->get($key);
    }
    
    function __destroy__session(){
      $session = session();
      $sdestroyId = $session->get('id');
      return $sdestroyId;
    }
    

