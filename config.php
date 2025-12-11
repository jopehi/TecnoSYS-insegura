<?php
// ================================================
// config.php - configuración INSEGURA a propósito
// ================================================

// VULNERABILIDAD: usuario root con permisos totales para la app
$DB_HOST = "localhost";
$DB_USER = "root";          // VULNERABLE: usar 'root' en producción
$DB_PASS = "idmatx";       // VULNERABLE: contraseña débil y hardcodeada
$DB_NAME = "tecnosysdb";

// VULNERABILIDAD: mostrar errores de la base de datos al usuario
$conexion = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if (!$conexion) {
    // Mensaje súper detallado para el atacante
    die("Error conectando a la base de datos: " . mysqli_connect_error());
}

// Información extra del servidor que no deberíamos mostrar en producción
// (pero aquí sirve para el video)
$server_info = mysqli_get_server_info($conexion);
// OJO: esto debería ir al log, no a la salida...
?>
