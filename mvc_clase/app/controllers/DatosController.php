<?php
namespace app\controllers;

use app\models\DatosModel;

require_once __DIR__ . "/../models/DatosModel.php";

class DatosController {
    public function index() {
        $model = new DatosModel();
        $info = $model->getInfo();

        // 🔹 Pasar esos datos a la vista
        return $this->view('DatosView', [
            'title' => 'Datos',
            'info' => $info
        ]);
    }

    private function view($vista, $data = []) {
        extract($data);
        if (file_exists("../app/views/$vista.php")) {
            ob_start();
            include "../app/views/$vista.php";
            return ob_get_clean();
        } else {
            echo "Vista no encontrada: $vista";
        }
    }
}
