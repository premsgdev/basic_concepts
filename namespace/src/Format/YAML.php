<?php

namespace App\Format;

class YAML extends BaseFormat
{
    protected $data;

    public function convert()
    {
        return 'yaml';
    }
}

?>
