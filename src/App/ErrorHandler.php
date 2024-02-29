<?php

namespace SVMLiver\App;

class ErrorHandler
{
    public static function SetErrorView($errorStatusCode)
    {
        http_response_code($errorStatusCode);
        include_once __DIR__ . "/../../views/Errors/" . $errorStatusCode . ".php";
    }
}
