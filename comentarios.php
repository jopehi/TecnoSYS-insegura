<?php 
require_once 'config.php';
session_start();

require 'menu_inseguro.php';


// Insertar comentario (sin sanitizar)
if (!empty($_POST['comentario'])) {
    $usuario = $_SESSION['usuario'] ?? "anónimo";
    $comentario = $_POST['comentario'];

    // VULNERABLE: SQL Injection + XSS almacenado
    $sql = "INSERT INTO comentarios (usuario, comentario) VALUES ('$usuario', '$comentario')";
    mysqli_query($conexion, $sql);
}

$comentarios = mysqli_query($conexion, "SELECT * FROM comentarios ORDER BY id DESC");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Comentarios inseguros</title>
</head>
<body>



<h2>Deja tu comentario (XSS permitido)</h2>

<form method="POST">
    <textarea name="comentario" rows="3" cols="50"></textarea><br><br>
    <button type="submit">Enviar</button>
</form>

<h3>Comentarios almacenados:</h3>

<?php 
while ($row = mysqli_fetch_assoc($comentarios)) {
    echo "<p><strong>{$row['usuario']}:</strong> {$row['comentario']}</p>";
}
?>

</body>
</html>
