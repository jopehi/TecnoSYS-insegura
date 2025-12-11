<?php
session_start();

// VULNERABILIDAD: No destruimos la sesión realmente
// Solo borramos un valor, pero el ID sigue vivo.
unset($_SESSION['usuario']);

// Mostramos información sensible para OWASP ZAP
echo "<h2>Sesión supuestamente cerrada...</h2>";
echo "<p>Sin embargo, la cookie de sesión sigue activa.</p>";
echo "<p>ID de sesión aún válido: <strong>" . session_id() . "</strong></p>";

// Seguimos mostrando los roles que quedaron en sesión
echo "<p>Rol aún almacenado: <strong>" . ($_SESSION['rol'] ?? "N/A") . "</strong></p>";

// No destruimos cookie, no regeneramos id, nada.
echo "<a href='menu.php'>Volver al menú (SIN autenticación)</a>";
?>
