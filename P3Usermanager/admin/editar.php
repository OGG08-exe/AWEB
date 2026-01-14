<?php
include "../conexion.php";
include "auth_admin.php";

$id = $_GET['id'];

// obtener usuario 
$stmt = $conn->prepare(
    "SELECT nombre, email, edad, rol FROM usuarios WHERE id = ?"
);
$stmt->bind_param("i", $id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

// actualizar la tabla
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = (int)$_POST['edad'];
    $rol = $_POST['rol'];

    $stmt = $conn->prepare(
        "UPDATE usuarios SET nombre=?, email=?, edad=?, rol=? WHERE id=?"
    );
    $stmt->bind_param("ssisi", $nombre, $email, $edad, $rol, $id);
    $stmt->execute();

    header("Location: users.php");
    exit;
}
?>

<form method="POST">
    <input type="text" name="nombre" value="<?= $user['nombre'] ?>" required>
    <input type="email" name="email" value="<?= $user['email'] ?>" required>
    <input type="number" name="edad" value="<?= $user['edad'] ?>">
    <select name="rol">
        <option value="user" <?= $user['rol']=='user'?'selected':'' ?>>User</option>
        <option value="admin" <?= $user['rol']=='admin'?'selected':'' ?>>Admin</option>
    </select>
    <button>Guardar</button>
</form>
