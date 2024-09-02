<?php

class Pagina
{
    public $id_pagina = 0;
    public $pagina = 0;
    public $link_view ="";
    public $st = "";
    public $orden = 0;
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