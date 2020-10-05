<?php

namespace App\Format;

class JSON  extends BaseFormat
implements FromStringInterface {
    protected $data;

    
    public function convert() 
    {
        return json_encode($this->data);
    }

    public function convertFromString(string $string)
    {
        return json_decode($string);
    }

    
}
?>
