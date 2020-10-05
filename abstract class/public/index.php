<?php
require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;

$data=[
    'name'=>'john',
    'place'=>'Munich'
];
$json = new JSON($data);

var_dump($json->convert());
?>