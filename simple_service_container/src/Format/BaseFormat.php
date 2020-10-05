<?php
namespace App\Format;
abstract class BaseFormat {
    protected $data;

    public function getData()
    {
        return $this->data;
    }

    public function setData( $data):void
    {
        $this->data = $data;
    }
    
    public abstract function convert();

    public function __toString()
    {
       return $this->convert();
    }

    public function getName()
    {
        return  get_class($this);
    }
}

?>