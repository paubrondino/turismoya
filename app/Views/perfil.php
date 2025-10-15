<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil de Usuario</title>
<style>
    /* Body con degradado suave */
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #fdf6f0, #e3d7c1);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    /* Tarjeta principal */
    .profile-card {
        background: #8b6f47;
        width: 100%;
        max-width: 450px;
        border-radius: 20px;
        padding: 100px 80px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.25);
        color: #fff8e7;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 45px rgba(0,0,0,0.3);
    }

    /* Imagen de perfil */
    .profile-image {
        margin-bottom: 35px;
        position: relative;
    }
    .profile-image img {
        width: 160px;
        height: 180px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #4a3728;
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s ease;
    }
    .profile-image img:hover {
        transform: scale(1.05);
    }

    /* Subir imagen */
    .upload-form {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 25px;
    }
    .upload-form input[type="file"] {
        padding: 8px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
    }
    .upload-form button {
        background: #4a3728;
        color: #fff8e7;
        border: none;
        padding: 12px;
        border-radius: 12px;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s, transform 0.2s;
    }
    .upload-form button:hover {
        background: #3c2f22;
        transform: scale(1.05);
    }

    /* Información del usuario */
    .profile-info {
        text-align: left;
        margin-bottom: 25px;
    }
    .profile-info p {
        font-size: 16px;
        margin: 12px 0;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: color 0.3s;
    }
    .profile-info p:hover {
        color: #ffdca8;
    }
    .profile-info svg {
        width: 18px;
        height: 18px;
        fill: #ffdca8;
    }

    /* Botón de solicitud */
    .request-button {
        width: 100%;
        padding: 14px;
        background: #6f4e37;
        color: #fff8e7;
        border: none;
        border-radius: 15px;
        cursor: pointer;
        font-size: 20px;
        font-weight: bold;
        transition: background 0.3s, transform 0.2s;
    }
    .request-button:hover {
        background: #5c4033;
        transform: scale(1.05);
    }
</style>
</head>
<body>
<!-- Botón Volver arriba de todo -->
<a href="<?= base_url('prueba') ?>" class="top-right">Volver</a>

<div class="profile-card">
    <div class="profile-image">
        <img id="userImage" src="placeholder-image-url.jpg" alt="Imagen de perfil">
    </div>

    <div class="upload-form">
        <input type="file" id="imageUpload" accept="image/*">
        <button onclick="uploadImage()">Subir Imagen</button>
    </div>

    <div class="profile-info">
        <p>
            <svg ...></svg>
            <strong>Nombre:</strong> <?= session()->get('nombre'); ?>
        </p>
        <p>
            <svg ...></svg>
            <strong>Apellido:</strong> <?= session()->get('apellido'); ?>
        </p>
        <p>
            <svg ...></svg>
            <strong>Gmail:</strong> <?= session()->get('gmail'); ?>
        </p>
    </div>
 <li>
      <?php if (session()->get('rol') == 2): ?>
     <!-- Botón de solicitud para ser operador -->
    <a href="<?= base_url('usuario/solicitud') ?>" class="request-button">Solicitar ser Operador</a>
    <?php endif; ?>
</li>
   
</div>

<style>
.top-right {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #6f4e37; /* marrón */
    color: white;
    padding: 6px 12px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    z-index: 1000;
}

.top-right:hover {
    background-color: #5a3e2e;
}

.request-button {
    display: inline-block;
    margin-top: 20px;
    background-color: #6f4e37; /* verde */
    color: white;
    padding: 8px 16px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

.request-button:hover {
    background-color: #eebc5eff;
}
</style>


<script>
    function uploadImage() {
        const fileInput = document.getElementById('imageUpload');
        const file = fileInput.files[0];
        if(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('userImage').src = e.target.result;
                alert('Imagen subida localmente. Implementa guardado en BD.');
            };
            reader.readAsDataURL(file);
        } else {
            alert('Selecciona una imagen primero.');
        }
    }

    function requestOperator() {
        alert('Solicitud enviada para ser operador.');
    }
</script>

</body>
</html>
