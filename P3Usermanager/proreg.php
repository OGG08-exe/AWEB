<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acceso no permitido");
}

$nombre = trim($_POST['nombre']);
$email = trim($_POST['email']);
$password = $_POST['password'];



$stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->rowCount() > 0) {
    header("Location: reg.php?error=1");
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare(
    "INSERT INTO usuarios (nombre, email, password, rol)
     VALUES (?, ?, ?, 'user')"
);

$stmt->execute([$nombre, $email, $hash]);

header("Location: login.php");
exit;
