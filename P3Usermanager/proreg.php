<?php
include "conexion.php";

$nombre = trim($_POST['nombre']);
$email = trim($_POST['email']);
$password = $_POST['password'];
$edad = ($_POST['edad']);
$rol = "user";
// comprobacion de campos
if ($nombre === "" || $email === "" || $password === "") {
    die("<h1>Campos obligatorios vacíos</h1>");
}
// check mira selecciona el email y mira si existe en la tabla
$check = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    $check->close();
    die("<h1>El email ya está registrado.</h1> <a href='reg.php'>Volver</a>");
}
$check->close();
//hash de la contraseña
$password_hash = password_hash($password, PASSWORD_DEFAULT);
// prepara las celdas para insertar lo registrado
$stmt = $conn->prepare(
    "INSERT INTO usuarios (nombre, email, password, edad, rol)
     VALUES (?, ?, ?, ?, ?)"
);
$stmt->bind_param("sssis", $nombre, $email, $password_hash, $edad, $rol);

if ($stmt->execute()) {
    header("Location: login.php?registro=ok");
    exit;
} else {
    die("<h1>Error al registrar: </h1>" . $stmt->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.ss">
</head>
<body>
    
</body>
</html>