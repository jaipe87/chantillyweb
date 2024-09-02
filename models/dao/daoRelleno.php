<?php

require_once './models/dto/Relleno.php';

class daoRelleno
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }


    public function select_all_relleno($Param)
    {
        $conn = $this->link;
        $lstrelleno = [];
        $cia = $Param["cia"];
        $sql = "SELECT cia,id_relleno,relleno,st  FROM tabrelleno WHERE cia=$cia AND st=0 ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oRelleno = new Relleno();
                $oRelleno->id_relleno = $item['id_relleno'];
                $oRelleno->relleno = $item['relleno'];
                array_push($lstrelleno, $oRelleno);
            }

            return $lstrelleno;
        } else {
            return [];
        }
    }

    public function select_one_relleno($Param)
    {
        $conn = $this->link;
        $oRelleno = new Relleno();
        $cia = $Param["cia"];
        $id_relleno = $Param["id_relleno"];
        $sql = "SELECT cia,id_relleno,relleno,st  FROM tabrelleno WHERE cia=$cia AND st=0  AND id_relleno =$id_relleno";
        $rs = $conn->execute($sql);
       
        $recordCount = $rs->recordCount();
     
        if ($recordCount > 0) {
            $lista = $rs->GetRows()[0];
            $oRelleno->id_relleno = $lista['id_relleno'];
            $oRelleno->relleno = $lista['relleno'];
            return $oRelleno;
        } else {
            return [];
        }
      
    }
}
