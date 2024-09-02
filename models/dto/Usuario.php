<?php

class Usuario
{

    public $id_usuario = 0;
    public $email="";
    public $pwd = "";
    public $tipdoc_usuario = "";
    public $nrodoc_usuario = "";
    public $nom_usuario = "";
    public $ape_usuario="";
    public $direc_usuario = "";

    public $cel_usuario = "";
    public $id_google = "";
    public $id_estado = "";
    public $verifiedEmail = 0;
    /*---------------------------------------------------------*/
    public $nom_estado = "";
    public $nom_doc="";

    public $created_at ="";

    public $verified_checkout=0;

    /*---------------------------------------------------------*/
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