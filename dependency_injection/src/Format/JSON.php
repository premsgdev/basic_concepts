<?php

namespace App\Format;

class JSON  extends BaseFormat
implements FromStringInterface, FormatInterface {
    protected $data;

    public function convert() : string
    {
        return json_encode($this->data);
    }

    public function convertFromString(string $string)
    {
        return json_decode($string);
    }
}
?>
