<?php 
session_start();
require "../vendor/autoload.php";

use Whoops\Handler\PrettyPageHandler;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->allowQuit(false);
$whoops->writeToOutput(false);


use app\core\AppExtract;
use app\core\MyApp;

try {
 $myApp = new MyApp(new AppExtract);
$myApp->controller();
$myApp->view(); 
} catch (\Throwable $e) {
  $html = $whoops->handleException($e);
  echo $html;
}
