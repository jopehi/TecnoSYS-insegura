<?php
// test_conexion.php

// Incluimos la configuración insegura
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba de Conexión - TecnoSYS Insegura</title>
</head>
<body>
    <h1>Prueba de conexión a la base de datos</h1>

    <?php
    if ($conexion) {
        echo "<p style='color: green;'>Conexión exitosa a la base de datos <strong>$DB_NAME</strong>.</p>";

        // VULNERABILIDAD: Mostrar versión del servidor de BD al usuario
        echo "<p>Versión del servidor MySQL: <strong>" . htmlspecialchars($server_info) . "</strong></p>";

        // VULNERABILIDAD: Mostrar el usuario de BD directamente
        echo "<p>Conectado como usuario: <strong>" . htmlspecialchars($DB_USER) . "</strong></p>";
    } else {
        // Ya se manejó con die() en config.php, pero lo dejamos por claridad
        echo "<p style='color: red;'>No se pudo conectar a la base de datos.</p>";
    }
    ?>
</body>
</html>
