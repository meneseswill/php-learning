<?php require 'partials/head.php'; ?>

<ul>
<?php foreach($users as $user): ?>
    <li><?=$user->name?></li>
<?php endforeach ?>
</ul>


<h1>Agregar nombre</h1>    
<form action="/names" method="POST">
    <input type="text" name="name">
    <button type="submit">Enviar</button>
</form> 
<?php require 'partials/footer.php'; ?>