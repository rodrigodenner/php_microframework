<?php

use app\core\AppExtract;
use Whoops\Handler\PrettyPageHandler;

session_start();
require "../vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

// try {
  
$app = new AppExtract;
$controller = $app->controller();
$method = $app->method();
$params = $app->params();


$controller = new $controller;
$controller->$method($params);

if($_SERVER['REQUEST_METHOD'] === 'GET'){
  if(!isset($controller->data)){
    throw new Exception("A propriedade DATA [] precisa ser definida", );
    
  }
  if(!array_key_exists('title',$controller->data)){
    throw new Exception("A propriedade TITLE precisa ser definida em DATA[]", );
    
  }

  extract($controller->data);
  require "../app/views/layout.php";
}

// } catch (\Throwable $th) {
//   formatException($th);
// }

