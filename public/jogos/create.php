<?php
require('../layouts/head.php');

$season = filter_input(INPUT_GET, 'name');
?>

<h1>Novo Jogo</h1>

<form action="store.php" method="post">

    <label for="score">Score</label>
    <input type="number" name="score" id="score" placeholder="10"><br>

    <input type="hidden" name="season" value="<?=$season?>">
    <input type="submit" value="Cadastrar">
</form>



<?php
require('../layouts/bottom.php');
?>
