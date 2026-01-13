<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
   <link rel="stylesheet" href="css.css">
</head>
<body>

<h2>Registro</h2>

<form method="POST" action="proreg.php" onsubmit="return validarRegistro();">

    <input type="text" name="nombre" id="nombre" placeholder="Nombre">

    <input type="email" name="email" id="email" placeholder="Email">

    <input type="password" name="password" id="password" placeholder="Contraseña">

    <input type="number" name="edad" id="edad" placeholder="Edad">

    <button type="submit">Registrarse</button>

</form>

<script src="js/validacion.js"></script>

<a href="login.php">Iniciar sesión</a>

</body>
</html>

