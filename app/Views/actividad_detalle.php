<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($actividad['nombre']) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <style>
    body {
      background-color: #f3e9dd; 
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #4b3832;
    }
    .detalle-card {
      max-width: 900px;
      margin: 50px auto;
      background-color: #fff8f0;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      overflow: hidden;
    }
    .detalle-card img {
      width: 100%;
      height: 450px;
      object-fit: cover;
    }
    .detalle-body {
      padding: 30px;
    }
    .detalle-body h2 {
      color: #6b4f3f;
      margin-bottom: 20px;
    }
    .detalle-body p {
      font-size: 1.1rem;
      line-height: 1.6;
    }
    .precio {
      font-size: 1.3rem;
      font-weight: bold;
      color: #8c7157;
      margin-top: 15px;
    }
    .disponibilidad {
      font-size: 1rem;
      font-weight: bold;
      color: <?= ($actividad['disponibilidad'] > 0) ? '#4CAF50' : '#E53935' ?>;
    }
    .btn-volver, .btn-reservar {
      display: inline-block;
      margin: 20px 10px 50px 10px;
      background-color: #d2b48c;
      border: none;
      color: #4e342e;
      padding: 12px 25px;
      border-radius: 50px;
      text-decoration: none;
      font-size: 1.1rem;
      box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
    }
    .btn-volver:hover, .btn-reservar:hover {
      background-color: #c19a6b;
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <div class="detalle-card">
    <img src="<?= base_url('uploads/actividades/'.$actividad['imagen']) ?>" alt="<?= esc($actividad['nombre']) ?>">
    <div class="detalle-body">
      <h2><?= esc($actividad['nombre']) ?></h2>
      <p><?= esc($actividad['descripcion']) ?></p>
      <p class="precio">Precio: $<?= esc($actividad['precio']) ?></p>
      <p class="disponibilidad">
        <?= ($actividad['disponibilidad'] > 0) ? 'Disponible' : 'No disponible' ?>
      </p>

      <!-- Botones -->
      <a href="<?= site_url('actividades') ?>" class="btn-volver">Volver a Actividades</a>
      <?php if($actividad['disponibilidad'] > 0): ?>
        <button type="button" class="btn-reservar" data-bs-toggle="modal" data-bs-target="#reservaModal">
          Reservar
        </button>
      <?php endif; ?>

    </div>
  </div>

  <!-- Modal de Reserva -->
  <div class="modal fade" id="reservaModal" tabindex="-1" aria-labelledby="reservaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?= site_url('reservar') ?>" method="post">
          <div class="modal-header" style="background-color:#d2b48c;">
            <h5 class="modal-title" id="reservaModalLabel" style="color:#4e342e;">Reservar Actividad</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id_actividad" value="<?= esc($actividad['id_actividad']) ?>">
            
            <div class="mb-3">
              <label for="adultos" class="form-label">Cantidad de Adultos</label>
              <input type="number" class="form-control" name="adultos" id="adultos" min="0" value="1" required>
            </div>

            <div class="mb-3">
              <label for="ninos" class="form-label">Cantidad de Niños</label>
              <input type="number" class="form-control" name="ninos" id="ninos" min="0" value="0" required>
            </div>
<div class="mb-3">
  <label for="fecha" class="form-label">Fecha deseada</label>
  <input type="text" class="form-control" name="fecha" id="fecha" required>
</div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn" style="background-color:#d2b48c; color:#4e342e;">Confirmar Reserva</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<script>
  // Pedimos al backend la cantidad de fechas disponibles
  fetch('<?= base_url("reserva/fechasDisponibles/".$actividad['id_actividad']) ?>')
    .then(res => res.json())
    .then(data => {
      const cantidad = data.cantidad ?? 0;

      // Mostramos la cantidad en un alert o en el input de fecha
      if (cantidad > 0) {
        // Mostramos el número en el campo de fecha
        document.getElementById('fecha').placeholder = cantidad + " fechas disponibles";

        // También podemos permitir seleccionar una fecha cualquiera
        flatpickr("#fecha", {
          dateFormat: "Y-m-d",
          minDate: "today"
        });
      } else {
        document.getElementById('fecha').placeholder = "No hay fechas disponibles";
        document.getElementById('fecha').disabled = true;
      }
    })
    .catch(err => console.error("Error al cargar disponibilidad:", err));
</script>


</html>
</body>
</html>