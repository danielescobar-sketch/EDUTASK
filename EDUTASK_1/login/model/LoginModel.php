<?php
class LoginModel {

    private $conn;

    public function __construct() {

        $this->conn = new mysqli("localhost", "root", "", "edutask");

        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }

        $this->conn->set_charset("utf8");
    }

    public function validarUsuario($email, $password) {

        /* ======================
           BUSCAR ESTUDIANTE
        ====================== */

        $sql = "SELECT id_estudiante, nombre
                FROM estudiante
                WHERE correo = ? AND contrasena = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {

            $stmt->bind_result($id, $nombre);
            $stmt->fetch();

            return [
                "rol"    => "estudiante",
                "id"     => $id,
                "nombre" => $nombre
            ];
        }

        $stmt->close();


        /* ======================
           BUSCAR DOCENTE
        ====================== */

        $sql = "SELECT id_docente, nombre
                FROM docente
                WHERE correo = ? AND contrasena = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {

            $stmt->bind_result($id, $nombre);
            $stmt->fetch();

            return [
                "rol"    => "docente",
                "id"     => $id,
                "nombre" => $nombre
            ];
        }

        $stmt->close();

        return false;
    }
}
?>