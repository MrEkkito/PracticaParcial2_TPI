<?php
namespace app\models;


require_once $_SERVER['DOCUMENT_ROOT'] . "/conexionphp/database.php";

class DatosModel {
    private $db;

    public function __construct() {
        $this->db = new \Database();
    }

    public function getInfo() {
        return $this->db->select("SELECT * FROM estudiantes"); // Va a dar error porque no existe la tabla, crea la base de datos y la tabla
    }
}
