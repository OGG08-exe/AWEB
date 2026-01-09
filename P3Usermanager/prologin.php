<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php if (isset($_GET['error'])): ?>
<p style="color:red">Login incorrecto</p>
<?php endif; ?>

<form method="POST" action="prolog.php">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button>Entrar</button>
</form>

</body>
</html>
