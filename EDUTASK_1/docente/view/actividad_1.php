<!DOCTYPE html>
<html lang="es">
<?php require_once '../../includes/head.php'; ?>
<body>
    <!-- NAVBAR -->
<?php require_once '../../includes/navbar_docente.php'; ?>

    <!-- CONTENIDO -->
    <div class="container container-main">
        <div class="row">
            <div class="col-12">
                <a href="../dashboard_docente.php">
                <button class="title-page">⟵ Clave</button>
                </a>
            </div>
        </div>

        <div class="row">
            <!-- COLUMNA IZQUIERDA -->
            <div class="col-lg-8">
                <div class="card-materia mb-4">
                    <h4>Programacion Web</h4>
                    <div class="mt-2">
                        <span class="tag">8 Horas</span>
                        <span class="tag">1 Hora P.</span>
                        <span class="tag">4 Créditos</span>
                        <span class="tag">Semestre</span>
                    </div>
                </div>

                <!-- Tareas -->
                <div class="task-card">
                    <div class="task-title">Realiza un Ensayo</div>
                    <small>De desarrollo web</small>
                </div>
                <div class="task-card">
                    <div class="task-title">Realiza un Ensayo</div>
                    <small>De desarrollo web</small>
                </div>
                <div class="task-card">
                    <div class="task-title">Realiza un Ensayo</div>
                    <small>De desarrollo web</small>
                </div>
            </div>

            <!-- COLUMNA DERECHA -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <h5>Trabajo en Clase</h5>
                    <a href="../view/crear_actividad_2.php">
                        <button class="btn btn-actividad mt-2">Crear Actividades</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>