<?php
require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\Format\Serializer;
$data=[
    'name'=>'john',
    'place'=>'Munich'
];
$json = new JSON($data);

$formats = [
    new JSON($data),
    new XML($data),
    new YAML($data)
];

$serializer = new Serializer(new JSON);
var_dump($serializer->serialize($data));
?>