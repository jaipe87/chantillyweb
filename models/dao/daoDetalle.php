<?php

require_once './models/dto/Detalle.php';

class daoDetalle
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }

   
}
