<?php



$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '0000');
$stmt = $pdo->prepare('SELECT * FROM page WHERE id=' . $_POST['id']);
$stmt->execute();
$page = $stmt->fetch(PDO::FETCH_ASSOC);

