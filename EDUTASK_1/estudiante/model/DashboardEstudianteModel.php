<?php
require_once '../../Libraries/Conexion.php';

class DashboardEstudianteModel extends Conexion {

    public function __construct(){
        parent::__construct();
    }

    protected function sqlGetAllCursos(){
        try {
            $sql = "SELECT
                    CONCAT(D.nombre,' ',D.ape_paterno,' ',D.ape_materno) AS docente,
                    M.nombre AS Materia,
                    M.clave AS clv,
                    M.semestre_mate AS sem_mat,
                    CONCAT(M.hora_T,'-',M.hora_P,'-',M.creditos) AS creditos_mat,
                    C.periodo,
                    C.anio
                FROM Curso C
                INNER JOIN docente D ON D.Id_docente = C.Id_docente
                INNER JOIN materia M ON M.Id_materia = C.Id_materia";

            $stmt = $this->conect()->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Throwable $th) {
            return [];
        }
    }
}
