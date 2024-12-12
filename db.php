<?php
$host = 'localhost'; // IP-адрес Вашего сервера
$db = 'my_database'; // имя  базы данных
$user = 'root'; // имя пользователя базы данных
$pass = ''; // пароль пользователя базы данных

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
