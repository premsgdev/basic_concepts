<?php

namespace App\Format;

class JSON  extends BaseFormat
implements FromStringInterface, FormatInterface {

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function convert(): string
    {
        return serialize($this->data);
    }

    public function convertFromString(string $string)
    {
        return json_decode($string);
    }
}
?>
