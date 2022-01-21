<?php session_start();
$userTwo =[];
if (isset($_POST)){
    $userTwo= json_decode($_SESSION['user']);
}
if ($_POST['login'] === $userTwo -> name && md5($_POST['password']) === $userTwo -> password){
    header('Location: http://example.palmo/listAvtoriz.php');

}else{
    header('Location: http://example.palmo/Form1.php');
}