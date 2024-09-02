<?php

require_once './models/dto/ubigeo.php';

class daoUbigeo
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }


    public function select_all_departamento($Param)
    {
        $conn = $this->link;
        $lstdepartamento = [];
        $sql = "SELECT coddep,nomdep  FROM tg_tabdep WHERE  st=0 ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $odepartamento = new departamento();
                $odepartamento->coddep = $item['coddep'];
                $odepartamento->nomdep = $item['nomdep'];
                array_push($lstdepartamento, $odepartamento);
            }

            return $lstdepartamento;
        } else {
            return [];
        }
    }

    public function select_all_provincia($Param)
    {
        $conn = $this->link;
        $lstprovincia = [];
        $coddep = $Param["coddep"];
        $sql = "SELECT codpro,nompro  FROM tg_tabpro WHERE  st=0 AND coddep='$coddep'";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProvincia = new provincia();
                $oProvincia->codpro = $item['codpro'];
                $oProvincia->nompro = $item['nompro'];
                array_push($lstprovincia, $oProvincia);
            }
            return $lstprovincia;
        } else {
            return [];
        }
    }

    public function select_all_distrito($Param)
    {
        $conn = $this->link;
        $lstdistrito = [];
        $coddep = $Param["coddep"];
        $codpro = $Param["codpro"];
        $sql = "SELECT coddis,nomdis,prec_envio  FROM tg_tabdis WHERE  st=0 AND coddep='$coddep' AND codpro='$codpro' AND prec_envio!=0 AND st=0";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oDistrito = new distrito();
                $oDistrito->coddis = $item['coddis'];
                $oDistrito->nomdis = $item['nomdis'];
                $oDistrito->prec_envio = $item['prec_envio'];
                array_push($lstdistrito, $oDistrito);
            }
            return $lstdistrito;
        } else {
            return [];
        }
    }

    public function select_all_distrito_precio($Param)
    {
        $conn = $this->link;
        $oDistrito = new distrito();
        $coddep = $Param["coddep"];
        $codpro = $Param["codpro"];
        $coddis =  $Param["coddis"];
        $sql = "SELECT coddis,nomdis,prec_envio  FROM tg_tabdis WHERE  coddep='$coddep' AND codpro='$codpro'AND coddis='$coddis'  AND st=0";
           
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows()[0];
            $oDistrito->coddis = $lista['coddis'];
            $oDistrito->nomdis = $lista['nomdis'];
            $oDistrito->prec_envio = $lista['prec_envio'];
            return $oDistrito;
        } else {
            return [];
        }
    }
}
