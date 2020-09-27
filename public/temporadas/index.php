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
        </tr>
    </thead>
    <tbody>
        <?php foreach ($seasons as $season): ?>
        <tr>
            <td><?=$season->getName();?></td>
            <td><?=$season->getMaxScore();?></td>
            <td><?=$season->getMinScore();?></td>
            <td><?=$season->getMaxScoreCounter();?></td>
            <td><?=$season->getMinScoreCounter();?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php
require('../layouts/bottom.php');
?>
