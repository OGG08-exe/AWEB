<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UserManager</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>

<h1>Bienvenido a UserManager</h1>

<p>Proyecto de gestión de usuarios</p>

<a href="login.php">Iniciar sesión</a> |
<a href="reg.php">Registrarse</a>

</body>
</html>
