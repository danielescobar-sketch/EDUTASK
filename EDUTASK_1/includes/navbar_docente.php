<?php
if (!isset($_SESSION['rol'])) return;

$rol = $_SESSION['rol'];
$inicio = $rol === 'docente'
    ? '/EDUTASK_1/docente/dashboard_docente.php'
    : '/EDUTASK_1/estudiante/dashboard_estudiante.php';
?>

<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container-fluid">

        <!-- LOGO -->
        <a class="navbar-brand logo" href="<?= $inicio ?>">
            <img src="/EDUTASK_1/assets/img/logo.png" style="height:50px">
        </a>

        <!-- HAMBURGUESA -->
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menuPrincipal"
            aria-label="Abrir menú"
            title="Abrir menú">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENÚ -->
        <div class="collapse navbar-collapse justify-content-center" id="menuPrincipal">
            <ul class="navbar-nav menu-links">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= $inicio ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mis Cursos</a>
                </li>
            </ul>
        </div>

        <!-- 👤 PERFIL -->
        <div class="perfil-wrapper">
            <button class="perfil-btn" id="btnPerfil" type="button"
                aria-label="Opciones de usuario"
                title="Opciones de usuario">
                <i class="bi bi-person-circle"></i>
            </button>

            <div class="perfil-menu" id="menuPerfil">
                <form action="/EDUTASK_1/cerrar_sesion.php" method="POST">
                    <button type="submit" class="btn-cerrar"
                        aria-label="Cerrar sesión"
                        title="Cerrar sesión">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
