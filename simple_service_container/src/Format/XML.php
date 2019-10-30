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

    public function setData( $data):void
    {
        $this->data = $data;
    }
    public function convert() 
    {
        return xmlrpc_encode($this->data);
    }

}
?>
