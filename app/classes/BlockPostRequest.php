<?php

namespace app\classes;

class BlockPostRequest
{
  public static function block()
  {
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
      // var_dump ('Not Allwed');
      require VIEW_PATH.'denied.php';
      die();
    } 
  }
}