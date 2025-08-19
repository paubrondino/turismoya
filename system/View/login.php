<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Iniciar Sesión</title>
</head>
<body>
 <h1>Iniciar Sesión</h1>
 <?php if (isset($error)): ?>
 <p style="color: red;"><?= $error ?></p>
 <?php endif; ?>
 <form action="/usuario/iniciarSesion"
method="post">
 <label for="email">Email:</label>
 <input type="email" id="email" name="email"
required><br>
 <label for="contraseña">Contraseña:</label>
 <input type="password" id="contraseña"
name="contraseña" required><br>
 <button type="submit">Iniciar Sesión</button>
 </form>
</body>
</html>