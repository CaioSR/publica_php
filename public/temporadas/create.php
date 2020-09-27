<?php
require('../layouts/head.php');
?>

<h1 class="text-3xl mb-5">Nova Temporada</h1>

<a class="text-blue-500" href="index.php">Voltar</a>

<form class="mt-5" action="store.php" method="post">

    <label for="name">Nome</label><br>
    <input class="form-control" type="text" name="name" id="name" placeholder="Verão 2020"><br>

    <input class="btn btn-blue mt-5" type="submit" value="Cadastrar">
</form>



<?php
require('../layouts/bottom.php');
?>
