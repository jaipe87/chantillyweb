<?php
include_once './lib/adodb5/adodb.inc.php';
include_once './lib/adodb5/adodb-active-record.inc.php';

class ConexionDB
{
    public $db;

    public function __construct()
    {
        $this->db = ADONewConnection('mysqli');

        $h = "127.0.0.1";
        $u = "root";
        $p = "samanthafox";
        $n = "chantilly_web";

        if (!$this->db->PConnect($h, $u, $p, $n)) {
            throw new Exception("No se puede conectar a la BD..!!!");
        }
        $this->db->execute("set names 'utf8'");
        $this->db->setFetchMode(ADODB_FETCH_ASSOC); 

    }

}
