<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "registration_test";

//Соединение к бд

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
  die("Conn Failed".mysqli_connect_error());
} else{
}
?>