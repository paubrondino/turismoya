<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Turismo</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ECD8B1;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(235, 148, 76, 0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #99521c;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>


<div class="contenedor-vertical">
    <h1>Bienvenidos a Turismo Ya</h1>

    <div class="form-container">
        <h2>Registro</h2>
        <form action="<?= base_url('registro/guardar') ?>" method="post">
      
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>

            <label for="gmail">Gmail</label>
            <input type="gmail" name="gmail" id="gmail"  required>

            <label for="clave">Clave</label>
            <input type="password" name="clave" id="clave" required>

            <button type="submit">Registrarse</button>
        
        </form>

        <!-- Enlace para iniciar sesión -->
        <a href="<?= base_url('login') ?>" class="login-link">¿Ya tienes cuenta? Inicia sesión</a>

    </div>

</body>
</html>
 </form>
</body>
</html>