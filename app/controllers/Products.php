<?php

namespace app\controllers;

class Products
{
  public string $view;
  public  array $data = [];

  public function index(array $args)
  {
    $this->view = 'edit.php';
    $this->data = [
      'title'=>'Edit'
    ];
  }

  public function edit(array $args)
  {
    $this->view = 'edit.php';
    $this->data = [
      'title'=>'Edit'
    ];
  }
}