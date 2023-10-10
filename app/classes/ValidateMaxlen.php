<?php

namespace app\classes;

use app\interfaces\ValidateInterface;

class ValidateMaxlen implements ValidateInterface
{
  public function handle($field,$param)
  {
    $string = strip_tags($_POST[$field]);

    if (strlen($string) > $param) {
        Flash::set($field, "O campo não pode ter mais que {$param} caracteres");
        return false;
    }

    Old::set($field,$string);
    return $string;
  }
}