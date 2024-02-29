<?php

namespace SVMLiver\App;

class Validate
{
    protected static $validExt = [
        "csv", "xlsx", "xls"
    ];
    public static function Validation($data)
    {
        /*Cek Extension*/
        $extData = explode(".", $data['name']);
        $extData = end($extData);
        if (!in_array($extData, self::$validExt)) {
            return false;
        };

        return true;
    }
}
