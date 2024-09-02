<?php

include_once './lib/phpmailer/src/Exception.php';
include_once './lib/phpmailer/src/PHPMailer.php';
include_once './lib/phpmailer/src/SMTP.php';


class MailerGFactory
{
  public static function crearMailer($Param, $tls = 'tls')
  {
    //  error_reporting( 0);
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    //Luego tenemos que iniciar la validación por SMTP:
    $mail->IsSMTP();
    //Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
    // 0 = off (producción)
    // 1 = client messages
    // 2 = client and server messages
    
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth = true;
    //Definmos la seguridad como TLS
    if ($tls != '') $mail->SMTPSecure = $tls;
    $mail->Host = $Param["host"]; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
    $mail->Username = $Param["user"]; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
    $mail->Password = $Param["pwd"]; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
    $mail->Port = $Param["puerto"]; // Puerto de conexión al servidor de envio. 465 // 587->Gmail
    $mail->From = $Param["mailEnv"]; // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
    if (isset($Param['cc'])) $mail->addCC($Param['cc']);
    $mail->FromName = $Param["remitente"]; //A RELLENAR Nombre a mostrar del remitente.
    $mail->AddAddress($Param["mailRec"]); // Esta es la dirección a donde enviamos
    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->CharSet = 'UTF-8';
    $mail->Subject = $Param["titulo"]; // Este es el titulo del email.
    $mail->Body = $Param['mensaje'];; // Mensaje a enviar.
    //  $exito = $mail->Send(); // Envía el correo.

    return $mail;
  }
}
