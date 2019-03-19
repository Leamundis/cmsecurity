<?php

$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '0000');
$stmt = $pdo->prepare("INSERT INTO page (title, content) VALUES (:title, :content)");
$stmt->bindParam(':title', $_POST['title']);
$stmt->bindParam(':content', $_POST['content']);
$stmt->execute();

header('Location: /');
