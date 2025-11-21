<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    <div class="container">
        <h2>sesión cerrada</h2>
        <a href="login.php"><p>Inicie sesión </p></a>
    </div>
</body>
</html>