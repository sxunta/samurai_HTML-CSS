<?php
try {
    $dsn = "mysql:dbname=myapp_db;host=db-test.cttp89p5hvp1.ap-northeast-1.rds.amazonaws.com";
    $username = "admin";
    $password = "Samurai\$1";
    $dbh = new PDO($dsn, $username, $password);
    $users = $dbh->query('SELECT * FROM users;');
} catch (Exception $e) {
    var_dump($e);
}