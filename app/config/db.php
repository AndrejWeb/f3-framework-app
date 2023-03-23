<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
$dotenv->safeLoad();
$db=new DB\SQL(
    "mysql:host={$_ENV["DB_HOST"]};port={$_ENV["DB_PORT"]};dbname={$_ENV["DB_NAME"]}",
    "{$_ENV["DB_USERNAME"]}",
    "{$_ENV["DB_PASSWORD"]}",
);

return $db;
