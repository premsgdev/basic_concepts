<?php

namespace App\Format;

class XML extends BaseFormat {
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
    public function convert()
    {
        return json_encode($this->data);
    }
}

