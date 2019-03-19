<?php

$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '0000');
$stmt = $pdo->prepare('SELECT * FROM page');
$stmt->execute();
$pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
