<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/css.css">
</head>
<body>

<h2>Iniciar sesión</h2>
<form method="POST" action="log.php" onsubmit="return validarLogin();">

    <input type="email" name="email" id="email" placeholder="Email">

    <input type="password" name="password" id="password" placeholder="Contraseña">

    <button type="submit">Entrar</button>

</form>

<script src="js/validaciones.js"></script>

<a href="reg.php">Crear cuenta</a>

</body>
</html>




