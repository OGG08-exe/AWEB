<?php
session_start();
include "conexion.php";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    die("<h1>Complete email y contraseña</h1>");
}

// Buscar usuario por email
$sql = "SELECT id, nombre, password, rol, edad FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("<h1>Usuario no encontrado. <a href='login.php'>Volver</a></h1>");
}

$user = $result->fetch_assoc();

// Verificar contraseña
if (!password_verify($password, $user['password'])) {
    die("<h1>Contraseña incorrecta. <a href='login.php'>Volver</a></h1>");
}

// Crear sesión
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_nombre'] = $user['nombre'];
$_SESSION['user_rol'] = $user['rol'];
$_SESSION['user_email'] = $email;
$_SESSION['user_edad'] = $user['edad'];

// Redirigir
header("Location: dashboard.php");
exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.ss">
</head>
<body>
    
</body>
</html>