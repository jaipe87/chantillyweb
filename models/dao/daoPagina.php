<?php

require_once './models/dto/Pagina.php';

class daoPagina
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }


    public function select_all_Menu_pagina()
    {
        $conn = $this->link;
        $lstPagina = [];
        $sql = "SELECT id_pagina,pagina,link_view,orden  FROM tabpagina WHERE st=0 ORDER BY  orden ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oPagina = new Pagina(); 

                $oPagina->id_pagina = $item['id_pagina'];
                $oPagina->pagina = $item['pagina'];
                $oPagina->link_view = $item['link_view'];
                $oPagina->orden = $item['orden'];
    
                array_push($lstPagina, $oPagina);
            }

            return $lstPagina;
        } else {
            return [];
        }
    }


} 