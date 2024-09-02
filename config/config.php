<?php
date_default_timezone_set('America/Lima');
require_once './util/route.php';
require_once './util/TplFactory.php';
require_once './util/ConexionDBFactorySingleton.php';
require_once './util/AuthFactory.php';
require_once './util/AuthGoogleFactory.php';
require_once './util/PDFactory.php';
require_once './util/EmpresaFactory.php';
require_once './util/Helpers.php';
require_once './util/session.php';
require_once './util/Curl.php';
require_once './util/NvnFactory.php';
require_once './util/MailConfig.php';
const PRODUCTION = false;

/*PROYECTO*/
$base_url  = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url.= "://" . $_SERVER['HTTP_HOST'];

define('BASE_URL', $base_url  . '/chantilly'); 

const RUTA_HTTP = BASE_URL . '/web';

define('RUTA_ROOT', $_SERVER['DOCUMENT_ROOT']);


const __EXPIRES_IN__ =  60 * 60 * 24 ;// 60*60*24    24horas
const APPSOURCE = RUTA_ROOT . '/web';
const HTTP_CODE_CREATE=201;
const HTTP_CODE_OK=200;
const HTTP_CODE_NO_AUTORIZADO=401;
const HTTP_CODE_BAD_REQUEST=400;
const HTTP_CODE_NOT_ACCEPTABLED=406;
const HTTP_CODE_ERROR_INTERNO_SERVER=500;


$DB = ConexionDBFactorySingleton::crearConexionDB();
$tpl = TplFactory::crearTpl();

