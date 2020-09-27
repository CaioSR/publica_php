<?php
require('../layouts/head.php');

use Main\Dao\SeasonDaoMySql;

$seasonDao = new SeasonDaoMySql($pdo);
$seasons = $seasonDao->fetchAll();
?>

<h1 class="text-3xl mb-5">Temporadas</h1>

<a class="btn btn-blue float-right mb-5" href="create.php">Cadastrar Nova Temporada</a>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Max Score</th>
            <th>Min Score</th>
            <th>Max Score Counter</th>
            <th>Min Score Counter</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($seasons as $season): ?>
        <tr>
            <td><a href="../jogos/index.php?id=<?=$season->getId()?>"><?=$season->getName()?></a></td>
            <td><?=$season->getMaxScore()?></td>
            <td><?=$season->getMinScore()?></td>
            <td><?=$season->getMaxScoreCounter()?></td>
            <td><?=$season->getMinScoreCounter()?></td>
            <td class="text-center"><a href="delete.php?id=<?=$season->getId()?>" onclick="return confirm('Are you sure?')">Deletar</a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php
require('../layouts/bottom.php');
?>
