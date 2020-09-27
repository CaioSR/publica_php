<?php
require('../../config/app.php');

use Main\Dao\SeasonDaoMySql;
use Main\Dao\GameDaoMySql;
use Main\Models\Game;

/*
* Script para chamar receber formulário e enviar dados para o método de inserção
* Ele atualiza os scores na temporada e adiciona o jogo no banco
*/

$seasonDao = new SeasonDaoMySql($pdo);
$gameDao = new GameDaoMySql($pdo);

$score = filter_input(INPUT_POST, 'score');
$season_id = filter_input(INPUT_POST, 'season');

if ($score) {
    $season = $seasonDao->find($season_id);

    if ($season && $score < 1000 && $score > 0) {
        $game = new Game($season->getId(), $score);
        $season->addGame($game);
        
        $gameDao->store($game);
        $seasonDao->update($season);
    }
}

header ('Location: index.php?id='.$season->getId());
exit;