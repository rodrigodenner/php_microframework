<?php

namespace app\classes;

use app\interfaces\ControllerInterface;


class BlockNotLogged
{
 public static function block(ControllerInterface $controllerInterface, array $blockMethod)
 {
  $blockMethod = Block::getMethodToBlock($controllerInterface,$blockMethod);

  if(!isset($_SESSION['user'])and $blockMethod){
    BlockPostRequest::block();
    
    return redirect('/');
  }
 }   
}