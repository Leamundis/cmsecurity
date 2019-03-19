<?php
include_once('./controllers/pages.php');

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
    <h1>Liste des articles</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Contenu</th>    
            <th>Voir</th>
        </tr>
        <?php foreach($pages as $page): ?>
            <tr>
                <td><?php echo $page['title'] ?></td>
                <td><?php echo $page['content'] ?></td>
                <td>
                    <form action="./page.php" method='POST'>
                        <input type="hidden" name="id" value="<?php echo $page['id'] ?>">
                        <input type="submit" value="Voir">
                    </form>
                </td>
                <td>
                    <form action="./controllers/deletePage.php" method='POST'>
                        <input type="hidden" name="id" value="<?php echo $page['id'] ?>">
                        <input type="submit" value="X">
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

</body>
</html>
