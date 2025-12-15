<?php
session_start();

require_once '../model/DashboardEstudianteModel.php';
require_once '../../helpers/jsonResponse.php';

class DashboardEstudianteController extends DashboardEstudianteModel {

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

            default:
                jsonResponse([]);
                break;
        }
    }

    private function getAllCourse(){

        if (!isset($_SESSION['id_estudiante'])) {
            jsonResponse([]);
            return;
        }

        $resp = $this->sqlGetAllCursos();
        jsonResponse($resp);
    }
}

/* 🔴 EJECUCIÓN */
new DashboardEstudianteController($_POST);
