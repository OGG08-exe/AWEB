<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="estilo2.css">
</head>
<body>
<h1 class="ascii-glitch">

▄▄▄█████▓ ██░ ██ ▓█████    ▓█████▄  ▄▄▄       ██▀███   ██ ▄█▀     ██████  ██▓▓█████▄ ▓█████ 
▓  ██▒ ▓▒▓██░ ██▒▓█   ▀    ▒██▀ ██▌▒████▄    ▓██ ▒ ██▒ ██▄█▒    ▒██    ▒ ▓██▒▒██▀ ██▌▓█   ▀ 
▒ ▓██░ ▒░▒██▀▀██░▒███      ░██   █▌▒██  ▀█▄  ▓██ ░▄█ ▒▓███▄░    ░ ▓██▄   ▒██▒░██   █▌▒███   
░ ▓██▓ ░ ░▓█ ░██ ▒▓█  ▄    ░▓█▄   ▌░██▄▄▄▄██ ▒██▀▀█▄  ▓██ █▄      ▒   ██▒░██░░▓█▄   ▌▒▓█  ▄ 
  ▒██▒ ░ ░▓█▒░██▓░▒████▒   ░▒████▓  ▓█   ▓██▒░██▓ ▒██▒▒██▒ █▄   ▒██████▒▒░██░░▒████▓ ░▒████▒
  ▒ ░░    ▒ ░░▒░▒░░ ▒░ ░    ▒▒▓  ▒  ▒▒   ▓▒█░░ ▒▓ ░▒▓░▒ ▒▒ ▓▒   ▒ ▒▓▒ ▒ ░░▓   ▒▒▓  ▒ ░░ ▒░ ░
    ░     ▒ ░▒░ ░ ░ ░  ░    ░ ▒  ▒   ▒   ▒▒ ░  ░▒ ░ ▒░░ ░▒ ▒░   ░ ░▒  ░ ░ ▒ ░ ░ ▒  ▒  ░ ░  ░
  ░       ░  ░░ ░   ░       ░ ░  ░   ░   ▒     ░░   ░ ░ ░░ ░    ░  ░  ░   ▒ ░ ░ ░  ░    ░   
          ░  ░  ░   ░  ░      ░          ░  ░   ░     ░  ░            ░   ░     ░       ░  ░
                            ░                                                 ░             
</h1>
<div class="container">
<h2>inicio de sesión</h2>
<form action="prolog.php" method="post">
<label>Usuario:</label>
<input type="text" name="usuario" required><br><br>
<label>Contraseña:</label>
<input type="password" name="password" required><br><br>
<button type="submit">Entrar</button>
</form>
<p>¿No tienes cuenta? <a href="reg.php">Regístrate aquí</a></p>
</div>
</body>
</html>