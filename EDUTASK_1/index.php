<?php
session_start();

if (isset($_SESSION['rol'])) {
    if ($_SESSION['rol'] === 'docente') {
        header("Location: /EDUTASK_1/docente/dashboard_docente.php");
    } elseif ($_SESSION['rol'] === 'estudiante') {
        header("Location: /EDUTASK_1/estudiante/dashboard_estudiante.php");
    }
    exit();
}
?>
<!DOCTYPE html> 
<html lang="es"> 
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>EduTask - Iniciar Sesión</title> 

  <!-- Bootstrap 5 -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Index.css -->
  <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

  <div class="card p-4 text-center">
    <div class="logo mb-3">
      <img src="assets/img/logo_index.png" alt="Logo EduTask">
    </div>

    <!-- LOGIN NORMAL -->
    <form id="loginForm">
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Correo Electrónico</label> 
        <input type="email" class="form-control" id="email" placeholder="Email" required>
      </div>

      <div class="mb-2 text-start">
        <label for="password" class="form-label">Contraseña</label> 
        <input type="password" class="form-control" id="password" placeholder="Contraseña" minlength="8" required> 
      </div>

      <div class="text-end mb-3">
        <a href="#">¿Olvidaste tu contraseña?</a> 
      </div>

      <button type="submit" class="btn btn-brown w-100 mb-3">
        Iniciar Sesión
      </button>
    </form>

    <div class="divider"><span>o</span></div>

    <a href="login/google/google_login.php"
       class="btn google-btn w-100 d-flex align-items-center justify-content-center mb-3">
      <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google">
      Continuar con Google
    </a>

    <p class="mb-0">¿No tienes una cuenta? <a href="#">Regístrate</a></p>
  </div>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="login/components/validar_campos.js"></script>
  <script src="login/js/inicio_sesion.js"></script>

</body>
</html>
