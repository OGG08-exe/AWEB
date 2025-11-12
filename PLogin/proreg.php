
<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$file = fopen("users.txt", "a");
fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . "\n");
fclose($file);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Usuario_Registrado</title>
<link rel="stylesheet" href="reg.css">
</head>
<body>
<h1>Usuario registrado</h1>
<a href="login.php"><p>inicia sesión</p></a>
</body>
</html>