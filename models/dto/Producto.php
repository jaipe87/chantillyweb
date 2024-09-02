<?php

class Producto extends Producto_web
{
    public $cia = 0;
    public $codart = "";
    public $codfab = "";
    public $descri= "";
    public $porciones="";
    public $precio = 0.00;


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