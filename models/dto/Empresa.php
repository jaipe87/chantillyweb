<?php

class Empresa
{
    public $cia = 0;
    public $des = "";
    public $nosotros = "";
    public $facebook = "";
    public $instagram = "";
    public $whatsapp = "";
    public $tiktok = "";
    public $twitter = "";
    public $whatsapp1 ="";
    public $logo_header="";
    public $logo_footer="";
    
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