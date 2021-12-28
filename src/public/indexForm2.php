<?php
if (isset($_POST)){

    print("Название товара: " . $_POST['name'] ."<br/>");
    print("Производитель: " . $_POST['manufacturer'] ."<br/>");
    print("Краткая характеристика: " . $_POST['comment'] ."<br/>");
}

$currentPath = $_FILES['avatar']['tmp_name'];

$fileName = $_FILES['avatar']['name'];
$newPath = dirname(__FILE__) . '/uploads' . $fileName;

move_uploaded_file($currentPath,$newPath);

if (isset($_FILES['avatar'])){
    $file = $_FILES['avatar'];
    print("Загружен файл с именем " .$file['name'] . "и размером " . $file['size'] . " байт" . "<br/>");

}
