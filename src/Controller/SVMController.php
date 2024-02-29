<?php

namespace SVMLiver\controller;

use SVMLiver\App\Controller;
use SVMLiver\App\DataHandler;
use SVMLiver\App\DataSVMType;
use SVMLiver\App\Utils;
use SVMLiver\App\Validate;
use \SVM;
use SVMLiver\App\SVMService;
use SVMLiver\Config\SVMHelper;

class SVMController extends Controller
{
    private $svmService;
    public function __construct() {
        $this->svmService = new SVMService();
    }

    public function UploadDataTraining() : void
    {

        $data = $_FILES['datatraining'];
        $ext = pathinfo($data['name'], PATHINFO_EXTENSION);
        $fileName = "data_training.". $ext;
        if (Validate::Validation($data)) {
            $excelData = __DIR__ . "/../../public/data_excel/".$fileName;
            move_uploaded_file($data['tmp_name'], $excelData);

            DataHandler::CreateJsonDataTraining($excelData);
        };
        header('Location : http://localhost:8080/datatraining', true, 301);
    }

    public function RemoveDataTraining()
    {
        unlink(__DIR__."/../../public/data_excel/data_training.xlsx");
        unlink(__DIR__."/../../public/json/data_raw/data_training_raw.json");
        unlink(__DIR__."/../../public/json/data_result/data_training_result.json");
        unlink(__DIR__."/../../model.svm");

       return header("Location: http://localhost:8080/datatraining",true,301);
    }

    public function UploadDataTesting() : void
    {
        $data = $_FILES["datatesting"];
        $ext = pathinfo($data['name'], PATHINFO_EXTENSION);
        $fileName = "data_testing.".$ext;

        if(Validate::Validation($data))
        {
            $excelData = __DIR__."/../../public/data_excel/".$fileName;
            move_uploaded_file($data['tmp_name'], $excelData);

            DataHandler::CreateJsonDataTesting($excelData);
        }

        header("Location: http://localhost:8080/datatesting", true, 301);

    }

    public function RemoveDataTesting()
    {
        unlink(__DIR__."/../../public/data_excel/data_testing.xlsx");
        unlink(__DIR__."/../../public/json/data_raw/data_testing_raw.json");
        unlink(__DIR__."/../../public/json/data_result/data_testing_result.json");

       return header("Location: http://localhost:8080/datatesting",true,301);
    }

    public function PrediksiDataTraining()
    {
       
        $trainingResultFile = __DIR__."/../../public/json/data_result/data_training_result.json";
        $trainingRawFile = __DIR__."/../../public/json/data_raw/data_training_raw.json";
        
        if(file_exists($trainingRawFile) == true && file_exists($trainingResultFile) == false){
            
            $dataTraining = DataHandler::GetDataTraining();

            $result = $this->svmService->PredictData($dataTraining);
            $dataJson = json_encode($result);
            file_put_contents($trainingResultFile, $dataJson);
        }

        // return var_dump($this->svmService->svm);
        
        header('Location : http://localhost:8080/datatraining', true, 301);
    }

    public function PrediksiDataTesting(){
        $testingRawFile = __DIR__."/../../public/json/data_raw/data_testing_raw.json";
        $testingResultFile = __DIR__."/../../public/json/data_result/data_testing_result.json";
        
        if(file_exists($testingRawFile) == true && file_exists($testingResultFile) == false){
           
            $dataTesting = DataHandler::GetDataTesting();
            $resultData = [];
            $result = $this->svmService->PredictData($dataTesting);

            $dataJson = json_encode($result);
            file_put_contents($testingResultFile, $dataJson);
            
        }

        header('Location : http://localhost:8080/datatesting', true, 301);
    }


}
