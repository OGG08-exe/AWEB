<php
$usuario=$_POST['Usuario'];
$PASSWORD=$_POST['password'];

//Guardamos en un asrchivo de texto (usuario:contraseña encriptada)
$file=fopen("usuarios.txt","a");
fwrite($file,$usuario.":".password_hash($password, PASSWORD_DEFAULT)


>
