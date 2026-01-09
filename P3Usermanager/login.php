<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <div class="container">
    <h1>Iniciar sesión</h1>
    <form action="prologin.php" method="post">
      <label>email:</label>
      <input type="text" name="email" required>
      <label>Contraseña:</label>
      <input type="password" name="password" required>
      
      <button type="submit">Entrar</button>
    </form>
    <p >¿No tienes cuenta? <a href="reg.php">Regístrate aquí</a></p>
  </div>
 
</body>
</html>



