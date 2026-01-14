<?php
include "../conexion.php";
include "autadmin.php";

$id = $_GET['id'];
//ejecuta la eliminacion del usuario
$stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: users.php");
exit;
