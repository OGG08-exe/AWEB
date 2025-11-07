<?php 
session_start(); 
session_destroy(); 
header("Location: login.php"); 
exit;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cerrar sesion</title>
<link rel="stylesheet" href="reg.css">
</head>
<body>
<h1>Adios, <?php echo $_SESSION['usuario']; ?></h1>
<p>Has Cerrado sesión correctamente.</p>
<p><a href="Login.php">Iniciar sesión</a></p>
</body>
</htm