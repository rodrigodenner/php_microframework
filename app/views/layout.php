<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title?></title>
</head>
<body>
  <div class="container">
  <h3><a href="/">Home</a></h3>
  <h3><a href="/singup">SingUp</a></h3>
  <h3><a href="/login">Login</a></h3>

  <p>Bem vindo, <?php wellcome('user')?></p>
  
  <?php require VIEW_PATH.$this->controller->view ?>
  </div>

</body>
</html>