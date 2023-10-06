<?php

namespace app\core;

use app\interfaces\AppInterface;



class MyApp
{
  private $controller;

  public function __construct(private AppInterface $controllerInterface)
  {

  }
  
  public function controller()
  {
    $controller = $this->controllerInterface->controller();
    $method = $this->controllerInterface->method($controller);
    $params = $this->controllerInterface->params();


    $this->controller = new $controller;
    $this->controller->$method($params);
  }

  public function view()
  {
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
      if(!isset($this->controller->data)){
        throw new \Exception("A propriedade DATA [] precisa ser definida", );
        
      }
      if(!array_key_exists('title',$this->controller->data)){
        throw new \Exception("A propriedade TITLE precisa ser definida em DATA[]", );
        
      }
    
      extract($this->controller->data);
      require "../app/views/layout.php";
    }
  }
}