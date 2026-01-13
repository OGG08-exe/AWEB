<?php
include "../conexion.php";
include "autadmin.php";

$result = $conn->query(
    "SELECT id, nombre, email, edad, rol FROM usuarios"
);
?>

<h1>Usuarios</h1>

<a href="../dashboard.php">Volver</a>

<table>
<tr>
    <th>Nombre</th>
    <th>Email</th>
    <th>Edad</th>
    <th>Rol</th>
    <th>Acciones</th>
</tr>

<?php while ($u = $result->fetch_assoc()): ?>
<tr>
    <td><?= $u['nombre'] ?></td>
    <td><?= $u['email'] ?></td>
    <td><?= $u['edad'] ?></td>
    <td><?= $u['rol'] ?></td>
    <td>
        <a href="editar.php?id=<?= $u['id'] ?>">Editar</a> |
        <a href="borrar.php?id=<?= $u['id'] ?>"
           onclick="return confirm('¿Seguro?')">Borrar</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
