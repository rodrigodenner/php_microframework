<?php

namespace app\classes;

use app\interfaces\ControllerInterface;

class BlockNoReason
{
  public static function block(ControllerInterface $controllerInterface, array $blockMethod)
 {
  $blockMethod = Block::getMethodToBlock($controllerInterface,$blockMethod);

  if($blockMethod){
    BlockPostRequest::block();
    return redirect('/');
  }
 }     
}