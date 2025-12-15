<!DOCTYPE html>
<html lang="es">
<?php require_once '../../includes/head.php'; ?>
<body>
    <!-- NAVBAR -->
<?php require_once '../../includes/navbar_docente.php'; ?>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container container-main mt-4">
        <div class="row">
            <!-- Columna Izquierda -->
            <div class="col-md-6">
                <div class="form-card">
                    <div class="mb-3">
                        <label for="nombreAct">Nombre Act</label>
                        <input type="text" class="form-control" id="nombreAct" placeholder="Ej. Ensayo sobre enlaces químicos">
                        <span class="obligatorio">Obligatorio</span>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="4" placeholder="Describe brevemente la actividad"></textarea>
                        <span class="obligatorio">Obligatorio</span>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha -->
            <div class="col-md-6">
                <div class="form-card">
                    <div class="mb-3">
                        <label for="materia">Materia</label>
                        <select class="form-select" id="materia">
                            <option selected disabled>Selecciona una materia</option>
                            <option value="quimica">Programacion Web</option>
                            <option value="matematicas">Logica Funcional</option>
                            <option value="biologia">Base de Datos</option>
                        </select>
                        <span class="obligatorio">Obligatorio</span>
                    </div>

                    <div class="mb-3">
                        <label for="valor">Valor</label>
                        <select class="form-select" id="valor">
                            <option selected disabled>Selecciona el valor</option>
                            <option>10%</option>
                            <option>20%</option>
                            <option>30%</option>
                        </select>
                        <span class="obligatorio">Obligatorio</span>
                    </div>

                    <div class="mb-3">
                        <label for="fechaEntrega">Fecha de Entrega</label>
                        <input type="date" class="form-control" id="fechaEntrega">
                        <span class="obligatorio">Obligatorio</span>
                    </div>

                    <a href="../view/crear_actividad_2.php" class="btn btn-crear" >Crear Actividad →</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
