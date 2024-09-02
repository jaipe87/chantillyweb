<?php

class Contacto
{
    public $id = 0;
    public $nombre_local = "";
    public $imagen = "";
    public $direccion = "";
    public $distrito = "";
    public $dias_atencion = "";
    public $horario_ini = "";
    public $horario_fin = "";
    public $link_local = "";
    public $latitud=0.00;
    public $longitud = 0.00;
    public $frame_google = "";
    public $distancia = 0.00;

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