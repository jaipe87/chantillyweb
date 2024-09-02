<?php

require_once './models/dto/Keke.php';

class daoKeke
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }


    public function select_all_keke($Param)
    {
        $conn = $this->link;
        $lstKekes = [];
        $cia = $Param["cia"];
        $sql = "SELECT cia,id_keke,keke,st  FROM tabkeke WHERE cia=$cia AND st=0 ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oKeke = new Keke();
                $oKeke->id_keke = $item['id_keke'];
                $oKeke->keke = $item['keke'];
                array_push($lstKekes, $oKeke);
            }

            return $lstKekes;
        } else {
            return [];
        }
    }

    public function select_one_keke($Param)
    {
        $conn = $this->link;
        $oKeke = new Keke();
        $cia = $Param["cia"];
        $id_keke = $Param["id_keke"];
        $sql = "SELECT cia,id_keke,keke,st  FROM tabkeke WHERE cia=$cia AND st=0  AND id_keke =$id_keke";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows()[0];
            $oKeke->id_keke = $lista['id_keke'];
            $oKeke->keke = $lista['keke'];
            return $oKeke;
        } else {
            return [];
        }
    }
}
