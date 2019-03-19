<?php
include_once('./controllers/showPage.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include_once('./layouts/menu.html') ?>
    <h1><?php echo $page['title'] ?></h1>
    <p><?php echo $page['content'] ?></p>
    
</body>
</html>
