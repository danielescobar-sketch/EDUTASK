<?php
session_start();
require_once '../../helpers/jsonResponse.php';

if (empty($_POST['data'])) {
    return jsonResponse([
        "status" => false,
        "msg" => "No se ha encontrado la clave data"
    ]);
}

if (empty($_POST['caso'])) {
    return jsonResponse([
        "status" => false,
        "msg" => "No se ha encontrado la clave caso"
    ]);
}

$data = $_POST['data'];

switch ($_POST['caso']) {

    case 'cursos':

        if ($_SESSION['rol'] === 'docente') {
            require_once 'DashboardDocenteController.php';
            new DashboardDocenteController(data: $data);
            return;
        }

        return jsonResponse([
            'status' => false,
            'msg' => 'Rol no autorizado'
        ]);

    case 'tareas':
        // se implementará después
        break;

    default:
        return jsonResponse([
            'status' => false,
            'msg' => 'No existe el caso: ' . $_POST['caso']
        ]);
}
?>