<?php
require('../../config/app.php');

use Main\Dao\SeasonDaoMySql;


$seasonDao = new SeasonDaoMySql($pdo);
$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $season = $seasonDao->find($id);
    $seasonDao->delete($season->getId());
}

header ('Location: index.php');
exit;