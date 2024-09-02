<?php

class Relleno
{
    public $cia = 0;
    public $id_relleno = 0;
    public $relleno = "";
    public $st = 0;


    public function __GET($k)
    {
        return $this->$k;
    }

    public function __SET($k, $v)
    {
        return $this->$k = $v;
    }

    function __construct()
    {
    }
}