<?php

namespace App\Format;

use SimpleXMLElement;

class XML extends BaseFormat
{
    protected $data;

    public function convert()
    {
        $xml = new SimpleXMLElement('<root/>');

        array_walk_recursive($this->data, array($xml, 'addChild'));

        return $xml->asXML();
    }
}

?>
