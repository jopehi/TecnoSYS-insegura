<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Menú Inseguro</title>
</head>
<body>

<h1>Menú principal (sin autenticación)</h1>

<!-- Links directos sin control de acceso -->
<?php require 'menu_inseguro.php'; ?>

<p>Usuario activo según sesión: 
    <strong><?php echo $_SESSION['usuario'] ?? "NINGUNO"; ?></strong>
</p>

<ul>
    <li><a href="comentarios.php">Comentarios vulnerables</a></li>
    <li><a href="admin.php">Panel de administración</a></li>
    <li><a href="ver_archivo.php?file=config.php">Leer archivo sensible</a></li>
    <li><a href="logout.php">Cerrar sesión (inseguro)</a></li>	
</ul>

</body>
</html>
