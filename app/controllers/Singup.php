<?php

namespace app\controllers;

use app\classes\Validate;

class Singup
{
  public string $view;
  public  array $data = [];

  public function index()
  {
    $this->view = 'singup.php';
    $this->data = [
      'title'=>'SingUp'
    ];
  }

  public function store()
  {
    $validate = new Validate;
    $validate->handle([
      'firstname'=>[REQUIRED],
      'lastname'=>[REQUIRED],
      'email'=>[REQUIRED,EMAIL],
      'password'=>[REQUIRED,MAXLEN.':10'],
    ]);

    // if($validate->errors){

    // }
  }

}