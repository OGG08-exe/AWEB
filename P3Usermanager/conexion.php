<?php
$host = "localhost";
$user = "OGGO";
$pass = "P@ssw0rd";
$db = "Proyecto3";

try { 
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) { 
die("Error de conexión: " . $e->getMessage()); 
} 
?>