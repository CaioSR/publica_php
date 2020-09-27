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
            <th>Nome</th>
            <th>Máximo da Temporada</th>
            <th>Mínimo da Temporada</th>
            <th>Quebra recorde máximo</th>
            <th>Quebra recorde mínimo</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($seasons as $season): ?>
        <tr>
            <td><?=$season->getName()?></td>
            <td><?=$season->getMaxScore()?></td>
            <td><?=$season->getMinScore()?></td>
            <td><?=$season->getMaxScoreCounter()?></td>
            <td><?=$season->getMinScoreCounter()?></td>
            <td class="text-center"><a href="../jogos/index.php?id=<?=$season->getId()?>">Ver Jogos</a></td>
            <td class="text-center"><a href="delete.php?id=<?=$season->getId()?>" onclick="return confirm('Tem certeza?')">Deletar</a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php
require('../layouts/bottom.php');
?>
