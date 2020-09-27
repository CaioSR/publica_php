<?php
require($_SERVER['DOCUMENT_ROOT'].'/publica_php/config/app.php');

use Main\Dao\SeasonDaoMySql;
use Main\Models\Season;

$seasonsDao = new SeasonDaoMySql($pdo);

$name = filter_input(INPUT_POST, 'name');

if ($name) {
    if (!$seasonsDao->doesExists($name)) {
        $newSeason = new Season($name);
        $seasonsDao->store($newSeason);
    }
}

header ('Location: '.__DIR__);
exit;