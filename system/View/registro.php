<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Registrarse</title>
</head>
<body>
 <h1>Registrarse</h1>
 <form action="/usuario/registrar" method="post">
 <label for="nombre">Nombre:</label>
 <input type="text" id="nombre"
name="nombre" required><br>
 <label for="email">Email:</label>
 <input type="email" id="email" name="email"
required><br>
 <label for="contraseña">Contraseña:</label>
 <input type="password" id="contraseña"
name="contraseña" required><br>
 <button type="submit">Registrarse</button>
 </form>
</body>
</html>