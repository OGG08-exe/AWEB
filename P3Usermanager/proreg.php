<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$rol = "user";

$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password, rol) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $email, $password, $rol);

if ($stmt->execute()) {
    echo "<script>alert('Registro exitoso'); window.location='login.php';</script>";
} else {
    echo "<script>alert('Error: el email ya existe'); window.location='reg.php';</script>";
}

$stmt->close();
$conn->close();
?>
