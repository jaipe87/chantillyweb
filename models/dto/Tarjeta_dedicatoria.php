<?php

class Tarjeta_dedicatoria
{
    public $cia = 0;
    public $importe = 0;
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