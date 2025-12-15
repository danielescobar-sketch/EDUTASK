<?php
class Conexion {

    protected $db;

    public function __construct() {
        $this->db = $this->connect();
    }

    protected function connect(): PDO {
        $host = "localhost";
        $bdname = "edutask";
        $user = "root";
        $pass = "";

        try {
            $conexion = new PDO(
                "mysql:host=$host;dbname=$bdname;charset=utf8",
                $user,
                $pass
            );
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;

        } catch (PDOException $e) {
            die("❌ Error de conexión: " . $e->getMessage());
        }
    }

    // 🔴 MÉTODO AGREGADO (PARA TUS MODELOS)
    protected function conect(): PDO {
        return $this->db;
    }
}
