<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir Actividad</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <style>
    /* Fondo y tipografía */
    body {
      background: #f7f3ef;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Contenedor del formulario */
    .form-container {
      max-width: 700px;
      margin: 50px auto;
      padding: 30px;
      border-radius: 15px;
      background: #fff8f0;
      box-shadow: 0px 4px 15px rgba(0,0,0,0.15);
      border: 2px solid #d2b48c;
    }

    .form-container h2 {
      color: #5c3d2e;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }

    label {
      font-weight: 600;
      color: #4b2e2e;
    }

    .form-control:focus {
      border-color: #a47148;
      box-shadow: 0 0 0 0.2rem rgba(164,113,72,0.25);
    }

    /* Botón marrón clarito */
    .btn-subir {
      display: inline-block;
      padding: 12px 28px;
      background: linear-gradient(135deg, #d2b48c, #c19a6b);
      color: #fff;
      font-weight: bold;
      border-radius: 8px;
      border: none;
      text-decoration: none;
      box-shadow: 0 4px 10px rgba(0,0,0,0.25);
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .btn-subir:hover {
      background: linear-gradient(135deg, #c19a6b, #a67b5b);
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(0,0,0,0.3);
    }

    .text-center {
      text-align: center;
      margin-top: 20px;
    }

    small.text-muted {
      color: #6b4f3a;
    }
  </style>
</head>

<body>
<a href="<?= base_url('prueba') ?>" class="btn btn-volver">Volver</a>
  <div class="form-container">
    <h2>Nueva Actividad</h2>
    <form action="<?= base_url('actividad/guardar') ?>" method="post" enctype="multipart/form-data">
      
      <!-- Nombre -->
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de la Actividad</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>

      <!-- Descripción -->
      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
      </div>

      <!-- Precio -->
      <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
      </div>

      <!-- Imagen -->
      <div class="mb-3">
        <label for="imagen" class="form-label">Imagen de la Actividad</label>
        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
      </div>

      <!-- Fechas -->
      <div class="mb-3">
  <label for="fechas" class="form-label">Fechas Disponibles</label>
  <input type="text" id="fechas" name="fechas" class="form-control">
</div>

      <!-- Botón -->
      <div class="text-center">
        <button type="submit" class="btn-subir">Publicar Actividad</button>
      </div>

    </form>
  </div>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
flatpickr("#fechas", {
  mode: "multiple",
  dateFormat: "Y-m-d"
});
</script>
</body>
</html>
