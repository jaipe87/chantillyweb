<?php


class mailconfig
{


    public static function getHost($pro)
    {
        return ($pro  ? ""  : "smtp.gmail.com");
    }
    public static function getPort($pro, $encription)
    {
        return ($pro  ? "" : ($encription=='ssl' ? '465' : '587'));
    }
    public static function getUser($pro)
    {
        return ($pro  ? "" : "hssoporteperu@gmail.com");
    }
    public static function getPassword($pro)
    {
        return ($pro ? ""  : "qgpyrajkdqybtpqn");
    }
    public static function getSsl()
    {
        return "ssl";
    }
    public static function getTsl()
    {
        return "tsl";
    }
}
