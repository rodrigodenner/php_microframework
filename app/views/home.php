<h2>Usuarios cadastrados </h2>

<ul>
<?php foreach($users as $user):?>

  <li><?= $user->id?> : <?= $user->firstname ?> <?= $user->lastname?> => <a href="users/show/<?= $user->id?>"> User description</a></li>

<?php endforeach?>
</ul>