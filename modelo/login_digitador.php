<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Digitador</title>
    <link rel="stylesheet" href="../style.css"> <!-- Asegúrate que la ruta sea correcta -->
</head>
<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <h3>Digitadores</h3>
        <form class="formulario" action="loguearse_digitador.php" method="POST">
            
            <label for="email">Ingrese su correo electrónico:</label>
            <input type="email" name="email" id="email" required>
            
            <label for="contraseña">Ingrese su contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" required>
            
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
