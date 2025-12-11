<?php
require_once 'config.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// VULNERABILIDAD: SQL INJECTION
$query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conexion, $query);

if (!$result) {
    die("Error ejecutando consulta: " . mysqli_error($conexion));
}

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // VULNERABILIDAD: Sesiones sin seguridad
    $_SESSION['usuario'] = $user['username'];
    $_SESSION['rol'] = $user['rol'];

    echo "<p>Bienvenido {$user['username']}</p>";
    echo "<a href='menu.php'>Ir al menú</a>";
} else {
    echo "<p style='color:red;'>Credenciales inválidas. Query ejecutada: <br><code>$query</code></p>";
}
