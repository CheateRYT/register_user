<?php
//Подключение соединения с бд
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

//Запрос
$sql = "INSERT INTO `users` (login,password) VALUES ('$login','$password')";
echo "Приветствую ".$login;
$conn ->  query($sql);
?>