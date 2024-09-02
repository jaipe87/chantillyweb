<?php

class Detalle
{
    public $id_menu = 0;
    public $id_usuario = 0;
    public $nombre_menu = "";
    public $orden_menu = 0;
    public $nivel_menu = 0;
    public $est_menu = 0;
    public $opcion_activa = 0;
    public $link_view = "";
    


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