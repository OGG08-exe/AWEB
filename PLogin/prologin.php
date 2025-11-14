<?php
session_start();
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $usuarios = file("users.txt", FILE_IGNORE_NEW_LINES);
    $login_exitoso = false;
foreach ($usuarios as $linea) {
    list($user, $hash) = explode(":", $linea);
if ($user === $usuario && password_verify($password, $hash)) {
    $login_exitoso = true;
    $_SESSION['usuario'] = $usuario;
break;
}
}
if ($login_exitoso) {
    header("Location: bienvenida.php");
    exit;
} else {
echo "<h1>Usuario o contraseña incorrectos o No tiene cuenta</h1>";
echo "<p><a href='login.php'>Volver a intentar</a></p>";
echo "<p><a href='reg.php'>Registrarse</a></p>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Usuario_Registrado</title>
<link rel="stylesheet" href="reg.css">
</head>
<body>
</body>
</html>