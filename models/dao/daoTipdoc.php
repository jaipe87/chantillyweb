<?php

require_once './models/dto/Tipdoc.php';

class daoTipdoc
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }


    public function select_all_Tipdoc($Param)
    {
        $conn = $this->link;
        $lstTipdoc = [];
        $sql = "SELECT cod,descri,desabr,csun,lo  FROM tg_tipdoc WHERE sit=0 ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oTipdoc = new Tipdoc();
                $oTipdoc->cod = $item['cod'];
                $oTipdoc->descri = $item['descri'];;
                $oTipdoc->desabr = $item['desabr'];
                $oTipdoc->lo = $item['lo'];
                array_push($lstTipdoc, $oTipdoc);
            }
            return $lstTipdoc;
        } else {
            return [];
        }
    }


}
