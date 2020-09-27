<?php
require('../layouts/head.php');

use Main\Dao\SeasonDaoMySql;
use Main\Dao\GameDaoMySql;

$seasonDao = new SeasonDaoMySql($pdo);
$gameDao = new GameDaoMySql($pdo);

$id = filter_input(INPUT_GET, 'id');
$season = $seasonDao->find($id);

$games = $gameDao->fetchAll($id);

?>

<h1 class="text-3xl mb-5"><?= $season->getName(); ?></h1>

<div class="flex justify-between"> 
    <a class="text-blue-500" href="../temporadas">Voltar</a>
    <a class="btn btn-blue" href="create.php?id=<?=$season->getId()?>">Adicionar Novo Jogo</a>
</div>

<table class="table mt-5">
    <thead>
        <tr>
            <th>Jogo</th>
            <th>Pontuação</th>
        </tr>
    </thead>
    <tbody>
        <?php $game_count = 0; ?>
        <?php foreach ($games as $game): ?>
        <?php $game_count++; ?>
        <tr>
            <td><?=$game_count?></td>
            <td><?=$game->getScore()?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php
require('../layouts/bottom.php');
?>
