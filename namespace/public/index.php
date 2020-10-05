<?php
require __DIR__.'/../vendor/autoload.php';

use App\Format;
use App\Format\JSON;
use App\Format as F;
$data=[
    'name'=>'john',
    'place'=>'Munich'
];
$json = new JSON($data);
$yml = new Format\YAML($data);
$xml = new F\XML($data);
var_dump($json->convert());
var_dump($yml->convert());
var_dump($xml->convert());
?>
