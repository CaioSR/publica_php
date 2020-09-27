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

<h1><?= $season->getName(); ?></h1>
<a href="../jogos/create.php?name=<?=$season->getName()?>">Adicionar Novo Jogo</a>
<table>
    <thead>
        <tr>
            <th>Score</th>
            <th>Editar</th>
            <th>Deletar</th>
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
