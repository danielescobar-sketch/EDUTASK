<?php
require_once '../../Libraries/Conexion.php';

class DashboardDocenteModel extends Conexion{

    function __construct(){
        parent::__construct();
    }

    protected function sqlGetCurso(){
        try {
            $sqlCurso = "SELECT
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

            $peticion = $this->conect()->query($sqlCurso);
            $response = $peticion->fetchAll(PDO::FETCH_ASSOC);
            $peticion->closeCursor();

            return $response;

        } catch (Throwable $th) {
            return [];
        }
    }

    // 🔴 SOLO CURSOS DEL DOCENTE LOGUEADO
    protected function sqlGetCursoByDocente($id_docente){
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
                INNER JOIN materia M ON M.Id_materia = C.Id_materia
                WHERE C.Id_docente = :id_docente";

            $stmt = $this->conect()->prepare($sql);
            $stmt->bindParam(':id_docente', $id_docente, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Throwable $th) {
            return [];
        }
    }
}
