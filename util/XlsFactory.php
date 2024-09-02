<?php
include_once './lib/ExcelPhp/Classes/PHPExcel.php';
class XlsFactory
{
    public static function CrearExcel($Autor,$title) {


        $objPHPExcel = new PHPExcel();

        $objPHPExcel->getProperties()
            ->setCreator($Autor)
            ->setLastModifiedBy($Autor)
            ->setTitle($title)
            ->setSubject($title)
            ->setDescription("Documento generado con PHPExcel")
            ->setKeywords("excel phpexcel php")
            ->setCategory("Reporte");
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->setTitle('Hoja 1');


        return $objPHPExcel;
    }
}