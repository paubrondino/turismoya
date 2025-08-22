<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Actividades Turísticas</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts: Playfair Display para títulos -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f5f0;
      margin-top: 70px; /* espacio para navbar fija */
      color: #333;
    }

    /* Navbar estilos */
    .navbar-brand {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.8rem;
      color: #6b3e1d !important;
    }

    .navbar {
      background: #fff8f2 !important;
    }

    /* Botones de login / registro */
    .btn-custom {
      border-radius: 25px;
      border: none;
      color: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
    }

    .btn-custom:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    .btn-register {
      background: linear-gradient(45deg, #4e9af1, #1c64f2);
    }

    .btn-login {
      background: linear-gradient(45deg, #9e9e9e, #6c6c6c);
    }

    /* Sección Quienes Somos */
    #quienes-somos {
      max-width: 900px;
      margin: 60px auto;
      text-align: center;
    }

    #quienes-somos h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2.2rem;
      margin-bottom: 25px;
      color: #6b3e1d;
    }

    #quienes-somos p {
      font-size: 18px;
      line-height: 1.7;
      color: #444;
      margin-bottom: 20px;
    }

    /* Sección actividades */
    #actividades {
      background-color: #f3e5d6;
      padding: 60px 20px;
      text-align: center;
      color: #6b3e1d;
      font-family: 'Playfair Display', serif;
    }

    #actividades h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
    }

    /* Tarjetas actividades */
    .actividad-card {
      background: linear-gradient(135deg, #cfa77b, #a76c3a);
      border-radius: 15px;
      color: white;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transition: transform 0.3s ease;
    }

    .actividad-card:hover {
      transform: scale(1.05);
    }

    .actividad-card img {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      height: 200px;
      object-fit: cover;
      width: 100%;
    }

    .actividad-card .card-body {
      padding: 20px;
    }

    .actividad-card .card-title {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand" href="#">Turismo Ya</a>
    <div>
      <a href="<?= base_url('registro') ?>" class="btn btn-sm btn-custom btn-register me-2">Registrarse</a>
      <a href="<?= base_url('login') ?>" class="btn btn-sm btn-custom btn-login">Iniciar Sesión</a>
    </div>
  </div>
</nav>

<!-- Sección Quiénes Somos -->
<section id="quienes-somos">
  <h2>Quiénes Somos</h2>
  <p>
    Somos dos chicas apasionadas por el turismo y la posibilidad de generar encuentros únicos a través de experiencias auténticas.
    Creemos que viajar no se trata solo de recorrer lugares, sino de vivir actividades que nos conecten con la cultura, la naturaleza
    y las personas que hacen posible cada propuesta.
  </p>
  <p>
    Nuestro proyecto nace con la idea de impulsar la expansión de actividades turísticas, ayudando a que sean más visibles y accesibles
    para quienes buscan algo distinto. Al mismo tiempo, acompañamos a los dueños de estas actividades para que puedan crecer,
    darse a conocer y llegar a un público más amplio.
  </p>
  <p>
    Queremos ser un puente entre quienes buscan experiencias nuevas y quienes las ofrecen, fomentando un turismo más cercano,
    colaborativo y lleno de oportunidades para todos.
  </p>
</section>

<!-- Actividades -->
<section id="actividades" class="container-fluid">
  <h2>Actividades Disponibles</h2>
  <div class="row g-4 justify-content-center">

    <div class="col-md-4 col-sm-6">
      <div class="actividad-card shadow">
        <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrdilXa6u--IQdM7u3Oow8GYOURAWZayYm4ZEISwMtZlGSk0zzh5Khl6izFZ3VYxt13K5V30-_2oFJ5oNIwGAV2idf2j1gTJ_VSMYlfQ43Kx3olwQ7SPttj9c_fP47sI8CcRQ0=s1360-w1360-h1020-rw" alt="Jardín Japonés"/>
        <div class="card-body">
          <h5 class="card-title">Jardín Japonés</h5>
          <p>Jardín con decoración, estanques y exposiciones de Japón, así como un vivero y un restaurante de sushi.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="actividad-card shadow">
        <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nqKZzscyXse5jKPFi1LMAdmXFR4t8YTlIaQzT_NK9mW_DKMJGam3RkpEg_mGorNG7lqf3b1xIZ2aOTxhtMyubj8Y0pgLdQwI1hSWXnDWwp2p2DEEYExoXn2eWhkipAwG9_fBqliEA=s294-w294-h220-n-k-no" alt="Cataratas del Iguazú"/>
        <div class="card-body">
          <h5 class="card-title">Las Cataratas del Iguazú</h5>
          <p>Cascadas rodeadas de senderos, con fauna salvaje y un tren a través de la selva.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="actividad-card shadow">
        <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nr5WkglCFxfLR0DyuTX1xcQpUZXDZ_puH0g79SDma-dGe0g0-tVpkES1-jB_G5nJ2vm75WP5BSbJV4WgO0qBnA4H0e9bkqYhUUkGCq55JEozMo3Hj8UpMOE4ZXsM4_M59DX7Qc=s1360-w1360-h1020-rw" alt="Parque Nacional Tierra del Fuego"/>
        <div class="card-body">
          <h5 class="card-title">Parque Nacional Tierra del Fuego</h5>
          <p>Parque nacional con lagos, ciénagas, acceso limitado al bosque patagónico y una amplia biodiversidad.</p>
        </div>
      </div>
    </div>

  </div>
</section>

</body>
</html>
