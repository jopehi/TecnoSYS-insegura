<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Panel Admin - Inseguro</title>
</head>
<body>

<h1>Panel Administrativo (público)</h1>

<!-- Links directos sin control de acceso -->
<?php require 'menu_inseguro.php'; ?>


<p>Listado completo de usuarios:</p>

<?php
$q = mysqli_query($conexion, "SELECT * FROM usuarios");
while ($u = mysqli_fetch_assoc($q)) {
    echo "<p>{$u['id']} - {$u['username']} - {$u['password']} - ROL: {$u['rol']}</p>";
}
?>

</body>
</html>
