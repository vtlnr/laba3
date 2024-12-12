<?php
require 'db.php'; // подключаем файл с настройками базы данных

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // хешируем пароль
    $background_color = $_POST['background_color'];
    $font_color = $_POST['font_color'];

    $stmt = $pdo->prepare("INSERT INTO users (username, password, background_color, font_color) VALUES (?, ?, ?, ?)");
    $stmt->execute([$username, $password, $background_color, $font_color]);

    echo "Регистрация успешна!";
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Имя пользователя" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <input type="text" name="background_color" placeholder="Цвет фона">
    <input type="text" name="font_color" placeholder="Цвет шрифта">
    <button type="submit">Зарегистрироваться</button>
</form>
