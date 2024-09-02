<?php

require_once './models/dto/Banner.php';

class daoBanner
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }


    public function select_all_Banner($Param)
    {
        $conn = $this->link;
        $lstBanner = [];
        $sql = "SELECT id,titulo,url,link,st,orden  FROM tabbanner WHERE st=0 ORDER BY  orden ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oBanner = new Banner(); 

                $oBanner->id = $item['id'];
                $oBanner->titulo = $item['titulo'];
                $oBanner->link = $item['link'];
                $oBanner->url = $item['url'];
                $oBanner->st = $item['st'];
                $oBanner->orden = $item['orden'];
    
                array_push($lstBanner, $oBanner);
            }

            return $lstBanner;
        } else {
            return [];
        }
    }


} 