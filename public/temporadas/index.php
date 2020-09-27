<?php
require('../layouts/head.php');

use Main\Dao\SeasonDaoMySql;

$seasonDao = new SeasonDaoMySql($pdo);
$seasons = $seasonDao->fetchAll();
?>

<h1>Temporadas</h1>

<a href="create.php">Cadastrar Nova Temporada</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Max Score</th>
            <th>Min Score</th>
            <th>Max Score Counter</th>
            <th>Min Score Counter</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($seasons as $season): ?>
        <tr>
            <td><a href="show.php?id=<?=$season->getId()?>"><?=$season->getName()?></a></td>
            <td><?=$season->getMaxScore()?></td>
            <td><?=$season->getMinScore()?></td>
            <td><?=$season->getMaxScoreCounter()?></td>
            <td><?=$season->getMinScoreCounter()?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php
require('../layouts/bottom.php');
?>
