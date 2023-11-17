<?php
include 'conexion.php';

$sql = "SELECT * FROM conductores";
$resultado = $conexion->query($sql);

echo '<table>';
echo '<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Licencia</th><th>Correo</th></tr>';

while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $fila['id'] . '</td>';
    echo '<td>' . $fila['nombre'] . '</td>';
    echo '<td>' . $fila['apellido'] . '</td>';
    echo '<td>' . $fila['licencia'] . '</td>';
    echo '<td>' . $fila['correo'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
