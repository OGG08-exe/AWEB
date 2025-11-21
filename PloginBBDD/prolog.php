<?php
session_start();
include "conexion.php";
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
$stmt->bind_result($id, $hash);
$stmt->fetch();
if (password_verify($password, $hash)) {
$_SESSION['usuario'] = $usuario;
header("Location: bienvenida.php");
exit;
} else {
echo "<h2>Contraseña incorrecta ❌</h2>";
echo "<p><a href='login.php'>Volver a intentar</a></p>";
}
} else {
echo "<h2>Usuario no encontrado ❌</h2>";
echo "<p><a href='reg.php'>Registrarse</a></p>";
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
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    
</body>
</html>