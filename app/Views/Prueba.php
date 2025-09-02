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
<nav class="navbar navbar-expand-lg" style="background-color: #6f4e37;">
  <div class="container-fluid">
    
    <!-- Logo o título a la izquierda -->
    <a class="navbar-brand text-white fw-bold" href="#">Turismo Ya</a>
    

    <!-- Barra de búsqueda en el medio -->
    <div class="container d-flex justify-content-center mt-5">
  <form class="d-flex" role="search" style="width: 40%; min-width: 300px;">
    <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
    <button class="btn btn-dark" type="submit">Buscar</button>
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
        <a class="dropdown-item" href="<?= base_url('promociones') ?>">
            Promociones
        </a>
    </li>
</ul>

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
        <p>Email: turismoya@gmail.com</p>
        <p>Teléfono 1: +54 3571-258512</p>
        <p>Teléfono 2: +54 3571-258512</p>
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
        <img src="https://chat.google.com/u/0/api/get_attachment_url?url_type=FIFE_URL&content_type=image%2Fpng&attachment_token=AOo0EEWjO9HuZ8K3pnpbWQQW2l82VLvkMF4b098hEXlapSeqNuhXRy3A%2B252fh8JaNabN5Hp1YYdj41uxCiPLdFfasU6NP9QimLyHq7VifO88Gqt1Z24LaKr%2B0Dx2Jqbrl6DKdI4YadMVIzIDUf5ByO5OWaAfBXwQFeoj2nwIDNqtI7qlb0czZBckoT0NAGLutt%2Fbvx3sTpNsLVccnAACfUVPRrbeztqz7LuUcMcxeJPptuoowmU%2FsND1hwCP7IfYYHYr7J0TQ81xzx4IwxTxza%2FPpBiNR%2Bj58o5Eadu7AOy95Sk%2B7MBP1XPR2egsNTOKMW%2BeSGOrOtBgDMl41%2FLaaVWQ1NpOBQAiXYOX9n6dimW50Ou2zbjGMVTJwHXmeskyu4cE47bbaW3wCd6%2Bu4dHEhoQULaMsFB116DPAzbvgY6iJafXhxDeUNAkkXxcsiz5%2FZyVcXg4bbHHn1R9I6aEGTnm9i0ug1qCaD44upoZjaPWoqNtrDo5lp2JlcL3We4X4T0wHBkt%2FCs0o3mpAyIQw3Jbm28RIF%2B7blLgevP4zAD46DfijaJwtOsPuH%2BxN4STtTAf0D9RXfuK2XnMyk%2BGA1lJei0MFoputxkla8wlpNtgz2Ba%2FFo422SmSGYaD5TbX0e0veUtxkAqriF8aUTNOdbRYPxA5sDQM5MPZ%2BSg7cr2JWwoUxYNKQ7&allow_caching=true&sz=w512"
             class="d-block w-100 h-100" style="object-fit: cover; border-radius: 15px;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
        </div>
      </div>

      <!-- Imagen 2 -->
      <div class="carousel-item position-relative">
        <img src="https://chat.google.com/u/0/api/get_attachment_url?url_type=FIFE_URL&content_type=image%2Fpng&attachment_token=AOo0EEXtr6EFQQ8f1N8JqtVXSXHXnfsYs3aXhAeBVRK3YVBd%2FSqRCAN2hmtA1JSVh%2BzE6hu3tOIEK8EfckL4gL%2FobmWfPB3QIBBihtQH6my0NC28EBNNkXb1QNRFABqS6ILlS6fhEcLsC%2FpVoiA6qDcj6f6bWpvo5eSaDMH8DjjEF9SCBaCNe3jFNzxcTJZlCeyQUhlJnS%2Bdo6mqAHAUy39Flt2RYPMs%2FZVNVv55iLefQ80ST55f8oP73kOBnyem99zHuJeAlCEf3bRJqE0v%2BnWCO7wUiwEjTxDpZ6mkkC7icsamyRk39a%2BC394b%2F%2FO7K%2FeUnGW1zgh0Rw8HNZOIyJoudrCYxETb%2BOp85ij4INnr5WpHEziqe7ZUHMUQQ54sjylt5F6JzX%2FQhRSM1bVTDDt9kFWU7YlwDnlJ9iuvftbvt%2B%2BpViEoKL08IZbNm7j%2FR5Sl%2BwghF2127D2cLhteCmopO3iMPAzVmLfFOKZxHFQA%2BjrWVNLmshBYKHV413GbwvqPlYo9VjIxqyBxjMNkWk%2FcfEuV8lTzAU8jkH2hkpdBhRAAavmjwkFy18sqLBRobmN6fhKXRI7s02Hw46jysPn2115wlGerjfqiJsGBSUYzr2Qk8TbRyOBDkM7pDLb8So%2FomO8GhEbzYjjrO1sMcX%2BJaJ%2FQWwlNGSRqMA%3D%3D&allow_caching=true&sz=w512"
             class="d-block w-100 h-100" style="object-fit: cover; border-radius: 15px;" >
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
          
        </div>
      </div>

      <!-- Imagen 3 -->
      <div class="carousel-item position-relative">
        <img src="https://chat.google.com/u/0/api/get_attachment_url?url_type=FIFE_URL&content_type=image%2Fpng&attachment_token=AOo0EEWj40cKa7o26D75YGoLNE4Ljs7Qo2hG%2FVTBUJLJW0ZGwKMP5t9N2yTkKDFLustq8CXzyBoQk8CUMKoao7HeYFzqHi8jw9PFVvwMtM5Z3kSKoTeWiwNbVoVSPmMtMaX5gvyoyJ7hbDJBVJ8ZKevS84YDKEjvtCZ4t1pTGkSNn65UKsHDgj7DTy9EzldNZ6TtnblbNlLQMJtgHPnPWPbbag7ralaiSugriEmiaff474yRUH5qYJ%2FNhCJSez0sRM2Hp361NSjeGINkD%2BkM04XebzEuJEsT%2BwpCyRPrpNMLbxomAhk8HrJBPPBXzw9%2FN8Df1ThVQDkn5ArrYl%2BcJgYuLIl%2FBmGNs2fKeb5thoqBbqb2wfOdGZRaB2MAm9YiukMSsZ%2Fz5qvOvTgEgl6WmVaJM3IiKic7IlRYzNmFTtY9mY8kp1WUO7RjueYTWYWv0GcGsUw1U7xp3lDB9BrYvJfqdoA429g8i6z%2BpdL1nKDn3aoXu4ieARhbcwXHdyg1TcfDDcO8XP0gZ5fvFFScwsAnos8AHrDpmBwkEarFixeYGY8G4g5fAhucklAriLUpxyoZglP9Xf3YZwo3XD9OCiq89vEZF4FMGf908dPFjDaXL%2Bzu5f%2FmqTCetVVUVXN1Uq4mbt97STaEykDg5PvE8WMmJTQ3610%3D&allow_caching=true&sz=w512"
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
    <?php if(!empty($actividades) && is_array($actividades)): ?>
        <?php foreach($actividades as $actividad): ?>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <?php if(!empty($actividad['imagen'])): ?>
                        <img src="<?= base_url('uploads/'.$actividad['imagen']) ?>" class="card-img-top" alt="<?= $actividad['nombre'] ?>" style="height: 200px; object-fit: cover;">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?= $actividad['nombre'] ?></h5>
                        <p class="card-text"><?= $actividad['descripcion'] ?></p>
                        <p class="card-text fw-bold">Precio: $<?= $actividad['precio'] ?></p>
                        <a href="<?= base_url('actividad/'.$actividad['id']) ?>" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay actividades disponibles.</p>
    <?php endif; ?>
</div>
