<?php

class Producto_web
{
    public $cia = 0;
    public $codart_web = "";
    public $descri_corta = "";
    public $descri_larga = "";
    public $tipo_producto=0;
    public $cod_categoria=0;
    public $precio_min = 0.00;
    public $precio_max = 0.00;
    public $pagina_mostrar="";
    public $id_tematica=0;
    public $url="";
    public $stdestacado=0;
    public $mostrar_porciones=0;
    public $mostrar_kekes=0;
    public $mostrar_relleno=0;
    public $mostrar_dia_recojo=0;
    public $mostrar_dedicatoria=0;
    public $st=0;
    
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