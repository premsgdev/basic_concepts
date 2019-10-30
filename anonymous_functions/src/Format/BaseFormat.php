<?php
namespace App\Format;
abstract class BaseFormat {
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