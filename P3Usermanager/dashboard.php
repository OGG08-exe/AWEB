<?php
session_start();

// proteger acceso
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>

<h1>Dashboard</h1>

<p><b>Nombre:</b> <?=($_SESSION['user_nombre']) ?></p>
<p><b>Email:</b> <?= ($_SESSION['user_email']) ?></p>
<p><b>Rol:</b> <?= $_SESSION['user_rol'] ?></p>
<p><b>Edad:</b> <?= $_SESSION['user_edad'] ?></p>
<?php if ($_SESSION['user_rol'] === 'admin'): ?>
    <p><a href="admin/users.php">Panel de administración</a></p>
<?php endif; ?>

<p><a href="logout.php">Cerrar sesión</a></p>

</body>
</html>
