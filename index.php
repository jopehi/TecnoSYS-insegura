<?php 
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TecnoSYS Insegura - Inicio</title>
</head>
<body>

<h1>Bienvenido a TecnoSYS Insegura</h1>

<!-- Links directos sin control de acceso -->
<?php require 'menu_inseguro.php'; ?>

<!-- Información del servidor: VULNERABILIDAD -->
<p>Servidor Web: <strong><?php echo $_SERVER['SERVER_SOFTWARE']; ?></strong></p>
<p>IP del servidor: <strong><?php echo $_SERVER['SERVER_ADDR']; ?></strong></p>
<p>Versión PHP: <strong><?php echo phpversion(); ?></strong></p>



<p style="color:red;">Esta aplicación es deliberadamente insegura. NO usar en producción.</p>

</bo
