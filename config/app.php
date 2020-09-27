<?php
// Define Path to public folder
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/publica_php/public');

// Require Autoload
require_once(__DIR__.'/../vendor/autoload.php');

// Connect to Database
require_once(__DIR__.'/db_config.php');
?>