<?php
require('../layouts/head.php');
?>

<h1>Nova Temporada</h1>

<form action="store.php" method="post">

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" placeholder="Verão 2020"><br>

    <input type="submit" value="Cadastrar">
</form>



<?php
require('../layouts/bottom.php');
?>
