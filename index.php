<?php

use WorkshopComposer\Graficos\Donnut;
use WorkshopComposer\Soma;

require 'vendor/autoload.php';

if (file_exists('.env')){
    $dotenv = Dotenv\Dotenv::create(__DIR__);
    $dotenv->load();
}

$soma = new Soma();
$donnut = new Donnut();