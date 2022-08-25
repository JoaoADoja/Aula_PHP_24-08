<?php 

require_once '../vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$logger = new Logger ('nomedocanal');

$logger-> pushHandler(new StreamHandler(__DIR__.'/App.log', logger::DEBUG));

$logger->info('Este é uma string da info');
$logger->warning('Isto é um warning ...');
$logger->error('Esta é uma mensagem de erro');

$variable = array(1,17, "Hello!", null);
var_dump($variable);
