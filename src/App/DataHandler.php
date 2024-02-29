<?php

namespace SVMLiver\App;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class DataHandler
{
    public static function GetDataTraining(): array|null
    {
        $dataTrainingJson = file_get_contents(__DIR__ . "/../../public/json/data_raw/data_training_raw.json");
        $dataResult = __DIR__."/../../public/json/data_result/data_training_result.json";
        if(file_exists($dataResult))
        {
            $dataTrainingJson = file_get_contents($dataResult);
        }
        $dataTrainingArray = json_decode($dataTrainingJson, true);
        return $dataTrainingArray;
    }

    public static function GetDataTesting() : array|null {
        $dataTestingJson = file_get_contents(__DIR__."/../../public/json/data_raw/data_testing_raw.json");
        $dataResult = __DIR__."/../../public/json/data_result/data_testing_result.json";
        if(file_exists($dataResult))
        {
            $dataTestingJson = file_get_contents($dataResult);
        }
        $dataTestingArray = json_decode($dataTestingJson, true);
        return $dataTestingArray;
    }

    public static function CreateJsonDataTraining($excelData)
    {
        $reader = new Xlsx();
        $reader->setReadDataOnly(true);
        $spreedsheet = $reader->load($excelData);
        $woorksheet = $spreedsheet->getSheet(0);
        $lastRow = $woorksheet->getHighestRow();

        $data = [];

        for ($row = 1; $row <= $lastRow; $row++) {
            $data[] = [
                'nama' => $woorksheet->getCell('A' . $row)->getValue(),
                'x1' => $woorksheet->getCell('B' . $row)->getValue(),
                'x2' => $woorksheet->getCell('C' . $row)->getValue(),
                'x3' => $woorksheet->getCell('D' . $row)->getValue(),
                'x4' => $woorksheet->getCell('E' . $row)->getValue(),
                'x5' => $woorksheet->getCell('F' . $row)->getValue(),
                'x6' => $woorksheet->getCell('G' . $row)->getValue(),
                'x7' => $woorksheet->getCell('H' . $row)->getValue(),
                'x8' => $woorksheet->getCell('I' . $row)->getValue(),
                'hasil' => $woorksheet->getCell('J' . $row)->getValue(),
                'prediksi' => 0
            ];
        }

        $dataJson = json_encode($data);

        file_put_contents(__DIR__ . "/../../public/json/data_raw/data_training_raw.json", $dataJson);
    }

    public static function CreateJsonDataTesting($excelData)
    {
        $reader = new Xlsx();
        $reader->setReadDataOnly(true);
        $spreedsheet = $reader->load($excelData);
        $woorksheet = $spreedsheet->getSheet(0);
        $lastRow = $woorksheet->getHighestRow();

        $data = [];

        for ($row = 1; $row <= $lastRow; $row++) {
            $data[] = [
                'nama' => $woorksheet->getCell('A' . $row)->getValue(),
                'x1' => $woorksheet->getCell('B' . $row)->getValue(),
                'x2' => $woorksheet->getCell('C' . $row)->getValue(),
                'x3' => $woorksheet->getCell('D' . $row)->getValue(),
                'x4' => $woorksheet->getCell('E' . $row)->getValue(),
                'x5' => $woorksheet->getCell('F' . $row)->getValue(),
                'x6' => $woorksheet->getCell('G' . $row)->getValue(),
                'x7' => $woorksheet->getCell('H' . $row)->getValue(),
                'x8' => $woorksheet->getCell('I' . $row)->getValue(),
                'prediksi' => "kosong",
            ];
        }

        $dataJson = json_encode($data);

        file_put_contents(__DIR__ . "/../../public/json/data_raw/data_testing_raw.json", $dataJson);
    }
}
