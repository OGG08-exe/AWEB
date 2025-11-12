<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserLogin</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <h1>Facebook</h1>
    <h1>Registrarse</h1> 
    <h2>¿Ya tienes cuenta?</h2>
        <a href="login.php">Inicia sesión aqui</a>
        <br>
<form action="proreg.php" method="post">
<label>Usuario:</label>
<input type="text" name="usuario" required><br><br>
<label>Contraseña:</label>
<input type="password" name="password" required><br><br>
     <br>
        <button type="submit">Completar Registro</button>
</form>
    </body>
</html>