<?php

namespace app\controllers;

use app\classes\BlockNotLogged;
use app\classes\Flash;
use app\interfaces\ControllerInterface;
use app\models\activerecord\FindBy;
use app\models\User;

class Login implements ControllerInterface
{
  public string $view;
  public array $data = [];

  
  public function __construct()
  {
    BlockNotLogged::block($this,['store']);
  }

  public function index(array $args)
  {
    $this->view = 'login.php';
    $this->data = [
      'title'=> 'login',
    ];
  }
  public function store(array $args)
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
    var_dump ($passwordMatch);
    die();

    if (!$passwordMatch) {
      Flash::set('login', 'Usuário ou senha inválidos');
      return redirect('/login');
    }

    unset($userFound->password);

    $_SESSION['user'] = $userFound;

    return redirect('/');
  }

  public function destroy(array $args)
  {
    // session_destroy(); para apagar tudo o registro do usuario 

    unset($_SESSION['user']);//se quiser somente deslogar 

    return redirect('/');
  }

  public function edit(array $args)
  {

  }

  public function show(array $args)
  {

  }

  public function update(array $args)
  {

  }
  
}