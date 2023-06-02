<!DOCTYPE html>
<html>
<head>
  <title>Регистрация</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      text-align: center;
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Регистрация</h2>
    <form action="register.php" method="post">
      <div class="form-group">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required>
      </div>
      <div class="form-group">
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button class="btn" type="submit">Зарегистрироваться</button>
    </form>
  </div>

  <div class="container">
    <h2>Авторизация</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required>
      </div>
      <div class="form-group">
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button class="btn" type="submit">Войти</button>
    </form>
  </div>
</body>
</html>