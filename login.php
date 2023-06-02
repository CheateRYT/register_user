<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if(!empty($login) || !empty($password)){
      $stmt = $conn->prepare("SELECT * FROM `users` WHERE login = ?");
      $stmt->bind_param("s", $login);
      $stmt->execute();
      $result = $stmt->get_result();
  
      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $storedPassword = $row['password'];
  
          if ($password === $storedPassword) {
              echo "Вы авторизовались";
          } else {
              echo "Неверный пароль";
          }
      } else {
          echo "Пользователь не найден";
      }
  
      $stmt->close();
      $conn->close();
    }else{
      echo "Пожалуйста, заполните все поля формы.";
    }
  }
  ?>