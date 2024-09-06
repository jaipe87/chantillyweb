<?php

use Google\Service\CloudBuild\Param;

require_once './models/dto/Pedido.php';
require_once './models/dto/FiltroPedido.php';
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
    public function GetPedido($Param)
    {
        $conn = $this->link;
        $conn->StartTrans();
        $ListaPedido = [];
        $id_pedido = $Param["id_pedido"];
        $idFiltro = $Param["idFiltro"];
        $idtipo = $Param["id_tipo"];

        $fecha_actual = date("Y-m-d");
        if ($idFiltro == 1) {
            $nueva_fecha_suma_mes = date("Y-m-d", strtotime($fecha_actual . "-1 month"));
        }
        if ($idFiltro == 2) {
            $nueva_fecha_suma_mes = date("Y-m-d", strtotime($fecha_actual . "-3 month"));
        }
        if ($idFiltro == 3) {
            $nueva_fecha_suma_mes = date("Y-m-d", strtotime($fecha_actual . "-6 month"));
        }

        $sql = " SELECT id_pedido,date(tabpedido.fecha)fecha,tabpedido.tipo_envio,tipentrega.descri desentrega,tabpedido.idsucursal, tablocales.nombre_local, tablocales.direccion direcc_local, tabpedido.direcc_entrega,tabpedido.ref_direccion, tabpedido.envio, tabpedido.total
                 FROM tabpedido  INNER JOIN tipentrega ON tipentrega.id=tabpedido.tipo_envio LEFT JOIN tablocales ON tablocales.id=tabpedido.idsucursal
                 WHERE tabpedido.st=0";
        if ($id_pedido != 0) {
            $sql .= " AND tabpedido.id_pedido=$id_pedido ";
        }
        if ($idFiltro != 0) {
            if ($idtipo == 0) {
                $sql .= " AND date(tabpedido.fecha)>='$nueva_fecha_suma_mes' AND date(tabpedido.fecha)<='$fecha_actual'";
            } else {
                $sql .= " AND year(tabpedido.fecha)='$idFiltro'";
            }
        }

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oPedido = new Pedido();
                $oPedido->id_pedido = $item["id_pedido"];
                $oPedido->fecha = $item["fecha"];
                $oPedido->tipo_envio = $item["tipo_envio"];
                $oPedido->desentrega = $item["desentrega"];
                $oPedido->idsucursal = $item["idsucursal"];
                $oPedido->nombre_local = $item["nombre_local"];
                $oPedido->direcc_local = $item["direcc_local"];
                $oPedido->direcc_entrega = $item["direcc_entrega"];
                $oPedido->ref_direccion = $item["ref_direccion"];
                $oPedido->envio = $item["envio"];
                $oPedido->total = $item["total"];
                array_push($ListaPedido, $oPedido);
            }


            foreach ($ListaPedido as $oPedido) {

                $sql = "SELECT  detpedido.id,detpedido.id_pedido,detpedido.codart,detpedido.codart_web,detpedido.descri_corta,detpedido.cantidad,detpedido.precio,detpedido.porcion,detpedido.medidas,
                                detpedido.keke,detpedido.relleno,detpedido.diarecojo,detpedido.dedicatoria,detpedido.pordesc,detpedido.descto,detpedido.neto,tabart.urldet
                        FROM detpedido INNER JOIN  tabart ON tabart.codart=detpedido.codart  WHERE  detpedido.id_pedido=$oPedido->id_pedido ORDER BY detpedido.id;";
                $rs = $conn->execute($sql);

                $recordCount = $rs->recordCount();
                if ($recordCount > 0) {
                    $lista = $rs->GetRows();
                    foreach ($lista as $item) {
                        $odetPedido = new DetPedido();

                        $odetPedido->id = $item["id"];
                        $odetPedido->id_pedido = $item["id_pedido"];
                        $odetPedido->codart = $item["codart"];
                        $odetPedido->codart_web = $item["codart_web"];
                        $odetPedido->descri_corta = $item["descri_corta"];
                        $odetPedido->cantidad = $item["cantidad"];
                        $odetPedido->precio = $item["precio"];
                        $odetPedido->porcion = $item["porcion"];
                        $odetPedido->medidas = $item["medidas"];
                        $odetPedido->keke = $item["keke"];
                        $odetPedido->relleno = $item["relleno"];
                        $odetPedido->diarecojo = $item["diarecojo"];
                        $odetPedido->dedicatoria = $item["dedicatoria"];
                        $odetPedido->pordesc = $item["pordesc"];
                        $odetPedido->descto = $item["descto"];
                        $odetPedido->neto = $item["neto"];
                        $odetPedido->urldet = $item["urldet"];
                        array_push($oPedido->detalle, $odetPedido);
                    }
                }
            }

            return $ListaPedido;
        } else {
            return [];
        }
    }

    public function combofecha($Param)
    {

        $conn = $this->link;

        $conn->StartTrans();

        $Listafiltro = [];
        $id_usuario = $Param["id_usuario"];


        $sql = " SELECT id, descri, '0' tipo  FROM  tabfiltro_pedido
                 UNION ALL
                 SELECT  YEAR(tabpedido.fecha) id, YEAR(tabpedido.fecha) annio,'1' tipo FROM tabpedido WHERE codigo = $id_usuario AND tabpedido.st=0 
                 GROUP BY YEAR(tabpedido.fecha) ";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oFiltroPedido = new FiltroPedido();
                $oFiltroPedido->id = $item["id"];
                $oFiltroPedido->descri = $item["descri"];
                $oFiltroPedido->tipo = $item["tipo"];
                array_push($Listafiltro, $oFiltroPedido);
            }

            return $Listafiltro;
        } else {
            return [];
        }
    }
}
