<?php
session_start();
$user= ["name" => 'mandryk', "password" => md5('123')];
$_SESSION['user'] = json_encode($user);
?>
<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body>
<script src="script.js">  </script>

<form name='authorization' method='post' action='login.php' enctype='multipart/form-data'>
    <p> Ваш логин: </p>
    <input type='text' name='login' value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] :''?>">
    <p> Введите пароль: </p>
    <input type='password' name='password'>
    <input type='submit' value='Войти'>
</form>;
<?php

echo md5('123');

?>

</body>
</html>