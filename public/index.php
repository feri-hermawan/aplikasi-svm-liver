<?php

require __DIR__ ."/../vendor/autoload.php";

use SVMLiver\App\Route;

/*Routes*/
require __DIR__ ."/../src/Routes/web.php";


Route::Run();


