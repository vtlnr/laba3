<?php
session_start();
session_destroy();
setcookie("username", "", time() - 3600, "/"); // Удаляем cookie
header("Location: login.php"); // Перенаправляем на страницу входа
exit();
?>
