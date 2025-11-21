<?php
session_start();
if (!isset($_SESSION['usuario'])) {
header("Location: login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenida</title>
<link rel="stylesheet" href="estilo2.css">
</head>

<body>
<div class="container">
<h2>Bienvenido, <?php echo $_SESSION['usuario']; ?></h2>
<p>Has iniciado sesión correctamente.</p>
<p><a href="logout.php">Cerrar sesión</a></p>
</div>
</body>
</html>