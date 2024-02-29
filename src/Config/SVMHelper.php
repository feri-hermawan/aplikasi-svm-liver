<?php

namespace SVMLiver\Config;
use SVMLiver\App\SVMService;

class SVMHelper {

    private static $svm = null;

    private function __construct(Type $var = null) {
        $this->var = $var;
    }

    public static function GetInstance(){
        if(self::$svm == NULL){
            self::$svm = new SVMService();

        }

        return self::$svm;
    }


}