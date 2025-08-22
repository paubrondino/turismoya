<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Moderna Café</title>
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
<nav class="navbar navbar-expand-lg" style="background-color: #6f4e37;">
  <div class="container-fluid">
    
    <!-- Logo o título a la izquierda -->
    <a class="navbar-brand text-white fw-bold" href="#">Turismo Ya</a>

    <!-- Barra de búsqueda en el medio -->
    <form class="d-flex mx-auto" role="search" style="width: 40%;">
      <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
      <button class="btn btn-outline-light" type="submit">Buscar</button>
    </form>

    <!-- Menú desplegable y perfil a la derecha -->
    <div class="d-flex align-items-center ms-auto">
      
      <!-- Dropdown -->
      <div class="dropdown me-3">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Menú
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Quienes somos</a></li>
          <li><a class="dropdown-item" href="#">Actividades</a></li>
          <li><a class="dropdown-item" href="#">Promociones</a></li>
        </ul>
      </div>

      <!-- Perfil -->
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="perfilDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Perfil" width="35" height="35" class="rounded-circle me-2">
          <span>Perfil</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="perfilDropdown">
          <li><a class="dropdown-item" href="#">Mi perfil</a></li>
          <li><a class="dropdown-item" href="#">Configuración</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?= base_url('/logout') ?>">Cerrar sesión</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- CARRUSEL CENTRADO -->
<div class="d-flex justify-content-center mt-5">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" style="width: 900px; height: 550px;">
    <div class="carousel-inner" style="height: 100%;">
      <div class="carousel-item active">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvQ7jBl_2Ydi2VhPefYFfyoEeqrdUQ-sNS9g&s" class="d-block w-100 h-100" style="object-fit: cover; border-radius: 15px;" alt="Imagen 1">
      </div>
      <div class="carousel-item">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/27/ac/ed/cerro-tronador.jpg?w=600&h=500&s=1" class="d-block w-100 h-100" style="object-fit: cover; border-radius: 15px;" alt="Imagen 2">
      </div>
      <div class="carousel-item">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/a1/5e/4e/vista-panoramica-desde.jpg?w=700&h=400&s=1" class="d-block w-100 h-100" style="object-fit: cover; border-radius: 15px;" alt="Imagen 3">
      </div>
    </div>
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

    <!-- Actividad 1 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/3e/b0/73/de-noche.jpg?w=1000&h=-1&s=1" class="card-img-top" alt="Actividad 1">
        <div class="card-body text-center">
          <h5 class="card-title">Puerto Madero</h5>
          <p class="card-text">El barrio más moderno de Buenos Aires, con restaurantes, bares y paseos junto al río. Elegancia y diversión en un solo lugar.
</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 2 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://s7e6w6d2.delivery.rocketcdn.me/wp-content/uploads/2020/10/recoleta2.jpg" class="card-img-top" alt="Actividad 2">
        <div class="card-body text-center">
          <h5 class="card-title">Recoleta</h5>
          <p class="card-text">Elegante y sofisticada, famosa por su arquitectura, plazas y el icónico cementerio. Cultura y encanto en cada esquina.
</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 3 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/1c/7c/bb/recoleta-cemetery.jpg?w=500&h=-1&s=1" class="card-img-top" alt="Actividad 3">
        <div class="card-body text-center">
          <h5 class="card-title">Cementerio de la Recoleta</h5>
          <p class="card-text">Refinada y llena de historia, con calles encantadoras, plazas verdes y espacios culturales para explorar.
</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 4 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/09/b1/1f/bodega-catena-zapata.jpg?w=700&h=400&s=1" class="card-img-top" alt="Actividad 4">
        <div class="card-body text-center">
          <h5 class="card-title">Bodega Catena Zapata</h5>
          <p class="card-text">Famosa por sus vinos de alta calidad, combina tradición e innovación en la viticultura argentina, ofreciendo una experiencia única para los amantes del buen vino.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 5 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0b/7a/be/b1/20160330-231611-largejpg.jpg?w=700&h=-1&s=1" class="card-img-top" alt="Actividad 5">
        <div class="card-body text-center">
          <h5 class="card-title">Jardín Japonés</h5>
          <p class="card-text">Un oasis de tranquilidad con paisajes inspirados en Japón, lagos, puentes y una gran variedad de flora que invita a relajarse y disfrutar de la naturaleza.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 6 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-s/00/1d/d4/c1/cerro-fitz-roy.jpg?w=600&h=400&s=1" class="card-img-top" alt="Actividad 6">
        <div class="card-body text-center">
          <h5 class="card-title">Cerro Fitz Roy</h5>
          <p class="card-text">Imponente y majestuoso, ideal para los amantes del trekking y la naturaleza, con vistas espectaculares que quitan el aliento.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 7 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/3c/aa/40/photo1jpg.jpg?w=500&h=-1&s=1" class="card-img-top" alt="Actividad 7">
        <div class="card-body text-center">
          <h5 class="card-title">Teatro Colón </h5>
          <p class="card-text">El Teatro Colón de la ciudad de Buenos Aires es considerado uno de los mejores teatros del mundo.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 8 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/6c/d1/ab/glaciar-perito-moreno.jpg?w=700&h=400&s=1" class="card-img-top" alt="Actividad 8">
        <div class="card-body text-center">
          <h5 class="card-title">Perito Moreno Glacier</h5>
          <p class="card-text">Impresionante glaciar que deslumbra con sus enormes paredes de hielo en constante movimiento, perfecto para vivir la fuerza de la naturaleza de cerca.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 9 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/97/28/19/al-fin-del-mundo.jpg?w=700&h=-1&s=1" class="card-img-top" alt="Actividad 9">
        <div class="card-body text-center">
          <h5 class="card-title">Parque Nacional Tierra del Fuego</h5>
          <p class="card-text">Paisajes únicos donde se mezclan bosques, lagos y montañas, ideal para aventuras al aire libre y conectarse con la naturaleza.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 10 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-s/02/b2/55/a0/filename-dsc-0073-jpg.jpg?w=600&h=-1&s=1" class="card-img-top" alt="Actividad 10">
        <div class="card-body text-center">
          <h5 class="card-title">Garganta del Diablo</h5>
          <p class="card-text">Impactante caída de agua, imponente y majestuosa, que deja sin aliento a quienes la contemplan de cerca.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 11 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Actividad 11">
        <div class="card-body text-center">
          <h5 class="card-title">Lago Amutui Quimey</h5>
          <p class="card-text">Descripción breve de la actividad.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 12 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://turismo-en-argentina.com/wp-content/uploads/2019/05/Villa-Pehuenia-1024x685.jpg" class="card-img-top" alt="Actividad 12">
        <div class="card-body text-center">
          <h5 class="card-title">Villa Pehuenia</h5>
          <p class="card-text">Aldea de montaña enclavada en un anfiteatro de cerros y lagos con playas de arena blanca que se esconden en el bosque patagónico.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 13 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://turismo-en-argentina.com/wp-content/uploads/2019/05/58741891_2078123555649731_9023848533516794734_n.jpg" class="card-img-top" alt="Actividad 13">
        <div class="card-body text-center">
          <h5 class="card-title">Bañado La Estrella</h5>
          <p class="card-text"> El Bañado La Estrella es un gigantesco humedal en el corazón del Chaco Formoseño, de gran valor ecológico y paisajístico, con una biodiversidad extraordinaria y paisajes únicos.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 14 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://turismo-en-argentina.com/wp-content/uploads/2019/06/1892899Master-1024x768.jpg" class="card-img-top" alt="Actividad 14">
        <div class="card-body text-center">
          <h5 class="card-title">Cascada Ñivinco</h5>
          <p class="card-text">El río Ñivinco, genera una sucesión de 5 cascadas, una más maravillosa que la otra, en un entorno típico del bosque patagónico.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 15 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://islavictoriayarrayanes.com/wp-content/uploads/2024/04/HEADERS-ISLA-VICTORIA-1-1030x686.jpg" class="card-img-top" alt="Actividad 15">
        <div class="card-body text-center">
          <h5 class="card-title">Isla Victoria</h5>
          <p class="card-text">Isla extensa y protegida, cubierta por bosques milenarios, marcada por la historia indígena y transformada por iniciativas culturales y forestales. </p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 16 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://picsum.photos/400/300?random=16" class="card-img-top" alt="Actividad 16">
        <div class="card-body text-center">
          <h5 class="card-title">Actividad 16</h5>
          <p class="card-text">Descripción breve de la actividad.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>

    <!-- Actividad 17 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://picsum.photos/400/300?random=17" class="card-img-top" alt="Actividad 17">
        <div class="card-body text-center">
          <h5 class="card-title">Actividad 17</h5>
          <p class="card-text">Descripción breve de la actividad.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>
       <!-- Actividad 17 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://picsum.photos/400/300?random=17" class="card-img-top" alt="Actividad 17">
        <div class="card-body text-center">
          <h5 class="card-title">Actividad 17</h5>
          <p class="card-text">Descripción breve de la actividad.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>
       <!-- Actividad 17 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://picsum.photos/400/300?random=17" class="card-img-top" alt="Actividad 17">
        <div class="card-body text-center">
          <h5 class="card-title">Actividad 17</h5>
          <p class="card-text">Descripción breve de la actividad.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>
       <!-- Actividad 17 -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm rounded">
        <img src="https://picsum.photos/400/300?random=17" class="card-img-top" alt="Actividad 17">
        <div class="card-body text-center">
          <h5 class="card-title">Actividad 17</h5>
          <p class="card-text">Descripción breve de la actividad.</p>
          <a href="#" class="btn btn-warning">Reservar</a>
        </div>
      </div>
    </div>
    <?php if (session()->has('usuario')): ?>
    <h2>Actividades disponibles</h2>
    <!-- acá va tu listado -->
<?php else: ?>
    <p style="color:red; text-align:center;">
        Debes iniciar sesión para ver las actividades.
    </p>
<?php endif; ?>


</body>
</html>

