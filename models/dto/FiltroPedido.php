<?php

class FiltroPedido
{
    public $id = 0;
    public $descri = "";
    public $tipo = "";
    
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