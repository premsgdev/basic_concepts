<?php

namespace App\Format;

class YAML {
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData()
    {
        $this->data = $data;
        
    }
}
?>
