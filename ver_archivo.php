<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$file = $_GET['file'] ?? 'config.php';

require 'menu_inseguro.php';

// Mostrar ruta absoluta (vulnerabilidad informativa)
echo "<p><strong>Ruta absoluta:</strong> " . realpath($file) . "</p>";

echo "<h2>Mostrando archivo: $file</h2>";
echo "<pre>";

// VULNERABILIDAD: lectura sin validación
$content = file_get_contents($file);

if ($content === false) {
    echo "No se pudo leer el archivo. Verifica permisos o ruta.";
} else {
    echo htmlspecialchars($content); 
}

echo "</pre>";
