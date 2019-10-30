<?php
require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\BaseFormat;
$data=[
    'name'=>'john',
    'place'=>'Munich'
];
$json = new JSON($data);

function convertData(BaseFormat $format)
{
    return $format->convert();
}

var_dump(convertData($json));
?>