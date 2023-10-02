<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title?></title>
</head>
<body>
  <h2>Curso de MVC 2021</h2>

  
  <div class="container">
    <?php require VIEW_PATH.$this->controller->view ?>
  </div>

</body>
</html>