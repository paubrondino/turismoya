<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividades</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f3e9dc; /* Marrón claro/beige */
      color: #4b3832; /* Marrón oscuro */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background-color: #6f4e37; /* Marrón café */
    }
    .navbar-brand, .nav-link {
      color: #fff !important;
      font-weight: bold;
    }
    .btn-volver {
      background-color: #6f4e37;
      color: #fff;
      border-radius: 8px;
      padding: 6px 14px;
      font-size: 0.9rem;
      transition: background 0.3s ease;
    }
    .btn-volver:hover {
      background-color: #5d4037;
      color: #fff;
    }
    .card {
      background-color: #d7ccc8; /* Marrón suave */
      border: none;
      border-radius: 15px;
      box-shadow: 2px 4px 10px rgba(0,0,0,0.2);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 4px 6px 15px rgba(0,0,0,0.25);
    }
    .card-title {
      color: #3e2723;
      font-weight: bold;
    }
    .btn-brown {
      background-color: #6f4e37;
      color: #fff;
      border-radius: 10px;
      padding: 8px 16px;
      transition: background 0.3s ease;
    }
    .btn-brown:hover {
      background-color: #5d4037;
    }
    .card-img-top {
      border-radius: 15px 15px 0 0;
      max-height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="navbar-brand" href="#">Mis Actividades</a>
      <a href="<?= base_url('prueba') ?>" class="btn btn-volver">Volver</a>
    </div>
  </nav>

  <!-- Contenido -->
  <div class="container py-5">
    <div class="row g-4">
      <?php if(isset($actividades) && count($actividades) > 0): ?>
        <?php foreach($actividades as $actividad): ?>
          <div class="col-md-4">
            <div class="card h-100">
             <img src="<?= base_url('uploads/actividades/' . $actividad['imagen']); ?>"
     class="card-img-top"
     alt="<?= esc($actividad['nombre']); ?>">
              
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= $actividad['nombre']; ?></h5>
                <p class="card-text"><?= $actividad['descripcion']; ?></p>
                <p><strong>Precio:</strong> $<?= $actividad['precio']; ?></p>
<?php
$fechas = json_decode($actividad['disponibilidad'], true);
$cantidad = is_array($fechas) ? count($fechas) : 0;
?>
<p><strong>Disponibilidad:</strong> <?= $cantidad ?> fechas</p>

                <div class="mt-auto">
                  <a href="<?= base_url('actividad_detalle/' . $actividad['id_actividad']) ?>" class="btn btn-brown w-100">Reservar</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-12 text-center">
          <p>No hay actividades cargadas.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>

</body>
</html>
