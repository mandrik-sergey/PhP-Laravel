<?php
session_start();
$user= ["name" => "mandryk" ,"password" => md5('123')];
$_SESSION['user'] = json_encode($user);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="stelr.css">
    <title>Document</title>
</head>
<body>

<form name="registration" method="post" action="listAvtoriz.php" enctype="multipart/form-data" >
            <label> Введите ваше имя: <input type='text' name='name' value="<?php echo $_COOKIE['name'] ?? '' ?>"> </label> <br/>
                <div class="error"> <?php echo $errorName;?> </div>
            <label> Введите вашу фамилию: <input type='text' name='surname' value="<?php echo $_COOKIE['surname'] ?? '' ?>"> </label> <br/>
                <div class="error"> <?php echo $errorSurname;?> </div>
            <label> Введите ваш логин : <input type='text' name='Login' value="<?php echo $_COOKIE['Login'] ?? '' ?>"> </label> <br/>
                <div class="error"> <?php echo $errorLogin;?> </div>
            <label> Введите ваш пароль: <input type='password' name='password'> </label> <br/>
                <div class="error"> <?php echo $errorPassword;?> </div>
            <label> Введите пароль ещё раз: <input type='password' name='passwordTwo'> </label> <br/>
                <div class="error"> <?php echo $errorPassword;?> </div>
                <div class="error"> <?php echo $errorAllPassword;?> </div>
            <label> <input type='submit' value='Зарегистрироваться' id="button" > </label>
      </form>
<?php
var_dump($user);
$errorLogin = $errorPassword = $errorPasswordTwo = $errorName = $errorSurname = '';
if (empty($_POST['name'])){
    $errorName = 'Поле не может быть пустым!';
}
if (empty($_POST['surname'])){
    $errorSurname = 'Поле не может быть пустым!';
}
if (empty($_POST['Login'])){
    $errorLogin = 'Поле не может быть пустым!';
}
if (empty($_POST['password'])){
    $errorPassword = 'Поле не может быть пустым!';
}
if (empty($_POST['passwordTwo'])){
    $errorPassword = 'Поле не может быть пустым!';
}
if ($_POST["password"] != $_POST['passwordTwo']){
    $errorAllPassword = "Значения в полях ввода пароля не совпадают" . "<br/>";
}else{
    header('Location: http://example.palmo/listAvtoriz.php');
}
?>

</body>
</html>
