<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $dbPath);

$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
$titulo = $_POST['titulo'];
if (!$url) {
    header('Location: index.php?sucesso=0');
    exit();
}

$sql = 'INSERT INTO videos (url, title) VALUES (?, ?)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $_POST['url']);
$stmt->bindValue(2, $_POST['title']);

if ($stmt->execute() === false) {
    header('Location: index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}

