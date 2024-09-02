<?php


class NiubizFactory
{


    public static function getUser($pro)
    {
        return ($pro  ? ""  : "integraciones@niubiz.com.pe");
    }
    public static function getPassword($pro)
    {
        return ($pro  ? "" : "_7z3@8fF");
    }
    public static function getMerchantId($pro)
    {
        return ($pro ? ""  : "456879852");
    }
    public static function getUrlAuthorization($pro)
    {
        return ($pro  ? "https://apiprod.vnforapps.com/api.security/v1/security" : "https://apisandbox.vnforappstest.com/api.security/v1/security");
    }
    public static function getUrlSession($pro)
    {   $merchanId = self::getMerchantid($pro);
        return($pro  ? "https://apiprod.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/$merchanId" : "https://apisandbox.vnforappstest.com/api.ecommerce/v2/ecommerce/token/session/$merchanId");
    }
    public static function getButtonWebPay($pro)
    {  
        return($pro  ? "https://static-content.vnforapps.com/v2/js/checkout.js" : "https://static-content-qas.vnforapps.com/v2/js/checkout.js?qa=true");
    }
    public static function getUrlTransaction($pro)
    {   $merchanId = self::getMerchantid($pro);
        return($pro  ? "https://apiprod.vnforapps.com/api.authorization/v3/authorization/ecommerce/$merchanId" : "https://apisandbox.vnforappstest.com/api.authorization/v3/authorization/ecommerce/$merchanId");
    }
}
