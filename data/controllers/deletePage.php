<?php 

$id = $_POST['id'];
$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '0000');
$stmt = $pdo->prepare( "DELETE FROM page WHERE id =:id" );
$stmt->bindParam(':id', $id);
$stmt->execute();


header('Location: /');