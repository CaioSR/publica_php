<?php
require('../../config/app.php');

use Main\Dao\SeasonDaoMySql;
use Main\Dao\GameDaoMySql;
use Main\Models\Game;

$seasonDao = new SeasonDaoMySql($pdo);
$gameDao = new GameDaoMySql($pdo);

$score = filter_input(INPUT_POST, 'score');
$season_name = filter_input(INPUT_POST, 'season');

if ($score) {
    $season = $seasonDao->findByName($season_name);

    if ($season) {
        $game = new Game($season->getId(), $score);
        $game->getSeasonId();
        $season->addGame($game);
        
        $gameDao->store($game);
        $seasonDao->update($season);
    }
}

header ('Location: index.php');
exit;