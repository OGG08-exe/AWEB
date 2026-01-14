<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
   <link rel="stylesheet" href="css/css.css">
</head>
<body>

<h2>Registro</h2>

<form method="POST" action="proreg.php onsubmit="return validarFormulario(); >

    <input type="text" name="nombre" id="nombre" placeholder="Nombre">

    <input type="email" name="email" id="email" placeholder="Email">

    <input type="password" name="password" id="password" placeholder="Contraseña">
    
    <button type="button"
        onclick="togglePassword('password')">
    Mostrar
</button>

    <input type="number" name="edad" id="edad" placeholder="Edad">

    <button type="submit">Registrarse</button>

</form>

<script src="js/validacion.js"></script>

<a href="login.php">Iniciar sesión</a>

</body>
</html>

