<?php
session_start();
$background_color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : 'white';
$font_color = isset($_COOKIE['font_color']) ? $_COOKIE['font_color'] : 'black';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <style>
        body {
            background-color: <?php echo $background_color; ?>;
            color: <?php echo $font_color; ?>;
        }
    </style>
</head>
<body>
    <h1>Добро пожаловать!</h1>
</body>
</html>
