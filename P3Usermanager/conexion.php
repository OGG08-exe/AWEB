
<?php 
$host= "localhost";
$user= "OGGO";
$pass ="P@ssw0rd";
$db ="usermanager";

$conn = new mysqli($host,$user,$pass,$db);

if ($conn->connect_error){
    die("Error de conexión".$conn-> connect_error);
}
?>