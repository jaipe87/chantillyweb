<?php

class DetPedido
{
    
    public $id=0;
    public $id_pedido = 0;
    public $codart = "";
    public $codart_web ="";
    public $descri_corta = 0;
    public $cantidad = 0;
    public $precio= 0.00;
    public $porcion="";
    public $medidas="";
    public $keke="";
    public $relleno="";
    public $diarecojo="0000-00-00";
    public $dedicatoria="";
    public $pordesc=0.00;
    public $descto=0.00;
    public $neto=0.00;
    public $urldet= "";

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