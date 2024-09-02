<?php

include_once './util/ConexionDB.php';

class ConexionDBFactorySingleton
{
    private static $objConDB;

    private function __construct()
    {
    }

    public static function crearConexionDB()
    {
        // Patron Singleton
        if (!isset(self::$objConDB)) {
            self::$objConDB = new conexionDB();
        }
       
        return self::$objConDB;
    }
}
