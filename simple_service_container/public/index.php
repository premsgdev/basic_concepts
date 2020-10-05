<?php
require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\Service\Serializer;
use App\Controller\IndexController;
use App\Container;
$data = [
    'name' => 'john',
    'place' => 'Munich'
];
$json = new JSON($data);

$formats = [
    new JSON($data),
    new XML($data),
    new YAML($data)
];

$serializer = new Serializer(new JSON($data));
$controller = new IndexController($serializer);

$container = new Container();
$container->addService('service.jsonparser', function() use($data) {
    return new JSON($data);
});
$container->addService('format.xml', function() use($container) {
    return new XML();
});

$xmlConvertor = $container->getService('service.jsonparser');
var_dump($xmlConvertor->convert());
?>