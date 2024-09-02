<?php
include_once './util/MailerGFactory.php';
function dismount($object)
{
    $reflectionClass = new ReflectionClass(get_class($object));
    $array = array();
    foreach ($reflectionClass->getProperties() as $property) {
        $property->setAccessible(true);
        $array[$property->getName()] = $property->getValue($object);
        $property->setAccessible(false);
    }
    return $array;
}

function list_dismount($object_list)
{
    $list_array = [];
    foreach ($object_list as $objeto) {
        array_push($list_array, dismount($objeto));
    }
    return $list_array;
}

function GetHeaders()
{
    $headers = [];
    $headers = apache_request_headers();

    if (isset($headers)) {

        return $headers;
    } else {
        return [];
    }
}

function GetTokenHeader()
{
    $headers = GetHeaders();
    $token = "";

    if (isset($headers['Authorization'])) {

        $token = trim(str_replace("Bearer", "", $headers['Authorization']));
    }

    return $token;
}


//
////ejemplos
////incluir el directorio "lib"
//include_dir('lib');
////incluir todos los archivos que contenga "lib" esten en ese directorio o dentro de otros
//include_dir('lib.*');
////incluir el directorio "lib" con ruta absoluta
//include_dir('root.lib');
////incluir todos los archivos que contenga "lib" esten en ese directorio o dentro de otros
//include_dir('root.lib.*');
function include_dir($path, $read = false)
{
    //separador de directorios
    $s = '/';
    //vemos si es la primera vez que usamos la funcion
    if (!$read) {
        //obtenemos los dos ultimos caracteres
        $tree = substr($path, -2);
        if ($tree == '.*') {
            //eliminamos el asterisco y activamos la recursividad
            $path = preg_replace('!\.\*$!', '', $path);
            $read = true;
        }
        //obtenemos el document_root del archivo en caso de usarse
        $path = preg_replace('!^root\.!', $_SERVER['DOCUMENT_ROOT'] . $s, $path);
        //cambiamos el punto por el separador
        $path = str_replace('.', $s, $path);
    }
    //abrimos el directorio
    if ($handle = opendir($path)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                //si es un directorio lo recorremos en caso de activar la recursividad
                if (is_dir($path . $s . $file) and $read) {
                    include_dir($path . $s . $file, true);
                } else {
                    $ext = substr(strtolower($file), -3);
                    if ($ext == 'php') @include_once($path . $s . $file);
                }
            }
        }
        //cerramos el directorio
        closedir($handle);
    }
}

//
////ejemplos
////incluir el directorio "lib"
//include_dir('lib');
////incluir todos los archivos que contenga "lib" esten en ese directorio o dentro de otros
//include_dir('lib.*');
////incluir el directorio "lib" con ruta absoluta
//include_dir('root.lib');
////incluir todos los archivos que contenga "lib" esten en ese directorio o dentro de otros
//include_dir('root.lib.*');
function require_dir($path, $read = false)
{
    //separador de directorios
    $s = '/';
    //vemos si es la primera vez que usamos la funcion
    if (!$read) {
        //obtenemos los dos ultimos caracteres
        $tree = substr($path, -2);
        if ($tree == '.*') {
            //eliminamos el asterisco y activamos la recursividad
            $path = preg_replace('!\.\*$!', '', $path);
            $read = true;
        }
        //obtenemos el document_root del archivo en caso de usarse
        $path = preg_replace('!^root\.!', $_SERVER['DOCUMENT_ROOT'] . $s, $path);
        //cambiamos el punto por el separador
        $path = str_replace('.', $s, $path);
    }
    //abrimos el directorio
    if ($handle = opendir($path)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                //si es un directorio lo recorremos en caso de activar la recursividad
                if (is_dir($path . $s . $file) and $read) {
                    include_dir($path . $s . $file, true);
                } else {
                    $ext = substr(strtolower($file), -3);
                    if ($ext == 'php') @require_once($path . $s . $file);
                }
            }
        }
        //cerramos el directorio
        closedir($handle);
    }
}


function url_file($url, $patron, $tipo = "PATTERN")
{
    $File = array();
    $EsBrace = (strripos($patron, '{') + strripos($patron, '}')) > 0 ? true : false;

    switch ($tipo) {
        case "PATTERN":
            if ($EsBrace) {
                foreach (glob(trim($url) . trim($patron), GLOB_BRACE) as $p) {
                    $File[] = $p;
                }
            } else {
                foreach (glob(trim($url) . trim($patron)) as $p) {
                    $File[] = $p;
                }
            }

            break;

        case "DIR":
            foreach (glob(trim($url) . trim($patron), GLOB_ONLYDIR) as $p) {
                $File[] = $p;
            }

            break;
        default:
            $File[] = "Archivos no encontrados";
            break;
    }
    return $File;
}

//$URL = url_file('./upload / ','{*.png,*.jpg}');
//$URL = url_file('./upload / ','.png');
//$URL = url_file('./upload / ','','DIR');

function file_dataname($p_file)
{
    $return = array();
    // Short Name
    $temp = explode("/", $p_file);

    if (count($temp) == 0) {
        $temp = explode("\\", $p_file);
    }

    $temp2 = count($temp) - 1;
    $return['shortname'] = $temp[$temp2];

    $file = explode(".", $return['shortname']);
    $name = "";
    for ($i = 0; $i < count($file) - 1; $i++) {
        $name .= $file[$i] . ".";
    }

    $name = substr($name, 0, -1);

    $return['name'] = $name;

    $temp = explode(".", $p_file);
    $temp2 = count($temp) - 1;
    $return['extension'] = $temp[$temp2];
    return $return;
}

// $var = file_dataname('./upload / 000035.jpg');
/*
'shortname' => string '000035.jpg' (length=10)
'name' => string '000035' (length=6)
'extension' => string 'jpg' (length=3)
*/

function PWD_aletoria()
{
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $longpalabra = 10;
    for ($pass = '', $n = strlen($caracteres) - 1; strlen($pass) < $longpalabra;) {
        $x = rand(0, $n);
        $pass .= $caracteres[$x];
    }
    return utf8_decode($pass);
}

/*
Mepermite saler si es mayor o no de edad
*/
function GetMayorEdad($fecha, $MayorEdad = 18)
{
    $mayor = $MayorEdad;
    //Creamos objeto fecha desde los valores recibidos
    $nacio = DateTime::createFromFormat('Y-m-d', $fecha);
    //Calculamos usando diff y la fecha actual
    $calculo = $nacio->diff(new DateTime());
    //Obtenemos la edad
    $edad = $calculo->y;

    if ($edad < $mayor) {
        return false;
        //return false;
    } else {
        return true;
        //return true;
    }
}

function GetEdad($fecha)
{

    //Creamos objeto fecha desde los valores recibidos
    $nacio = DateTime::createFromFormat('Y-m-d', $fecha);
    //Calculamos usando diff y la fecha actual
    $calculo = $nacio->diff(new DateTime());
    //Obtenemos la edad
    $edad = $calculo->y;

    return $edad;
}

function is_date($str)
{
    try {
        $dt = new DateTime(trim($str));
    } catch (Exception $e) {
        return false;
    }
    $month = $dt->format('m');
    $day = $dt->format('d');
    $year = $dt->format('Y');
    if (checkdate($month, $day, $year)) {
        return true;
    } else {
        return false;
    }
}

function MonthName($ind)
{
    $nombre = "";
    switch ($ind) {

        case 1:
            $nombre = "ENERO";
            break;
        case 2:
            $nombre = "FEBRERO";
            break;
        case 3:
            $nombre = "MARZO";
            break;
        case 4:
            $nombre = "ABRIL";
            break;
        case 5:
            $nombre = "MAYO";
            break;
        case 6:
            $nombre = "JUNIO";
            break;
        case 7:
            $nombre = "JULIO";
            break;
        case 8:
            $nombre = "AGOSTO";
            break;
        case 9:
            $nombre = "SEPTIEMBRE";
            break;
        case 10:
            $nombre = "OCTUBRE";
            break;
        case 11:
            $nombre = "NOVIEMBRE";
            break;
        case 12:
            $nombre = "DICIEMBRE";
            break;
    }
    return $nombre;
}


function validarVacio($param)
{
    if ($param == null || $param == '') {

        return 0;
    } else {
        return 1;
    }
}

function validartamañoCampo($param, $longitud)
{
    if (strlen($param) > $longitud) {
        return 0;
    } else {
        return 1;
    }
}

function SelCombo($combo)
{
    if ($combo == 0) {

        return 0;
    } else {
        return 1;
    }
}

function IsMobile()
{

    $tablet_browser = 0;
    $mobile_browser = 0;
    $body_class = 'desktop';

    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
        $tablet_browser++;
        $body_class = "tablet";
    }

    if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
        $mobile_browser++;
        $body_class = "mobile";
    }

    if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
        $mobile_browser++;
        $body_class = "mobile";
    }

    $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
    $mobile_agents = array(
        'w3c ',
        'acs-',
        'alav',
        'alca',
        'amoi',
        'audi',
        'avan',
        'benq',
        'bird',
        'blac',
        'blaz',
        'brew',
        'cell',
        'cldc',
        'cmd-',
        'dang',
        'doco',
        'eric',
        'hipt',
        'inno',
        'ipaq',
        'java',
        'jigs',
        'kddi',
        'keji',
        'leno',
        'lg-c',
        'lg-d',
        'lg-g',
        'lge-',
        'maui',
        'maxo',
        'midp',
        'mits',
        'mmef',
        'mobi',
        'mot-',
        'moto',
        'mwbp',
        'nec-',
        'newt',
        'noki',
        'palm',
        'pana',
        'pant',
        'phil',
        'play',
        'port',
        'prox',
        'qwap',
        'sage',
        'sams',
        'sany',
        'sch-',
        'sec-',
        'send',
        'seri',
        'sgh-',
        'shar',
        'sie-',
        'siem',
        'smal',
        'smar',
        'sony',
        'sph-',
        'symb',
        't-mo',
        'teli',
        'tim-',
        'tosh',
        'tsm-',
        'upg1',
        'upsi',
        'vk-v',
        'voda',
        'wap-',
        'wapa',
        'wapi',
        'wapp',
        'wapr',
        'webc',
        'winw',
        'winw',
        'xda ',
        'xda-'
    );

    if (in_array($mobile_ua, $mobile_agents)) {
        $mobile_browser++;
    }

    if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'opera mini') > 0) {
        $mobile_browser++;
        //Check for tablets on opera mini alternative headers
        $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
        if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
            $tablet_browser++;
        }
    }
    if ($tablet_browser > 0) {
        // Si es tablet has lo que necesites
        $body_class = "tablet";
    } else if ($mobile_browser > 0) {
        // Si es dispositivo mobil has lo que necesites
        $body_class = "mobile";
    } else {
        // Si es ordenador de escritorio has lo que necesites
        $body_class = "desktop";
    }
    return $body_class;
}

function PrimerDiaMes()
{
    $fecha = new DateTime();
    $fecha->modify('first day of this month');
    $PrimerDia = $fecha->format('Y-m-d');
    return $PrimerDia;
}

function UltimoDiaMes()
{
    $fecha = new DateTime();
    $fecha->modify('last day of this month');
    $UltimoDia = $fecha->format('Y-m-d');
    return $UltimoDia;
}

function FechaActual()
{
    $fecha = new DateTime();
    $xFechaActual = $fecha->format('d/m/Y');
    return $xFechaActual;
}



function AgrupaArray($original, $campo, $cantidad, $total)
{
    $repeat = false;
    $result = [];
    foreach ($original as $t) {
        $repeat = false;
        for ($i = 0; $i < count($result); $i++) {
            if (($result[$i][$campo] == $t[$campo])) {


                $result[$i][$cantidad] += $t[$cantidad];
                $result[$i][$total] += $t[$total];

                $repeat = true;
                break;
            }
        }
        if ($repeat == false)
            array_push($result, $t);
    }
    return $result;
}
function left($str, $length)
{
    return substr($str, 0, $length);
}

function right($str, $length)
{
    return substr($str, -$length);
}

function GetPrivateKey()
{
    $privatekey = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAzqM3MSs4sD6QPK4WXnAt8zEzjIH0EBoCb1k05aIwczpQ46eV
4964v2xMQlTaxECkK6WLI2GcL4uwOSwFek2GsFAaEPEGYIS/lsxsyGi7uW2c12dR
KMQSvn2yzXzYngt6u5n3ZOpkFvFU1jkqpVpr1+x5rX1Wn1sjCXJXRKGJ4xNLBAqU
FLo5VkcM3GNOOJ0DNg/NNxGbk8j3D/dH6ybnkADbw9jO7XGLw+2M/dFfsjfK7WS3
2l+Qcsq9QcloflTZnUpVP7DluszZkSSqpnBDlIVNMjMQyy6nK7lVwu/67cuQpqac
mbG+VWsF+9Yo2lSOT5pYGu3RrZdfiw9JSvOisQIDAQABAoIBAGp1JCYswlPqp5zb
g6K74LB+FLS67uasv7xmFR6JZLS4wpvG5y4yvLPCM7eox9x8ARiLfReJXlIQgYWy
7E+KSW3klslLo6FuQtaKEzFc4/owQrGnBOUfvxhs4gWD4IXsHBsyw4Y2S8KWKsMD
SLlP0Ge56SY8gLgw1+gyBEvTfZqClItlnSGv+AqeWFUektIyOBP3tt4+a99oSj0Q
Wzz8h0LnCDNqxXl2WaNihY2XvzAGoit7XnA58L1ngu9HAUHfatlQEuAqf0/iV4Mb
owLq+o00MvVC02gJ68xxe0nUrYI33YIWD9I3SIUI001EF9lI0inOp/K+VR1Fo3Wx
sGHaQRECgYEA9dd1IlKiSJR4qHKPvZbCOA77zYxzBjyFxtqTAwYf+vj/XfpM5iTD
ME1uTjclJ9pa6wCh14SA+kvolSTCzsv5Sun4pKHM7wAxqoKTQ27cFF/1rLqVwUp3
QtSvWR3uc5kpZhdrVeoaoSZQGaYBJgEp53o9InMXVrxpmvPzCmW8o68CgYEA1y0N
eq4RjvWec40bOxna9VKR/Z6hS/5WzFPh00409d/lt7IMzBd5l9VFdoSy+bPZdhgH
IWR0VvP15dNAxAc18e29QzDhc1RL+KMfK9h0Y6vxMPhIic1Yd064Kd56ZDBKN3bp
YCjRmKXE4TBhomTxq1UZoAlD0HhzqzXuIZJO158CgYEApAkkpkc+83Dl5Xezg4xh
gWg2CdwKMAIYPSxA5cajdiHIuxs1Tmb/Om6gCF5xU1s2SRH960EFkn0t7r49oiCl
8Z+WgbtYc6zMdvpzao5BGPNCiQNiwzt9wkEJ00vOfKGY5v7/Zq8zH43h6otCvuoN
3N9KhX8H9p73VCYsaCakLQ8CgYAo2pHzl/cXeIT0FXd1GiybZWj4iVTAk/Kw6sA2
mWOuxyrbXL/XRCG+9SwyG3HLvRztshQwf90i4UDvuNNUJLZWT7geeLplZjziYT46
2ecHQY8SqCFFoKpKRLTspiQAv7Znn3kh274nyFmAE+qFpbrIt+icnQW2IBh+CkhD
MX8sqwKBgQCa8kA1g5HwP3MvjM9/nI+nuMDF1Y9iytK23V9Kwk9rQP34xPeokBA4
NM029wdV3fRws9tSJtp06OloQTxZhzLkVbFj61dXfG3AcHC8phS6THvDtCRjL4iC
Cdmy82kAc0lprvjL9Rjkd1qBsOVjHOWFy/mIsZLOoL0VHXgncAEJbA==
-----END RSA PRIVATE KEY-----
EOD;


    return $privatekey;
}

function GetPublicKey()
{
    $publickey = <<<EOD
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzqM3MSs4sD6QPK4WXnAt
8zEzjIH0EBoCb1k05aIwczpQ46eV4964v2xMQlTaxECkK6WLI2GcL4uwOSwFek2G
sFAaEPEGYIS/lsxsyGi7uW2c12dRKMQSvn2yzXzYngt6u5n3ZOpkFvFU1jkqpVpr
1+x5rX1Wn1sjCXJXRKGJ4xNLBAqUFLo5VkcM3GNOOJ0DNg/NNxGbk8j3D/dH6ybn
kADbw9jO7XGLw+2M/dFfsjfK7WS32l+Qcsq9QcloflTZnUpVP7DluszZkSSqpnBD
lIVNMjMQyy6nK7lVwu/67cuQpqacmbG+VWsF+9Yo2lSOT5pYGu3RrZdfiw9JSvOi
sQIDAQAB
-----END PUBLIC KEY-----
EOD;

    return $publickey;
}



function Encriptar($cadena)
{
    $clave = '3aYpBlricZ2GyW2L/82uqzIPOtqB1dZM0y0XlWVuw2Y=';
    $method = 'aes-256-cbc';
    $iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
    return base64_encode(openssl_encrypt($cadena, $method, $clave, false, $iv));
}

function Desencriptar($cadena)
{
    $clave = '3aYpBlricZ2GyW2L/82uqzIPOtqB1dZM0y0XlWVuw2Y=';
    $method = 'aes-256-cbc';
    $iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
    return openssl_decrypt(base64_decode($cadena), $method, $clave, false, $iv);
}

function validarFechaHoras($fecha, $horas)
{
    // Convertir la fecha ingresada a un objeto DateTime
    $fechaIngresada = new DateTime($fecha);

    // Obtener la fecha y hora actual
    $fechaActual = new DateTime();

    // Calcular la diferencia en horas
    $diferencia = $fechaActual->diff($fechaIngresada);
    $diferenciaHoras = ($diferencia->days * 24) + $diferencia->h;

    // Validar si la diferencia es menor a las horas ingresadas
    if ($diferenciaHoras <= $horas) {
        return true;
    } else {
        return false;
    }
}
function validarFechaDias($fecha, $dias)
{
    // Convertir la fecha ingresada a un objeto DateTime
    $fechaIngresada = new DateTime($fecha);

    // Obtener la fecha y hora actual
    $fechaActual = new DateTime();

    // Calcular la diferencia en días
    $diferencia = $fechaActual->diff($fechaIngresada);
    $diferenciaDias = $diferencia->days;

    // Validar si la diferencia es mayor o igual a los días ingresados
    if ($diferenciaDias <= $dias) {
        return true;
    } else {
        return false;
    }
}

function createAuthUrl()
{
    $client = AuthGoogleFactory::getInstance();
    $login_url = $client->createAuthUrl();
    $login_url = filter_var($login_url, FILTER_SANITIZE_URL);
    return $login_url;
}
function includeWithVariables($filePath, $variables = array())
{
    extract($variables);
    include $filePath;
}

function addCookie($key,$msg)
{
    setcookie($key, $msg, 0);
}
function removeCookie($key)
{
    setcookie($key, '', time() - 1);
}
function hasCookie($key)
{
    if (isset($_COOKIE[$key])) {
        return true;
    } else {
        return false;
    }
}
function getRealIP()
{
    if (isset($_SERVER["HTTP_CLIENT_IP"])) {
        return $_SERVER["HTTP_CLIENT_IP"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
        return $_SERVER["HTTP_X_FORWARDED"];
    } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
        return $_SERVER["HTTP_FORWARDED"];
    } else {
        return $_SERVER["REMOTE_ADDR"];
    }
}
