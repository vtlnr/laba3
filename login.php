<?php
require 'db.php'; // подключаем файл с настройками базы данных

session_start(); // начинаем сессию

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        setcookie('background_color', $user['background_color'], time() + (86400 * 30), "/"); // сохраняем цвет фона в cookie
        setcookie('font_color', $user['font_color'], time() + (86400 * 30), "/"); // сохраняем цвет шрифта в cookie
        echo "Авторизация успешна!";
    } else {
        echo "Неверное имя пользователя или пароль.";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Имя пользователя" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <button type="submit">Войти</button>
</form>
