<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

/* 🔴 RUTA CORRECTA Y SEGURA */
require_once __DIR__ . '/../model/LoginModel.php';

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$email = $data["email"] ?? "";
$password = $data["password"] ?? "";

/** @var LoginModel $model */
$model = new LoginModel();

$result = $model->validarUsuario($email, $password);

if ($result) {

    $_SESSION["rol"] = $result["rol"];
    $_SESSION["nombre"] = $result["nombre"];

    if ($result["rol"] === "docente") {
        $_SESSION["id_docente"] = $result["id"];
    }

    if ($result["rol"] === "estudiante") {
        $_SESSION["id_estudiante"] = $result["id"];
    }

    echo json_encode([
        "status" => "ok",
        "rol" => $result["rol"]
    ]);

} else {

    echo json_encode([
        "status" => "error",
        "message" => "Correo o contraseña incorrectos"
    ]);
}
?>