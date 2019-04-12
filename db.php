<?php

// подключение кбазе данных
// sudo apt install php7.3-mysql
$db = new PDO('mysql:host=localhost;dbname=test','yarhovor','yarhovor',[
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
]);

$sql = 'SELECT id, first_name, last_name, email 
        FROM users
        ORDER BY last_name';
$result = $db->query($sql); //отправка запроса к базе и получение результата

//var_dump($result);
var_dump($db->errorInfo());
//...
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>qq</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Фамилия</th>
        <th>Email</th>
    </tr>
    <?php foreach ($result as $row):?>
        <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['first_name']?></td>
            <td><?= $row['last_name']?></td>
            <td><?= $row['email']?></td>
        </tr>
    <?php endforeach ?>
</table>
</body>

</html>
