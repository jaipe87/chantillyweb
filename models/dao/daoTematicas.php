<?php

require_once './models/dto/Tematica.php';

class daoTematicas
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }


    public function select_all_tematicas($Param)
    {
        $conn = $this->link;
        $lstTematicas = [];
        $cia = $Param["cia"];
        $sql = "SELECT cia, id_tematica,tematica,url  FROM tabtematica WHERE cia=$cia AND st=0 ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oTematica = new Tematica(); // Cambiar a la clase correcta

                $oTematica->id_tematica = Encriptar($item['id_tematica']);
                $oTematica->tematica = $item['tematica'];
                $oTematica->url = $item['url'];

                array_push($lstTematicas, $oTematica);
            }

            return $lstTematicas;
        } else {
            return [];
        }
    }

    public function select_one_tematicas($Param)
    {
        $conn = $this->link;
        $oTematica = new Tematica();
        $cia = $Param["cia"];
        $id_tematica = $Param["id_tematica"];
        $sql = "SELECT cia, id_tematica,tematica,url  FROM tabtematica WHERE cia=$cia AND st=0  AND id_tematica=$id_tematica";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows()[0];
            $oTematica->id_tematica = Encriptar($lista['id_tematica']);
            $oTematica->tematica = $lista['tematica'];
            $oTematica->url = $lista['url'];
            return $oTematica;
        } else {
            return [];
        }
    }
}
