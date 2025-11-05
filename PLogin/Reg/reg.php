<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserLogin</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
<h1 class="f">Facebook </h1>
    <h1>Registrarse</h1> 
    <h2>¿Ya tienes cuenta?</h2>
        <a href="login.php">Inicia sesión aqui</a>
    <div>
        <form action="pro_reg.php" method="post">
        <label><p>Usuario:</p></label>
        
        <input type="User" name="User" required>

        <label><p>Contraseña:</p></label>
       
        <input type="password" name="password" required>
     <br>
     <br>
        <button type="submit">Completar Registro</button>
    </div>
    </body>
</html>