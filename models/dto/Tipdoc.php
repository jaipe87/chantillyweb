<?php

class Tipdoc
{
    public $cod = 0;
    public $descri = "";
    public $desabr = "";
    public $csun = "";
    public $lo = 0;
    public $sit = 0;
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