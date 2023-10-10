<?php

namespace app\controllers;

use app\models\User;
use app\models\activerecord\FindAll;

class Home
{
  public  array $data = [];
  public string $view;

  public function index()
  {
    $users = (new User)->execute(new FindAll(fields:'id,firstname,lastname'));
  
    $this->view = 'home.php';
    $this->data = [
      'title'=>'Users',
      'users'=> $users,
    ];
  }
}