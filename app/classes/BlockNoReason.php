<?php

namespace app\classes;

use app\interfaces\ControllerInterface;

class BlockNoReason
{
  public static function block(ControllerInterface $controllerInterface, array $blockMethod)
 {
  $blockMethod = Block::getMethodToBlock($controllerInterface,$blockMethod);

  if($blockMethod){
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
      // var_dump ('Not Allwed');
      require VIEW_PATH.'denied.php';
      die();
    }
    return redirect('/');
  }
 }     
}