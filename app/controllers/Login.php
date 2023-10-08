<?php

namespace app\controllers;

use app\classes\Flash;
use app\models\activerecord\FindBy;
use app\models\User;

class Login
{
  public string $view;
  public array $data = [];

  public function index()
  {
    $this->view = 'login.php';
    $this->data = [
      'title'=> 'login',
    ];
  }
  public function store()
  {
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);

    $user = new User;
    $userFound = $user->execute(new FindBy(field:'email',value:$email,fields:'firstname,lastname,password'));
    
    if (!$userFound) {
      Flash::set('login', 'Usuário ou senha inválidos');
      return redirect('/login');
  }

    $passwordMatch = password_verify($password, $userFound->password);
      
    if (!$passwordMatch) {
      Flash::set('login', 'Usuário ou senha inválidos');
      return redirect('/login');
    }

    unset($userFound->password);

    $_SESSION['user'] = $userFound;

    return redirect('/');
  }
}