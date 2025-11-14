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
</body>
</htm