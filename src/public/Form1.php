<?php
session_start();
$user= ["name" => "mandryk", "password" => md5('123')];
$_SESSION['user'] = json_encode($user);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form name='authorization' method='post' action='login.php' enctype='multipart/form-data'>
    <p> Ваш логин: </p>
    <input type='text' name='login' value="<?php echo $_COOKIE['login'] ?? '' ?>">
    <p> Введите пароль: </p>
    <input type='password' name='password'>
    <input type='submit' value='Войти'>
</form>
<?php

?>
</body>
</html>
