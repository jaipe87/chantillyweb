<?php

require_once './models/dto/Empresa.php';

class daoEmpresa
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }


    public function select_all_Empresa($Param)
    {
        $conn = $this->link;
        $oEmpresa = new Empresa();
        $cia = $Param["cia"];
        $sql = "SELECT  cia,des,ruc,st,whatsapp,whatsapp1,nosotros,facebook,instagram,twitter,tiktok,logo_header,logo_footer  FROM tabcia WHERE st=0 AND cia=$cia ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows()[0];
            $oEmpresa->cia = $lista['cia'];
            $oEmpresa->des = $lista['des'];
            $oEmpresa->ruc = $lista['ruc'];
            $oEmpresa->st = $lista['st'];
            $oEmpresa->whatsapp = $lista['whatsapp'];
            $oEmpresa->nosotros = $lista['nosotros'];
            $oEmpresa->facebook = $lista['facebook'];
            $oEmpresa->instagram = $lista['instagram'];
            $oEmpresa->twitter = $lista['twitter'];
            $oEmpresa->tiktok = $lista['tiktok'];
            $oEmpresa->whatsapp1 = $lista['whatsapp1']; 
            $oEmpresa->logo_header = $lista['logo_header']; 
            $oEmpresa->logo_footer = $lista['logo_footer']; 
            return $oEmpresa;
        } else {
            return [];
        }
    }
}
