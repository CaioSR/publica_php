<?php
require('../../config/app.php');

use Main\Dao\SeasonDaoMySql;
use Main\Models\Season;

/*
* Script para chamar receber formulário e enviar dados para o método de inserção
*/

$seasonsDao = new SeasonDaoMySql($pdo);

$name = filter_input(INPUT_POST, 'name');

if ($name) {
    if (!$seasonsDao->findByName($name)) {
        $newSeason = new Season($name);
        $seasonsDao->store($newSeason);
    }
}

header ('Location: index.php');
exit;