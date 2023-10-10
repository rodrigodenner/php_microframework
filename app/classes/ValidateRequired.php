<?php

namespace app\classes;

use app\interfaces\ValidateInterface;

class ValidateRequired implements ValidateInterface
{
  public function handle($field,$param)
  {
    $string = filter_input(INPUT_POST,$field,FILTER_SANITIZE_SPECIAL_CHARS);

    if($string === ''){
      Flash::set($field,'Campo obrigatório');
      return false;
    }
    
    Old::set($field,$string);
    return $string;
  }
}