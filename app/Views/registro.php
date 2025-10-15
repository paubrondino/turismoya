<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f3e9dc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        nav { 
            width: 100%; 
            padding: 15px 30px; 
            background-color: rgba(153, 82, 28, 0.85); 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            position: fixed; 
            top: 0; 
            left: 0; 
            z-index: 1000; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.2); 
        } 
        nav .container { 
            width: 100%; 
            max-width: 1200px; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            position: relative; 
        } 
        nav h1 { 
            color: #fff; 
            font-size: 28px; 
            font-weight: 700; 
            margin: 0; 
        } 
        nav .btn-volver { 
            position: absolute; 
            right: 0; 
            background-color: #8b5e3c; 
            color: #fff; 
            font-weight: 600; 
            padding: 10px 20px; 
            border-radius: 8px; 
            text-decoration: none; 
            text-align: center; 
            transition: background-color 0.3s ease; 
        } 
        nav .btn-volver:hover { 
            background-color: #a6784d;
        }
        .registro-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            width: 350px;
        }
        .registro-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .registro-container input, 
        .registro-container select {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .checkbox-container input {
            width: auto;
            margin-right: 8px;
        }
        .registro-container button {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #976435ff;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
        }
        .registro-container button:hover {
            background-color: #965e30ff;
        }
        .registro-container .login-link {
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
        }
        .registro-container .login-link a {
            color: #ffb663bd;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav> <div class="container"> <h1>Turismo Ya</h1> <a href="<?= base_url('principal') ?>" class="btn-volver">Volver</a> </div> </nav>
<form action="<?= base_url('registro/guardar') ?>" method="POST">

<div class="registro-container">
    <h2>Registro</h2>
    <form action="procesar_registro.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="email" name="gmail" placeholder="Gmail" required>
        <input type="password" id="clave" name="clave" placeholder="Clave" required>

        <div class="checkbox-container">
            <input type="checkbox" id="mostrarClave" onclick="togglePassword()">
            <label for="mostrarClave">Mostrar clave</label>
        </div>

        <button type="submit" a href="login">Registrarse</button>
    </form>

    <div class="login-link">
        ¿Ya tienes cuenta? <a href="login">Inicia sesión</a>
    </div>
</div>

<script>
    function togglePassword() {
        const clave = document.getElementById('clave');
        clave.type = clave.type === 'password' ? 'text' : 'password';
    }
</script>

</body>
</html>