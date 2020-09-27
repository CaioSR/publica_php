<?php
require('../layouts/head.php');

use Main\Dao\SeasonDaoMySql;
use Main\Dao\GameDaoMySql;

$seasonDao = new SeasonDaoMySql($pdo);
$gameDao = new GameDaoMySql($pdo);

$season_name = filter_input(INPUT_GET, 'name');
$season = $seasonDao->findByName($season_name);
$games = $gameDao->fetchAll($season->getId());

?>

<h1 class="text-3xl mb-5"><?= $season->getName(); ?></h1>

<div class="flex justify-between"> 
    <a class="text-blue-500" href="../temporadas">Voltar</a>
    <a class="btn btn-blue" href="create.php?name=<?=$season->getName()?>">Adicionar Novo Jogo</a>
</div>

<table class="table mt-5">
    <thead>
        <tr>
            <th>Score</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($games as $game): ?>
        <tr>
            <td><?= $game->getScore() ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php
require('../layouts/bottom.php');
?>
