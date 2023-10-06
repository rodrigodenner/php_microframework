<h2>Pagina de Login</h2>

<form action="/login/store" method="post">
  <label for="firstName">
    <input type="email" name="email" value="rodrigo@email.com" >
    <input type="text" name="password" placeholder="Password" value="12345">
  </label>
  <input type="submit" value="Login">
</form>

<br>
<?php echo flash('login'); ?>