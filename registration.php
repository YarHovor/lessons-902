<?php

require_once __DIR__. '/classes/Form.php';

$form = new Form('post','action.php');

$formGet = new Form('get', 'action.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрационаая форма</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <?= $form->render()?>

    <?= $formGet->render()?>
</body>
</html>
