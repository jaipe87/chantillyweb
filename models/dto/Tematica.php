<?php

class Tematica
{
    public $cia = 0;
    public $id_tematica = 0;
    public $tematica = "";
    public $url = "";
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