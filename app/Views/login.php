<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

  body {
    margin: 0;
    height: 100vh;
    background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  form {
    background: rgba(133, 94, 66, 0.85);
    padding: 40px 50px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(101, 67, 33, 0.6);
    max-width: 400px;
    width: 100%;
    color: #fff;
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

  #emailHelp {
    color: #f0e6d2;
    font-size: 14px;
    margin-top: 6px;
  }
</style>

<form action="<?= base_url('pagina') ?>" method="post">
  <h3>Iniciar Sesión</h3>

  <div class="mb-3">
    <label for="gmail" class="form-label">Gmail</label>
    <input type="gmail" class="form-control" id="gmail" required>
  </div>

    <label for="clave" class="form-label">Contraseña</label>
<input type="password" id="passwordInput" class="form-control" placeholder="Contraseña">

<div class="mb-3 form-check" style="display: flex; align-items: center;">
  <input type="checkbox" class="form-check-input" id="showPasswordCheck">
  <label class="form-check-label" for="showPasswordCheck">Mostrar contraseña</label>
</div>

<script>
  document.getElementById("showPasswordCheck").addEventListener("change", function() {
    const passwordInput = document.getElementById("passwordInput");
    passwordInput.type = this.checked ? "text" : "password";
  });
</script>

  <button type="submit" class="btn btn-primary">Ingresar</button>
  
</form>

<script>
  const passInput = document.getElementById('clave');
  const showPassCheckbox = document.getElementById('showPasswordCheck');

  showPassCheckbox.addEventListener('change', () => {
    passInput.type = showPassCheckbox.checked ? 'text' : 'password';
  });
</script>

