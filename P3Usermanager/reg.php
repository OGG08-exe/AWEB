<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>

<h2>Registro</h2>

<?php if (isset($_GET['error'])): ?>
<p style="color:red">Ese email ya existe</p>
<?php endif; ?>

<form method="POST" action="proreg.php">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button>Registrar</button>
</form>

</body>
</html>
