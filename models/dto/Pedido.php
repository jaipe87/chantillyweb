<?php
require_once './models/dto/Detpedido.php';
class Pedido
{

    public $id_pedido = 0;
    public $codigo = 0;
    public $fecha = "0000-00-00";
    public $tipo_envio = 0;
    public $idsucursal = 0;

    public $coddep = "";
    public $codpro = "";
    public $coddis = "";
    public $direcc_entrega = "";
    public $ref_direccion = "";
    public $numorder = "";
    public $codresponse_niubiz = 0;
    public $response_niubiz = "";
    public $envio = 0.00;
    public $subtotal = 0.00;
    public $total = 0.00;
    public $stterminos = 0;
    public $stprivacidad = 0;
    public $latitud = 0.00;
    public $longitud = 0.00;
    public $st = 0;
    public $docventa = 0;
    public $ruc = "";
    public $razsoc = "";
    public $dirfiscal = "";
    public $detalle = [];
    public $created_at = "0000-00-00 00:00:00";
    public $updated_at = "0000-00-00 00:00:00";

    public $nombre_local = "";
    public $direcc_local = "";
    public $desentrega ="";
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
