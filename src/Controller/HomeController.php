<?php

namespace SVMLiver\controller;

use SVMLiver\App\Controller;
use SVMLiver\App\DataHandler;
use SVMLiver\App\Functions;
use SVMLiver\App\Utils;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view("index", [
            "title" => "Home"
        ]);
    }

    public function dashboard()
    {
        $dataTraining = DataHandler::GetDataTraining();
        $dataTesting = DataHandler::GetDataTesting();
        $totalDataTraining = 0;
        $totalDataTesting = 0;
        $akurasi = 0;
        
        if(!is_null($dataTraining)){

            $totalDataTraining = count($dataTraining);
            $totalDataTesting = count($dataTesting);
            $dataBenar;
            foreach($dataTraining as $data){
                if($data['hasil'] == $data['prediksi']){
                    $dataBenar +=1;
                }
            }
        
            $akurasi = Utils::AccuracyCount($dataBenar, $totalDataTraining);

        }
        
        
        return $this->view("dashboard", [
            "title" => "Dashboard",
            "totalDataTraining" => $totalDataTraining,
            "totalDataTesting" => $totalDataTesting,
            "akurasi" => $akurasi
        ]);
    }

    public function datatesting()
    {
        $dataTesting = DataHandler::GetDataTesting();
        return $this->view("data-testing", [
            "title" => "Data Testing",
            "dataTesting" => $dataTesting

        ]);
    }

    public function datatraining()
    {
        $dataTraining = DataHandler::GetDataTraining();
        return $this->view("data-training", [
            "title" => "Data Training",
            "dataTraining" => $dataTraining
        ]);
    }

    public function Visualisasi(){
    return $this->view("visualisasi",[
        "title" => "Visualisasi"
    ]);
    }
}
