<?php


class EmpresaFactory
{
   
    public static function GetEmpresa($Param, $DB)
    {

       
        $daoEmpresa = new daoEmpresa($DB);
        $oEmpresa =  $daoEmpresa->select_all_Empresa($Param);
        return $oEmpresa;
    }
}
