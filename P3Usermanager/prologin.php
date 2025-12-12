<?php
session_start();
include "conexion.php";

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, nombre, password, rol FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($id, $nombre, $hash, $rol);
    $stmt->fetch();

    if (password_verify($password, $hash)); {
        $_SESSION['user_id'] = $id;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['rol'] = $rol;

        header("Location: dashboard.php");
        exit;
    } else {
       ( echo "Contraseña incorrecta");
    }
} else {
   ( echo "mail no encontrado");
}

$stmt->close();
$conn->close();
?>
