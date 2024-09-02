<?php

class Checkout
{
    public $id = 0;
    public $nombre_local = "";
    public $imagen = "";
    public $direccion = "";
    public $distrito = "";
    public $dias_atencion = "";
    public $horario_ini = "";
    public $horario_fin = "";
    public $id_categoria = 0;


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