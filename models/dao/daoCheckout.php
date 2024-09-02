<?php

require_once './models/dto/Checkout.php';

class daoCheckout
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }
    
}