<?php

/*
* Realiza a conexão com o banco de dados
* Redefinir variáveis conforme necessidade
*/

$db_name = "publica_db";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$pdo = new PDO('mysql:dbname='.$db_name.';host='.$db_host, $db_user, $db_pass);