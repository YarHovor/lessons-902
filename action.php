<?php

// $_GET - Данные GET-запроса
// $_POST - Данные POST-запроса

$errors=[];

if (empty($_POST['email'])){
    $errors['email'] = 'Vvedite email';
}else{

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($email === false) {
        $errors['email'] = 'Error email';
    }

}

if (empty($_POST['password'])){
    $errors['password'] = 'Vvedite password';
}

if (empty($_POST['passwordConfirmation'])){
    $errors['passwordConfirmation'] = 'Vvedite passwordConfirmation';
}elseif ($_POST['password'] != $_POST['passwordConfirmation']){
    $errors['passwordConfirmation'] = 'password and passwordConfirmation no sovpadenie';
}

if ($errors) {
    include 'form.php';
    exit();
}
//создали файл и в этот файл передаем парметры
$file = fopen('users.txt', 'a');
$line =$_POST['email'] . "\t" . $_POST['password'] . "\n";
fputs($file, $line);
fclose($file);

//Говорим пользователю "Спасибо за регистрацию"
header('Location: sps.html');
