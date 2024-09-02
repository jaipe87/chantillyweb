<?php

class Banner
{
    public $id = 0;
    public $titulo = "";
    public $url = "";
    public $link = "";
    public $st = 0;
    public $orden=0;

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