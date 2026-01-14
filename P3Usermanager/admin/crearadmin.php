<?php
include "../conexion.php";

$nombre = "Admin";
$email = "admin@admin.com";
$password = "P@ssw0rd";
$edad = 30;
$rol = "admin";

// comprobar si ya existe 
$check = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    die("El admin ya existe");
}
$check->close();

// crear admin
$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare(
    "INSERT INTO usuarios (nombre, email, password, edad, rol)
     VALUES (?, ?, ?, ?, ?)"
);

$stmt->bind_param("sssis", $nombre, $email, $hash, $edad, $rol);

if ($stmt->execute()) {
    echo "Admin creado<br>";
    echo "Email: <b>$email</b><br>";
    echo "Password: <b>$password</b><br>";
    echo "<br> Borra este archivo después";
} else {
    echo "Error al crear admin: " . $stmt->error;
}

$stmt->close();
$conn->close();
