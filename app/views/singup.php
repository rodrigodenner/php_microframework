<h2>SingUp</h2>

<form action="singup/store" method="post">
  <label for="firsname">
    <input type="text" name="firstname" id="firstname" placeholder="firstname" value="<?= old('firstname');?>">
    <?= flash('firstname');?>
  </label>
  <label for="lastname">
    <input type="text" name="lastname" id="lastname" placeholder="lastname" value="<?=old('lastname');?>">
    <?= flash('lastname');?>
  </label>
  <label for="email">
    <input type="email" name="email" id="email" placeholder="email" value="<?= old('email');?>">
    <?= flash('email');?>
  </label>
  <label for="password">
    <input type="password" name="password" id="password" placeholder="Password" >
    <?= flash('password');?>
  </label>
  <button type="submit">SingUp</button>
</form>
