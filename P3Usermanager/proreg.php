<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$rol = "user";

$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password, rol) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $email, $password, $rol);

if ($stmt->execute()) {
    echo "<h1>Registro exitoso</h1>";
} else {
    echo "<h1>Registro fallido</h1>";
}

$stmt->close();
$conn->close();
?>
