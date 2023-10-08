<h2>Pagina de Login</h2>

<form action="/login/store" method="post">
  <label for="email">
    <input type="email" name="email" value="rodrigo@email.com" >
  </label>
  <label for="password">
    <input type="text" name="password" placeholder="Password" value="12345">
    </label>
  <input type="submit" value="Login">
</form>

<br>
<?php echo flash('login'); ?>