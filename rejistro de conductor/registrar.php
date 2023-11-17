<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $licencia = $_POST['licencia'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Aquí debes realizar validaciones y sanitización de datos.
    // Por ejemplo, verificar que el correo sea único y seguro.

    // Conexión a la base de datos (debes configurar tu propia conexión)
    $db = new PDO('mysql:host=localhost;dbname=ecosoluciones', 'usuario', 'contrasena');

    // Consulta SQL para insertar datos en la tabla de conductores
    $sql = "INSERT INTO conductores (nombre, apellido, licencia, correo, contrasena) VALUES (?, ?, ?, ?, ?)";

    // Preparar y ejecutar la consulta
    $stmt = $db->prepare($sql);
    $stmt->execute([$nombre, $apellido, $licencia, $correo, password_hash($contrasena, PASSWORD_BCRYPT)]);

    // Redirigir a una página de éxito o mostrar un mensaje de éxito
    header('Location: registro_exitoso.html');
} else {
    // Si se accede directamente a este archivo, redirigir a la página de registro
    header('Location: registro.html');
}
?>
