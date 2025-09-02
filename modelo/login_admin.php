<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Administrador</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="container">
    <h1>Iniciar sesión</h1>
    <h3>Administradores</h3>

    <form action="loguearse_admin.php" method="POST" class="formulario">
      <label for="email">Correo electrónico:</label>
      <input type="email" name="email" id="email" placeholder="ejemplo@correo.com" required>

      <label for="password">Contraseña:</label>
      <input type="password" name="contraseña" id="password" placeholder="••••••••" required>

      <button type="submit">Ingresar</button>
    </form>
  </div>
</body>
</html>
