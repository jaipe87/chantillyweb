<?php

class Menu
{
    private $id_menu = 0;
    private $id_usuario = 0;
    private $nombre_menu = "";
    private $orden_menu = 0;
    private $nivel_menu = 0;
    private $est_menu = 0;
    private $opcion_activa = 0;
    private $link_view = "";

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