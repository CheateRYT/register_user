<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $money = $_POST['money'];
    $level = $_POST['level'];

    // Проверка наличия данных в полях формы
    if (!empty($login) && !empty($password)) {
        // Подготовленное выражение для запроса
        $checkStmt = $conn->prepare("SELECT * FROM `users` WHERE login = ?");
        $checkStmt->bind_param("s", $login);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult->num_rows > 0) {
            echo "Данный логин уже занят.";
        } else {
            // Подготовленное выражение для запроса
            $insertStmt = $conn->prepare("INSERT INTO `users` (login, password, money, level) VALUES (?, ?, ?, ?)");
            $insertStmt->bind_param("ssss", $login, $password, $money, $level);

            if ($insertStmt->execute()) {
                echo "Приветствую, " . $login;
            } else {
                echo "Ошибка при регистрации.";
            }

            $insertStmt->close();
        }

        $checkStmt->close();
        $conn->close();
    } else {
        echo "Пожалуйста, заполните все поля формы.";
    }
}
?>