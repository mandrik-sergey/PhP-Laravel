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
<form method="post" enctype="multipart/form-data" action="newsList.php">
    <label> <p> Название новости: </p> <input name="name" type="text" > </label>
    <label> <p> Краткое описание: </p> <input name="description" type="text"></label>
    <label> <p> Дата создания: </p> <input name="date" datatype="ДД-ММ-ГГГГ" value="21-01-2022" min="21-01-2022" max="22-02-2022"> </label>
    <label> <p> Статус: </p> <input name="status" type="radio" value="Черновик" >
            <input name="status" type="radio" value="Опубликовано">
    </label>
    <label> <p> Текст новости: </p> <input name="text" type="text"> </label>
    <label> <p> Автор новости: </p> <input name="author" type="text"> </label>
    <label> <p> Загрузка картинки: </p> <input name="image" type="file"> </label>
</form>
<?php
$name=$description=$status=$text=$author=$image="";
$nameError=$descriptionError=$statusError=$textError=$authorError=$imageError="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $description = test_input($_POST["description"]);
    $status = test_input($_POST["status"]);
    $text = test_input($_POST["text"]);
    $author = test_input($_POST["authors"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Введите имя!";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["description"])) {
        $descriptionError = "Введите описание!";
    } else {
        $description = test_input($_POST["description"]);
    }
    if (empty($_POST["status"])) {
        $statusError = "Выберите статус!";
    } else {
        $status = test_input($_POST["status"]);
    }
    if (empty($_POST["text"])) {
        $textError = "Введите текст";
    } else {
        $textError = test_input($_POST["text"]);
    }
    if (empty($_POST["authors"])) {
        $authorError = "Введите автора";
    } else {
        $author = test_input($_POST["authors"]);
    }
    if (empty($_POST["image"])) {
        $imageError = "Добавте картинку";
    } else {
        $image = test_input($_POST["image"]);
    }
}
?>
</body>
</html>