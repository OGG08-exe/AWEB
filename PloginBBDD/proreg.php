<?php
include "conexion.php"; 
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    echo "<h1>Error: el usuario ya existe</h1>";
    echo "<p><a href='reg.php'>Volver al registro</a></p>";
} else {
    $stmt->close();
    $hash = password_hash($password, PASSWORD_DEFAULT); 
    $stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $usuario, $hash);
    if ($stmt->execute()) {
        echo "<h2>Usuario registrado correctamente 🎉</h2>";
        echo "<p><a href='login.php'>Iniciar sesión</a></p>";
    } else {
        echo "<h2>Error al registrar el usuario</h2>";
        echo "<p><a href='reg.php'>Volver al registro</a></p>";
    }
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    
</body>
</html>