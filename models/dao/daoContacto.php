<?php

require_once './models/dto/Contacto.php';

class daoContacto
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }
    public function carga_datos_contacto($Param)
    {
        $conn = $this->link;
        $lstContacto = [];
        
        $sql = "SELECT id id_local, nombre_local, imagen, direccion, distrito, dias_atencion, horario_ini, horario_fin, link_local,latitud,longitud,frame_google, 0 distancia
                FROM tablocales WHERE st=0 ORDER BY orden";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oRpt = new Contacto(); // Cambiar a la clase correcta

                $oRpt->id = $item['id_local'];
                $oRpt->nombre_local = $item['nombre_local'];
                $oRpt->imagen = $item['imagen'];
                $oRpt->direccion = $item['direccion'];
                $oRpt->distrito = $item['distrito'];
                $oRpt->dias_atencion = $item['dias_atencion'];
                $oRpt->horario_ini = $item['horario_ini'];
                $oRpt->horario_fin = $item['horario_fin']; 
                $oRpt->link_local = $item['link_local']; 
                $oRpt->latitud = $item['latitud']; 
                $oRpt->longitud = $item['longitud']; 
                $oRpt->frame_google = $item['frame_google']; 
                $oRpt->distancia = $item['distancia']; 
                array_push($lstContacto, $oRpt);
            }

            return $lstContacto;
        } else {
            return [];
        }
    }
}