<?php

namespace app\controllers;

class Products
{
  public string $view;
  public  array $data = [];

  public function index(array $args)
  {
    $this->view = 'products.php';
    $this->data =[
      'title' => 'Products'
    ];
  }

  public function edit(array $args)
  {
    
  }
}