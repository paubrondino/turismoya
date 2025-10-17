<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Principal</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom, #f4ece6, #e8ded5);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #4b3832;
    }
    .carousel-item img {
      height: 420px;
      object-fit: cover;
      border-radius: 20px;
    }
    .carousel-inner {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0,0,0,0.25);
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      filter: invert(100%);
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg" style="background-color: #6f4e37; padding-top: 0.3rem; padding-bottom: 0.3rem;">
  <div class="container-fluid">
    <!-- tu contenido aquí -->

    
    <!-- Logo o título a la izquierda -->
    <a class="navbar-brand text-white fw-bold" href="#">Turismo Ya</a>
    

    <!-- Barra de búsqueda en el medio -->
   <!-- Barra de búsqueda en el medio -->
<div class="container d-flex justify-content-center mt-5">
  <form action="<?= base_url('buscar-actividad') ?>" method="get" class="d-flex" role="search" style="width: 40%; min-width: 250px;">
    <input 
      class="form-control me-2" 
      type="search" 
      name="q" 
      placeholder="Buscar actividad..." 
      aria-label="Buscar"
      value="<?= esc($query ?? '') ?>">
    <button class="btn btn-dark" type="submit">Buscar</button>
  </form>

  <?php if(session()->get('rol') == 1): ?>
    <li class="nav-item ms-2">
      <a href="<?= base_url('actividad') ?>"
         class="fw-bold px-4 py-2 rounded-pill d-flex align-items-center justify-content-center"
         style="background-color:#d2b48c; color:#4e342e; box-shadow:0 4px 6px rgba(240, 156, 78, 0.2);
                transition:all 0.3s ease; text-decoration:none;"
         onmouseover="this.style.backgroundColor='#c19a6b'; this.style.transform='scale(1.08)';"
         onmouseout="this.style.backgroundColor='#d2b48c'; this.style.transform='scale(1)';">
        Subir Actividad
      </a>
    </li>
  <?php endif; ?>
</div>


  



  </form>
</div>


    <!-- Menú desplegable y perfil a la derecha -->
    <div class="d-flex align-items-center ms-auto">
      
      <!-- Dropdown -->
      <!-- Dropdown -->
       
<div class="dropdown me-3">
  <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Menú
  </button>
  <!-- Botón Subir actividad (solo para operadores) -->
<?php if (session()->get('rol') === 'operador'): ?>
    <a href="<?= base_url('actividad/crear') ?>" class="btn btn-warning me-3 fw-bold">
        Subir actividad
    </a>
<?php endif; ?>

  <ul class="dropdown-menu dropdown-menu-end">
    <li>
        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#quienesSomosModal">
            Quiénes somos
        </a>
    </li>
    <li>
        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#contactoModal">
            Contacto
        </a>
    </li>
  
    <li>
      <?php if (session()->get('rol') == 4): ?>
    <a class="dropdown-item" href="<?= base_url('admin') ?>">
        Admin
    </a>
    <?php endif; ?>
</li>

</div>

  </ul>
</div>

<!-- Modal -->
<div class="modal fade" id="quienesSomosModal" tabindex="-1" aria-labelledby="quienesSomosLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="quienesSomosLabel">Quiénes somos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        Turismo Ya es una plataforma dedicada a conectar a personas con experiencias turísticas únicas. Nuestro objetivo es ofrecer servicios confiables, prácticos y adaptados a cada usuario, ya seas viajero o operador turístico. Queremos que cada viaje sea una experiencia inolvidable.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="contactoModal" tabindex="-1" aria-labelledby="contactoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactoLabel">Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p>Email: viajesturismoya@gmail.com</p>
        <p>Teléfono 1: +54 3571-258512</p>
        <p>Teléfono 2: +54 3571-541892</p>
        <p>Dirección: 2 de Abril 1175</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


      <!-- Perfil -->
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="perfilDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Perfil" width="35" height="35" class="rounded-circle me-2">
          <span>Perfil</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="<?= base_url('/perfil') ?>">Mi perfil</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="<?= base_url('/logout') ?>">Cerrar sesión</a></li>
         </ul>

      </div>
    </div>
  </div>
</nav>


<!-- CARRUSEL CENTRADO -->
<div class="d-flex justify-content-center mt-5">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" style="width: 900px; height: 700px;">
    <div class="carousel-inner" style="height: 100%;">

      <!-- Imagen 1 -->
      <div class="carousel-item active position-relative">
        <img src="https://www.federacion.tur.ar/wp-content/uploads/2025/06/WhatsApp-Image-2025-06-17-at-15.28.11.jpeg"
             class="d-block w-100 h-100" style="object-fit: cover; border-radius: 15px;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
        </div>
      </div>

      <!-- Imagen 2 -->
      <div class="carousel-item position-relative">
        <img src="https://media.staticontent.com/media/pictures/2bad8f8c-20e3-47ed-9bf9-06f828229a2c"
             class="d-block w-100 h-100" style="object-fit: cover; border-radius: 15px;" >
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
          
        </div>
      </div>

      <!-- Imagen 3 -->
      <div class="carousel-item position-relative">
        <img src="https://media.staticontent.com/media/pictures/0ce8b832-51e8-4489-bb81-cab5a102623d"
             class="d-block w-100 h-100" style="object-fit: cover; border-radius: 15px;" >
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
         
        </div>
      </div>
    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- ACTIVIDADES - 20 CARDS -->
<div class="container mt-5">
  <div class="row g-4">
    <?php if (!empty($actividades) && is_array($actividades)): ?>
        <?php foreach ($actividades as $actividad): ?>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?= base_url('uploads/actividades/'.$actividad['imagen']) ?>" 
                         class="card-img-top" 
                         alt="<?= esc($actividad['nombre']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($actividad['nombre']) ?></h5>
                        <p class="card-text"><?= esc($actividad['descripcion']) ?></p>
                        <p class="fw-bold">$<?= esc($actividad['precio']) ?></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= base_url('actividad/'.$actividad['id_actividad']) ?>" 
                           class="btn btn-primary btn-sm">Ver más</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    <?php endif; ?>
  </div>
</div>
</div>
<!-- BOTÓN VER ACTIVIDADES -->
<div class="d-flex justify-content-center my-5">
  <a href="<?= site_url('actividades') ?>" 
     class="fw-bold px-5 py-3 rounded-pill"
     style="background-color:#d2b48c; color:#4e342e; 
            box-shadow:0 4px 8px rgba(0,0,0,0.2);
            transition:all 0.3s ease; text-decoration:none; font-size:1.2rem;"
     onmouseover="this.style.backgroundColor='#c19a6b'; this.style.transform='scale(1.08)';"
     onmouseout="this.style.backgroundColor='#d2b48c'; this.style.transform='scale(1)';">
    Ver Actividades
  </a>
</div>
