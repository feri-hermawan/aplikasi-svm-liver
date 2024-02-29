<?php

namespace SVMLiver\controller;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SVMLiver\App\Controller;


class TestController extends Controller
{
    public static function CreateJson()
    {
        $file = [
            "hasil" => 1,
            [
                "x1" => 31.2,
                "x2" => 32,
                "x3" => 2323
            ]
        ];

        $jsonFile = json_encode($file);
        file_put_contents(__DIR__ . "/../../public/json/data_training.json", $jsonFile);

        return "Berhasil";
    }


    public static function ReadJson()
    {
        $data = file_get_contents(__DIR__ . "/../../public/json/data_training.json");
        $printData = json_decode($data, true);

        var_dump($printData['0']['x1']);
    }

    public static function CreateJsonFromExcel()
    {
        $tmpName = __DIR__ . "/../../public/data_excel/file.xlsx";
        $reader = new Xlsx();
        $reader->setReadDataOnly(true);
        $spreedsheet = $reader->load($tmpName);
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
            ];
        }

        $dataJson = json_encode($data);
        $dataArray = json_decode($dataJson, true);

        var_dump($dataArray);
        die();
    }

    public static function testo(){
        echo "test";
    }
}
