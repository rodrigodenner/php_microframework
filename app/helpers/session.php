<?php

function wellcome($index){
  if(isset($_SESSION[$index])){
    $user = $_SESSION[$index];
    return $user->firstname.' '.$user->lastname .'| <a href="/login/destroy">Logout</a>'; 
  }
  return 'Visitante';
}