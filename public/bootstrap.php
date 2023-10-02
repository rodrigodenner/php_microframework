<?php 
session_start();
require "../vendor/autoload.php";

use Whoops\Handler\PrettyPageHandler;


$whoops = new \Whoops\Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

use app\core\AppExtract;
use app\core\MyApp;

$myApp = new MyApp(new AppExtract);

$myApp->controller();
$myApp->view();