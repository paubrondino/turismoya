<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <!-- Botón Volver -->
    <a href="<?= base_url('prueba') ?>" class="btn btn-secondary mb-3">Volver</a>

    <h1 class="mb-4">Solicitud de Operador</h1>

    <!-- Tabla de usuarios -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id_usuario'] ?></td>
                    <td><?= esc($usuario['nombre']) ?></td>
                    <td><?= esc($usuario['gmail']) ?></td>
                    <td>
                        <?php
                            // Mostramos el nombre del rol en vez del número
                            switch($usuario['id_rol']) {
                                case 1: echo "Operador"; break;
                                case 2: echo "Usuario"; break;
                                case 4: echo "Administrador"; break;

                                default: echo "Desconocido";
                            }
                        ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/aceptar/'.$usuario['id_usuario']) ?>" class="btn btn-success btn-sm">Aceptar</a>
                        <a href="<?= base_url('admin/rechazar/'.$usuario['id_usuario']) ?>" class="btn btn-danger btn-sm">Rechazar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>

    
    