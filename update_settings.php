<?php
require 'db.php'; // Подключаем файл с настройками БД

$userId = 1; // ID пользователя, который Вы хотите обновить
$backgroundColor = '#FFFFFF'; // Цвет фона
$fontColor = '#000000'; // Цвет шрифта

$sql = "INSERT INTO user_settings (user_id, background_color, font_color) VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE background_color = ?, font_color = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId, $backgroundColor, $fontColor, $backgroundColor, $fontColor]);

<form action="update_settings.php" method="POST">
    <input type="hidden" name="user_id" value="1"> <!-- ID пользователя -->
    <label for="background_color">Цвет фона:</label>
    <input type="text" name="background_color" id="background_color">
    <label for="font_color">Цвет шрифта:</label>
    <input type="text" name="font_color" id="font_color">
    <button type="submit">Сохранить настройки</button>
</form>
