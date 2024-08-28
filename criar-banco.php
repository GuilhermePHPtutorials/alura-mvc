<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $dbPath);
echo $dbPath;
$pdo->exec('CREATE TABLE videos (id INTEGER primary key, url TEXT, title TEXT);');