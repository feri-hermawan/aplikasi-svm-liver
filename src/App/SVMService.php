<?php

namespace SVMLiver\App;

use \SVM;

class SVMService {

    private static $instance = null;
    private $svm;
    private $model;
    private $modelTraining;
    private static $test;

    public function __construct() {
        $this->svm = new SVM();
    }

    public function TrainingData(){

        $dataTraining = DataHandler::GetDataTraining();
        $resultData = [];

        foreach ($dataTraining as $data) {
            array_push($resultData, [
                $data['hasil'],
                'x1' => $data['x1'],
                'x2' => $data['x2'],
                'x3' => $data['x3'],
                'x4' => $data['x4'],
                'x5' => $data['x5'],
                'x6' => $data['x6'],
                'x7' => $data['x7'],
                'x8' => $data['x8']
            ]);
        }

        $this->svm->setOptions([$this->svm::OPT_KERNEL_TYPE => $this->svm::KERNEL_LINEAR]);
        $model  = $this->svm->train($resultData);
        $model->save("model.svm");
        return $model;

    }


    public function ModelExists() : bool {
        return self::$modelTraining;
    }

    public static function GetModel(){
        return self::$model;
    }

    public function PredictData($data) : array{
        $dataResult = [];
        $modelSVMPath = __DIR__."/../../model.svm";
        
        $currentModel = $this->TrainingData();
        
        foreach ($data as $item) {
            $dataTest = [
                'x1' => $item['x1'],
                'x2' => $item['x2'],
                'x3' => $item['x3'],
                'x4' => $item['x4'],
                'x5' => $item['x5'],
                'x6' => $item['x6'],
                'x7' => $item['x7'],
                'x8' => $item['x8']
            ];

        $result = $currentModel->predict($dataTest);
        $item['prediksi'] = $result;

        array_push($dataResult, [
            'nama' => $item['nama'],
            'x1' => $item['x1'],
            'x2' => $item['x2'],
            'x3' => $item['x3'],
            'x4' => $item['x4'],
            'x5' => $item['x5'],
            'x6' => $item['x6'],
            'x7' => $item['x7'],
            'x8' => $item['x8'],
            'hasil' => $item['hasil'] ?? "kosong",
            'prediksi' => $item['prediksi']
        ]);
            
        }
        

        return $dataResult;
    }

}