<?php
session_start();

if (
    !isset($_SESSION["id_docente"]) ||
    $_SESSION["rol"] !== "docente"
) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<?php require_once '../includes/head.php'; ?>
<body>

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
        <section class="col-lg-8">
            <div id="contenedorCursos" class="row"></div>
        </section>
    </div>

</main>

<!-- JS EXISTENTE -->
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="module" src="js/cursos.js"></script>

<!-- ✅ JS PERFIL (OBLIGATORIO) -->
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
