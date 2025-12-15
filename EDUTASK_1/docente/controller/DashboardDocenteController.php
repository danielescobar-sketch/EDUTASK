<?php
session_start();

require_once '../model/DashboardDocenteModel.php';
require_once '../../helpers/jsonResponse.php';

class DashboardDocenteController extends DashboardDocenteModel {

    private $peticion;

    public function __construct($data){
        parent::__construct();
        $this->peticion = $data['peticion'] ?? null;
        $this->getPeticiones();
    }

    private function getPeticiones(){

        switch ($this->peticion) {

            case 'allCourse':
                $this->getAllCourse();
                break;

            case 'addCourse':
                jsonResponse(["msg" => "peticion insertar un cursos"]);
                break;

            case 'deleteCourse':
                jsonResponse(["msg" => "peticion borrar un cursos"]);
                break;

            case 'updateCourse':
                jsonResponse(["msg" => "peticion modificar un cursos"]);
                break;

            default:
                jsonResponse(["msg" => "peticion desconocida ".$this->peticion]);
                break;
        }
    }

    private function getAllCourse(){

        if (!isset($_SESSION['id_docente'])) {
            jsonResponse([]);
            return;
        }

        $id_docente = $_SESSION['id_docente'];

        $resp = $this->sqlGetCursoByDocente($id_docente);
        jsonResponse($resp);
    }
}   

/*ESTO ES LO QUE FALTABA */
new DashboardDocenteController($_POST);
