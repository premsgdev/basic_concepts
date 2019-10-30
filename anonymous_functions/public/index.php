<?php
require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
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

$found = array_filter($formats, function ($format){
    //return $format->getName() === 'JSON';
    echo $format->getName().'</br>';
});
var_dump($found);
?>