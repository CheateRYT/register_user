<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Проверка наличия данных в полях формы
    if (!empty($login) && !empty($password)) {
        // Подготовленное выражение для запроса
        $stmt = $conn->prepare("INSERT INTO `users` (login, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $login, $password);

        if ($stmt->execute()) {
            echo "Приветствую, " . $login;
        } else {
            echo "Ошибка при регистрации.";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Пожалуйста, заполните все поля формы.";
    }
}
?>