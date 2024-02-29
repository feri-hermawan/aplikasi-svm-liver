<?php

use SVMLiver\App\Route;
use SVMLiver\controller\HomeController;
use SVMLiver\controller\SVMController;
use SVMLiver\controller\TestController;

Route::get("/", HomeController::class, "index");
Route::get("/dashboard", HomeController::class, "dashboard");
Route::get("/datatesting", HomeController::class, "datatesting");
Route::get("/datatraining", HomeController::class, "datatraining");
Route::post("/upload-data-training", SVMController::class, "UploadDataTraining");
Route::post("/delete-data/training", SVMController::class, "RemoveDataTraining");
Route::post("/prediksi-data-training", SVMController::class, "PrediksiDataTraining");
Route::post("/upload-data-testing",SVMController::class, "UploadDataTesting");
Route::post("/prediksi-data-testing", SVMController::class, "PrediksiDataTesting");
Route::post("/delete-data/testing", SVMController::class, "RemoveDataTesting");
Route::get("/visualisasi", HomeController::class, "Visualisasi");

/*Route Test */
Route::get("/test-json", TestController::class, "CreateJson");
Route::get("/read-json", TestController::class, "ReadJson");
Route::get("/create-json", TestController::class, "CreateJsonFromExcel");
Route::get("/testo", TestController::class, "testo");
