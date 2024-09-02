<?php
class departamento
{
    public $coddep = "";
    public $nomdep = "";
    public $st = "";
    public function __GET($k)
    {
        return $this->$k;
    }

    public function __SET($k, $v)
    {
        return $this->$k = $v;
    }

    function __construct() {}
}
class provincia
{
    public $coddep = "";
    public $codpro = "";
    public $nomdep = "";
    public $nompro = "";
    public $st = "";
    public function __GET($k)
    {
        return $this->$k;
    }

    public function __SET($k, $v)
    {
        return $this->$k = $v;
    }

    function __construct() {}
}
class distrito
{
    public $coddep = "";
    public $codpro = "";
    public $coddis = "";
    public $nomdis = "";
    public $nomdep = "";
    public $nompro = "";
    public $prec_envio = "";
    public $st = "";
    public function __GET($k)
    {
        return $this->$k;
    }

    public function __SET($k, $v)
    {
        return $this->$k = $v;
    }

    function __construct() {}
}
