<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

  body {
    margin: 0;
    height: 100vh;
    background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Poppins', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  nav {
    width: 100%;
    padding: 15px 30px;
    background-color: rgba(133, 94, 66, 0.85);
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    box-shadow: 0 4px 10px rgba(101, 67, 33, 0.6);
  }

  nav .container {
    width: 100%;
    max-width: 1200px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  nav h1 {
    color: #f5deb3;
    font-size: 28px;
    font-weight: 700;
    margin: 0;
  }

  nav .btn-volver {
    position: absolute;
    right: 0;
    background-color: #8b5e3c;
    color: #fff;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    text-align: center;
    transition: background-color 0.3s ease;
  }

  nav .btn-volver:hover {
    background-color: #a6784d;
  }

  form {
    background: rgba(133, 94, 66, 0.85);
    padding: 40px 50px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(101, 67, 33, 0.6);
    max-width: 400px;
    width: 100%;
    color: #fff;
    margin-top: 100px; /* espacio para la barra fija */
  }

  h3 {
    text-align: center;
    margin-bottom: 35px;
    font-weight: 600;
    letter-spacing: 1.5px;
    color: #f5deb3;
    font-size: 30px;
  }

  label {
    font-weight: 600;
    color: #f0e6d2;
    font-size: 18px;
    margin-bottom: 10px;
    display: block;
  }

  .mb-3 {
    margin-bottom: 30px;
  }

  .form-control {
    background-color: #d7c4a3;
    border: none;
    border-radius: 6px;
    color: #5b3a1a;
    font-weight: 600;
    font-size: 16px;
    padding: 12px 15px;
    width: 100%;
    box-sizing: border-box;
  }

  .form-control:focus {
    background-color: #f5deb3;
    color: #4b2e0a;
    box-shadow: 0 0 6px 3px #a67c00;
    outline: none;
  }

  .form-check-label {
    color: #f0e6d2;
    font-weight: 600;
    font-size: 16px;
    margin-left: 8px;
  }

  .form-check-input {
    transform: scale(1.2);
    margin-right: 8px;
  }

  .btn-primary {
    background-color: #8b5e3c;
    border: none;
    font-weight: 700;
    letter-spacing: 1.2px;
    font-size: 20px;
    padding: 14px 0;
    width: 100%;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #a6784d;
  }
</style>

<nav>
  <div class="container">
    <h1>Turismo Ya</h1>
    <a href="<?= base_url('principal') ?>" class="btn-volver">Volver</a>
  </div>
</nav>

<form action="<?= base_url('login/iniciar') ?>" method="post">
<?php if(session()->getFlashdata('error')): ?>
        <div style="color: black; text-align: center; margin-bottom: 15px;">
            <?= session()->getFlashdata('error') ?>
        </div>
<?php endif; ?>
  <h3>Iniciar Sesión</h3>

  <div class="mb-3">
    <label for="gmail" class="form-label">Gmail</label>
    <input type="email" class="form-control" id="gmail" name="gmail" required>
  </div>

  <label for="clave" class="form-label">Contraseña</label>
  <input type="password" id="clave" class="form-control" name="clave" placeholder="Contraseña" required>

  <div class="mb-3 form-check" style="display: flex; align-items: center;">
    <input type="checkbox" class="form-check-input" id="showPasswordCheck">
    <label class="form-check-label" for="showPasswordCheck">Mostrar contraseña</label>
  </div>

  <script>
    const passInput = document.getElementById('clave');
    const showPassCheckbox = document.getElementById('showPasswordCheck');

    showPassCheckbox.addEventListener('change', () => {
      passInput.type = showPassCheckbox.checked ? 'text' : 'password';
    });
  </script>

  <button type="submit" class="btn-primary">Ingresar</button>
</form>
