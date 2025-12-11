<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Inseguro</title>
</head>
<body>

<h2>Inicio de sesión - Inseguro</h2>

<form action="procesar_login.php" method="POST">
    <label>Usuario:</label><br>
    <input type="text" name="username"><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">Ingresar</button>
</form>

<p>Prueba SQL Injection en usuario: <code>' OR '1'='1</code></p>

</body>
</html>
