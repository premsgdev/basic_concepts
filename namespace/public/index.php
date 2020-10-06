<?php
require __DIR__.'/../vendor/autoload.php';

use App\Format;
use App\Format\JSON;
use App\Format as F;
/**namespace override*/
use Guzzle\Http\Client;

use Guzzle\Http\Url;
use Guzzle\Http\EntityBody;

//use  App\Functions;
$data=[
    'name'=>'john',
    'place'=>'Munich'
];
$json = new JSON($data);
$yml = new Format\YAML($data);
$xml = new F\XML($data);
/*var_dump($json->convert());
var_dump($yml->convert());
var_dump($xml->convert());*/

fileopen();
/**namespace override*/
$client = new Client();
echo 'output->'.$client->getBaseUrl();

try {
    $url = new Url('hello','google.com');
} catch (Exception $e){
    echo $e->getMessage();
}
print_r($url->getPathSegments());

die('sdf');
?>
