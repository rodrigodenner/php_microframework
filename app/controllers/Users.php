<?php

namespace app\controllers;


use app\models\activerecord\FindBy;
use app\models\User;

class Users
{
  public string $view;
  public array $data = [];

  public function show(array $args)
  {
    $user = (new User)->execute(new FindBy(field:'id',value:$args[0],fields:'id,firstname,lastname,email'));
    // var_dump($user);
    // die();
    if(!$user){
      throw new \Exception('Usuario não encontrado');
    }
    $this->view = 'users.php';
    $this->data = [
      'title'=>'dados de user',
      'user'=> $user
    ];
  }
}