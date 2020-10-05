<?php

namespace App\Format;

class JSON  extends BaseFormat {
    protected $data;

    
    public function convert()
    {
        return json_encode($this->data);
    }
}
?>
