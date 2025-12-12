<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
</head>
<body>
<h1>registro</h1>
<h2>Registro</h2>

<form action="proreg.php" method="POST">
  <input type="text" name="nombre" placeholder="Nombre" required><br><br>
  <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="password" name="password" placeholder="Contraseña" required><br><br>
  <input type="number" name="edad" placeholder="edad" required><br><br>

  <button type="submit">Crear cuenta</button>
</form>

<a href="login.php">Iniciar sesión</a>

</body>
</html>
