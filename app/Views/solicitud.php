<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitud de Operador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f7f3f0, #e1d4c9);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 80px auto;
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            position: relative;
        }

        /* Botón volver marrón y más arriba */
        .top-right {
            position: fixed;
            top: 10px;
            right: 10px;
            background-color: #6f4e37;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
        }

        .top-right:hover {
            background-color: #55382b;
            color: #fff;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #6f4e37;
        }

        .btn-primary {
            background-color: #6f4e37;
            border: none;
        }

        .btn-primary:hover {
            background-color: #55382b;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        textarea {
            resize: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container">

        <!-- Botón volver a prueba -->
        <a href="<?= base_url('prueba') ?>" class="top-right">Volver</a>

        <h2>Solicitud de Operador</h2>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('solicitud/enviar') ?>" method="post">
            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
            </div>
            <div class="mb-3">
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="Tu apellido" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="gmail" class="form-control" placeholder="Tu correo" required>
            </div>
            <div class="mb-3">
                <label>Por qué quiere ser operador</label>
                <textarea name="porque_quiere" class="form-control" rows="3" placeholder="Motivo" required></textarea>
            </div>
            <div class="mb-3">
                <label>Experiencia previa</label>
                <textarea name="experiencia" class="form-control" rows="3" placeholder="Tu experiencia" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar Solicitud</button>
        </form>
    </div>
</div>
</body>
</html>
