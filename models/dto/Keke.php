<?php

class Keke
{
    public $cia = 0;
    public $id_keke = 0;
    public $keke = "";
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