<?php
$host = 'localhost';
$usuario = 'tu_usuario';
$contrasena = 'tu_contraseña';
$basedatos = 'tu_basedatos';

try {
    $conexion = new PDO("mysql:host=$host;dbname=$basedatos", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
?>
