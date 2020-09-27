<?php
require('../layouts/head.php');

$season = filter_input(INPUT_GET, 'name');
?>

<h1 class="text-3xl mb-5">Novo Jogo</h1>

<a class="text-blue-500" href="index.php?=name".$season>Voltar</a>

<form class="mt-5" action="store.php" method="post">

    <label for="score">Score</label>
    <input class="form-control" type="number" name="score" id="score" placeholder="10"><br>

    <input type="hidden" name="season" value="<?=$season?>">
    <input class="btn btn-blue mt-5" type="submit" value="Cadastrar">
</form>



<?php
require('../layouts/bottom.php');
?>
