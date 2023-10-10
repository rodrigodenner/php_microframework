<?php

function formatException(Throwable $th){

  var_dump("Erro no arquivo 
  {$th->getFile()} na linha {$th->getLine()}:  {$th->getMessage()}");
}