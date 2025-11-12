<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Iniciar sesión</title>
<link rel="stylesheet" href="reg.css">
</head>
<body>
<h1>Inicia sesión</h1>
<form action="prologin.php" method="post">
    <label>Usuario:</label>
        <input type="text" name="usuario" required><br><br>
    <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>
    <button type="submit">Entrar</button>
</form>
<p>¿No tienes cuenta? <a href="reg.php">Regístrate aquí</a></p>
</body>
</html>