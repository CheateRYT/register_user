<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Проверка наличия данных в полях формы
    if (!empty($login) && !empty($password)) {
        // Подготовленное выражение для запроса
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE login = ?");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            echo "Добро пожаловать ".$login;
        } else {
            echo "Пользователь не найден";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Пожалуйста, заполните все поля формы.";
    }
}
?>