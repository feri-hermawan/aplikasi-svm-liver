<?php

namespace SVMLiver\App;


enum DataSVMType: string
{
    case DataTraining = 'DataTraining';
    case DataTesting = 'DataTesting';
}

class Controller
{
    protected function view($view, $data = [])
    {
        extract($data);
        require __DIR__ . "/../../views/" . $view . ".view.php";
    }

    protected function CreateDataJson(DataSVMType $type): bool
    {
        if ($type->value === "DataTraining") {
            //
        } elseif ($type->value === "DataTesting") {
            //
        }

        return false;
    }
}
