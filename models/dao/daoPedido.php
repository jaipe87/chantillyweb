<?php

use Google\Service\CloudBuild\Param;

require_once './models/dto/Pedido.php';

class daoPedido
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }



    public function InitNumberOrder($Param = [])
    {

        $conn = $this->link;
        $conn->StartTrans();
        $oPedido = new Pedido();

        $codigo = $Param["codigo"];

        $sql = "SELECT IFNULL(MAX(id_pedido),0) + 1 cod FROM tabpedido";
        $rs = $conn->execute($sql);
        if ($rs && $rs->recordCount() == 1) {
            $oPedido->id_pedido = $rs->GetRows()[0]["cod"];
        } else {
            $conn->FailTrans();
            return 0;
        }
        $oPedido->codigo = $codigo;
        $oPedido->st = 1;
        $sql = "INSERT INTO tabpedido(id_pedido,codigo,st)VALUES('$oPedido->id_pedido','$oPedido->codigo','$oPedido->st');";

        $ind = $conn->Execute($sql);
        if (!$ind) {
            $conn->FailTrans();
            return 0;
        }
        $conn->CompleteTrans();
        return $oPedido->id_pedido;
    }
    public function  GrabaPedido($Param)
    {

        try {

            $conn = $this->link;
            $conn->StartTrans();

            $oPedido = new Pedido();

            if ($Param["id_pedido"] <> 0) {

                $oPedido->id_pedido = $Param["id_pedido"];

                $sql = "SELECT count(*) numPedido FROM tabpedido WHERE id_pedido='$oPedido->id_pedido';";
                $rs = $conn->execute($sql);
                if ($rs && $rs->recordCount() == 1) {
                    $numPedido = $rs->GetRows()[0]["numPedido"];
                    if ($numPedido == 0) {
                        $sql = "SELECT IFNULL(MAX(id_pedido),0) + 1 cod FROM tabpedido";
                        $rs = $conn->execute($sql);
                        if ($rs && $rs->recordCount() == 1) {
                            $oPedido->id_pedido = $rs->GetRows()[0]["cod"];
                        }
                    }
                }
            } else {
                $sql = "SELECT IFNULL(MAX(id_pedido),0) + 1 cod FROM tabpedido";
                $rs = $conn->execute($sql);
                if ($rs && $rs->recordCount() == 1) {
                    $oPedido->id_pedido = $rs->GetRows()[0]["cod"];
                }
            }


            $oPedido->codigo = $Param["codigo"];
            $oPedido->tipo_envio = $Param["tipo_envio"];
            $oPedido->idsucursal = $Param["idsucursal"];
            $oPedido->coddep = $Param["coddep"];
            $oPedido->codpro = $Param["codpro"];
            $oPedido->coddis = $Param["coddis"];
            $oPedido->direcc_entrega = $Param["direcc_entrega"];
            $oPedido->ref_direccion = $Param["ref_direccion"];
            $oPedido->numorder = (!isset($Param["numorder"]) ? ""  : $Param["numorder"]);
            $oPedido->codresponse_niubiz = (!isset($Param["codresponse_niubiz"]) ? "0"  : $Param["codresponse_niubiz"]);
            $oPedido->response_niubiz =  (!isset($Param["response_niubiz"]) ? ""  : $Param["response_niubiz"]);
            $oPedido->envio = $Param["envio"];
            $oPedido->subtotal = $Param["subtotal"];
            $oPedido->total = $Param["total"];
            $oPedido->stterminos = $Param["stterminos"];
            $oPedido->stprivacidad = $Param["stprivacidad"];
            $oPedido->latitud = $Param["latitud"];
            $oPedido->longitud = $Param["longitud"];
            $oPedido->st = 0;
            $oPedido->detalle = (!isset($Param["detalle"]) ? [] : $Param["detalle"]);
            $oPedido->docventa = $Param["tipdocventa"];
            $oPedido->ruc = $Param["ruc"];
            $oPedido->razsoc = $Param["razsoc"];
            $oPedido->dirfiscal = $Param["dirfiscal"];

            $sql = "INSERT INTO tabpedido(id_pedido,codigo,tipo_envio,idsucursal,coddep,codpro,coddis,direcc_entrega,ref_direccion,numorder,codresponse_niubiz,response_niubiz,
              envio,subtotal,total,stterminos,stprivacidad,latitud,longitud,st,docventa,ruc,razsoc,dirfiscal)
              VALUES('$oPedido->id_pedido','$oPedido->codigo','$oPedido->tipo_envio','$oPedido->idsucursal','$oPedido->coddep','$oPedido->codpro','$oPedido->coddis','$oPedido->direcc_entrega','$oPedido->ref_direccion',
              '$oPedido->numorder','$oPedido->codresponse_niubiz','$oPedido->response_niubiz','$oPedido->envio','$oPedido->subtotal','$oPedido->total','$oPedido->stterminos',
              '$oPedido->stprivacidad','$oPedido->latitud','$oPedido->longitud','$oPedido->st','$oPedido->docventa','$oPedido->ruc','$oPedido->razsoc','$oPedido->dirfiscal') ON DUPLICATE KEY UPDATE codigo='$oPedido->codigo',tipo_envio='$oPedido->tipo_envio',idsucursal='$oPedido->idsucursal',
              coddep='$oPedido->coddep',codpro='$oPedido->codpro',coddis='$oPedido->coddis',direcc_entrega='$oPedido->direcc_entrega',ref_direccion='$oPedido->ref_direccion',numorder='$oPedido->numorder',codresponse_niubiz='$oPedido->codresponse_niubiz',
              response_niubiz='$oPedido->response_niubiz', envio='$oPedido->envio',subtotal='$oPedido->subtotal',total='$oPedido->total',stterminos='$oPedido->stterminos',stprivacidad='$oPedido->stprivacidad',
              latitud='$oPedido->latitud',longitud='$oPedido->longitud',updated_at=now(), st='$oPedido->st',docventa='$oPedido->docventa',ruc='$oPedido->ruc',razsoc='$oPedido->razsoc',dirfiscal='$oPedido->dirfiscal'  ";

            $ind = $conn->Execute($sql);

            if (!$ind) {
                $conn->FailTrans();
                return 0;
            } else {
                $ind = $oPedido->id_pedido;

                $sql = "DELETE FROM detpedido WHERE id_pedido='$oPedido->id_pedido';";
                $conn->Execute($sql);

                if (count($oPedido->detalle) > 0) {
                    $detpedido = $oPedido->detalle;
                    foreach ($detpedido as $key => $item) {
                        $sqldetalle = "INSERT INTO detpedido(id_pedido,codart,codart_web,descri_corta,cantidad,precio,porcion,medidas,keke,relleno,diarecojo,dedicatoria,pordesc,descto,neto)VALUES('$oPedido->id_pedido','$item->codart','$item->codart_web','$item->descri_corta','$item->cantidad','$item->precio','$item->porcion','$item->medidas','$item->keke','$item->relleno','$item->diarecojo','$item->dedicatoria','$item->pordesc','$item->descto','$item->neto')";
                        $conn->Execute($sqldetalle);
                    }
                } else {
                    $conn->FailTrans();
                    return 0;
                }
            }
            $conn->CompleteTrans();
        } catch (Exception $e) {
            $conn->FailTrans();
            return 0;
        }
        return $ind;
    }
}
