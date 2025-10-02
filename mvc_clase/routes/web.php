<?php

use app\controllers\HomeController;
use app\controllers\DatosController;
use lib\Route;

//Route::get("/", [HomeController::class,"index"]);

Route::get("/Home", [HomeController::class,"index"]);
Route::get("/Datos", [DatosController::class,"index"]);

//Route::post("/Contactar", [HomeController::class,"index"]);

Route::dispatch();
?>