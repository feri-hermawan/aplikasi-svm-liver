<?php

namespace SVMLiver\App;

class Utils {

    public static function DataExists(String $type) : bool {
        $fileExist = false;
        if( strtolower($type) == "training" )
        {
            $fileExist = file_exists(__DIR__. "/../../public/json/data_raw/data_training_raw.json");
        } elseif ( strtolower($type) == "testing" ) {
            $fileExist = file_exists(__DIR__. "/../../public/json/data_raw/data_testing_raw.json");
        }
        return $fileExist;
    }

    public static function AccuracyCount($dataBenar, $total) {
        $result = ($dataBenar/$total) * 100;
        return $result;
    }
}
