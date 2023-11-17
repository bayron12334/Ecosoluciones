<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $licencia = $_POST['licencia'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Realiza validaciones y sanitización de datos aquí.

    $sql = "INSERT INTO conductores (nombre, apellido, licencia, correo, contrasena) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([$nombre, $apellido, $licencia, $correo, $contrasena]);

    header('Location: leer.php');
}
?>
