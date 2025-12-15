<?php
session_start();

if (!isset($_SESSION["rol"]) || $_SESSION["rol"] !== "estudiante") {
    header("Location: /EDUTASK_1/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<?php require_once '../includes/head.php'; ?>

<body>

<!-- ✅ NAVBAR (ES EL MISMO DEL DOCENTE) -->
<?php require_once '../includes/navbar_docente.php'; ?>

<main class="container mt-4">

    <div class="row justify-content-center mb-4">
        <div class="col-md-8 col-lg-6">
            <div class="input-group search-box">
                <input type="text" class="form-control" placeholder="Buscar Curso">
                <button class="btn" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row">

        <section class="col-lg-9">
            <div id="contenedorCursos" class="row"></div>
        </section>

        <aside class="col-lg-3">
            <div class="p-3 shadow rounded bg-white">
                <h5>Próximas entregas</h5>
                <p>Revisa tus actividades</p>
            </div>
        </aside>

    </div>

</main>

<!-- JS EXISTENTE -->
<script src="/EDUTASK_1/assets/jQuery/jquery-3.7.1.min.js"></script>
<script src="/EDUTASK_1/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="module" src="/EDUTASK_1/estudiante/js/cursos.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const btnPerfil = document.getElementById("btnPerfil");
    const menuPerfil = document.getElementById("menuPerfil");

    if (!btnPerfil || !menuPerfil) return;

    btnPerfil.addEventListener("click", (e) => {
        e.stopPropagation();
        menuPerfil.classList.toggle("activo");
    });

    document.addEventListener("click", () => {
        menuPerfil.classList.remove("activo");
    });

    menuPerfil.addEventListener("click", (e) => {
        e.stopPropagation();
    });
});
</script>

</body>
</html>
