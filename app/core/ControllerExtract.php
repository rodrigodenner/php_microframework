<?php

namespace app\core;

class ControllerExtract
{
  public static function extract()
  {
    $uri = Uri::uri();

    $controller = 'Home';//controller padrão caso não seja passado 
    if(isset($uri[0]) && !empty($uri[0])){
      $controller = ucfirst($uri[0]);
    }
     
    $namespaceAndController = "app\\controllers\\".$controller;

    if(class_exists($namespaceAndController)){
      $controller = $namespaceAndController;
    }

    return $controller;   
  }
}