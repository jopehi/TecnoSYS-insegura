<?php
// Iniciar sesión sin verificar si ya existe (mala práctica)
session_start();
?>

<!-- Menú global inseguro -->
<div style="padding:10px; background:#eee; margin-bottom:20px;">
    <strong>Menú Inseguro</strong> | 
    Usuario actual: <span style="color:red;">
        <?php echo $_SESSION['usuario'] ?? "NINGUNO"; ?>
    </span> 
    (Rol: <span style="color:red;"><?php echo $_SESSION['rol'] ?? "N/A"; ?></span>)
    <br><br>

    <a href="index.php">Inicio</a> |
    <a href="login.php">Login</a> |
    <a href="menu.php">Menú Principal</a> |
    <a href="comentarios.php">Comentarios Inseguros</a> |
    <a href="admin.php">Panel Admin</a> |
    <a href="ver_archivo.php?file=config.php">Leer config.php</a> |
    <a href="logout.php">Cerrar Sesión (inseguro)</a>
</div>
