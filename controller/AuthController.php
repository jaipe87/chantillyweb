<?php

class AuthController
{

    private $DB = null;
    private $auth = null;
    private $cia = 1;
    private $msgToken = "";
    public function __construct($arrParam)
    {
        ob_start();
        $this->DB = $arrParam["DB"];
        $this->auth =  AuthFactory::getInstance();
        $this->msgToken = "No ha iniciado Sesión o su Sesión ha expirado";
        Session::init();
        ob_get_clean();
    }
    public function iniciaSesion()
    {

        header('Content-Type: application/json');
        try {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $input = "";
                $json = json_decode(file_get_contents('php://input'), true);
                $Param = ['email' => (!isset($json['email']) ? '' : $json['email']), 'pwd' => (!isset($json['pwd']) ? '' : $json['pwd'])];

                if (isset($json)) {

                    $email = $Param["email"];
                    $pwd = $Param["pwd"];



                    if ($email  == "") {
                        $msg = "Ingrese su correo electrónico";
                        echo json_encode(['success' => false, 'input' => 'usuario', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    } else {

                        $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

                        if (!preg_match($pattern, $email)) {
                            $msg = "Ingrese un formato correo electrónico correcto";
                            echo json_encode(['success' => false, 'input' => 'usuario', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                            return;
                        }
                    }


                    if ($pwd == "") {
                        $msg = "Ingrese su Contraseña";
                        echo json_encode(['success' => false, 'input' => "pwd", 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }


                    $odaoUsuario =  new daoUsuario($this->DB);
                    $oUsuario = new Usuario();
                    $oUsuario =   $odaoUsuario->LoginIn($Param);

                    if (is_object($oUsuario)) {
                        $arr = [
                            "id_usuario" => $oUsuario->id_usuario,
                            "email" => $oUsuario->email,
                            "nom_usuario" => $oUsuario->nom_usuario,
                            "ape_usuario" => $oUsuario->ape_usuario,
                            "nrodoc_usuario" => $oUsuario->nrodoc_usuario,
                            "tipdoc_usuario" => $oUsuario->tipdoc_usuario,
                            "desdoc_usuario" => $oUsuario->nom_doc,
                            "cel_usuario" => $oUsuario->cel_usuario,
                            "direc_usuario" => $oUsuario->direc_usuario
                        ];
                        $token = $this->auth->SignIn($arr);
                        Session::add("access_token", $token);
                        echo json_encode(['success' => true, 'url' => RUTA_HTTP, 'msg' => ''], JSON_UNESCAPED_UNICODE);
                        return;
                    } else {
                        echo json_encode([
                            'success' => false,
                            'msg' => 'Algo Salió mal revise su Usuario y/o Contraseña ingresado(s)'
                        ], JSON_UNESCAPED_UNICODE);
                        return;
                    }
                } else {
                    header('Location: ' . RUTA_HTTP);
                    die();
                }
            } else {
                header('Location: ' . RUTA_HTTP);
                die();
            }
        } catch (Exception $e) {
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }

    public function registra_cliente()
    {


        header('Content-Type: application/json');
        try {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $json = json_decode(file_get_contents('php://input'), true);



                if (isset($json)) {

                    $nombres = (!isset($json['nombres']) ? "" : $json['nombres']);
                    $apellidos = (!isset($json['apellidos']) ? "" : $json['apellidos']);
                    $tipdoc = (!isset($json['tipdoc']) ? '0' : $json['tipdoc']);
                    $nrodoc = (!isset($json['nrodoc']) ? "" : $json['nrodoc']);
                    $celular = (!isset($json['celular']) ? "" : $json['celular']);
                    $email = (!isset($json['email']) ? "" : $json['email']);
                    $direccion = (!isset($json['direccion']) ? "" : $json['direccion']);
                    $pwd1 = (!isset($json['pwd1']) ? "" : $json['pwd1']);
                    $pwd2 = (!isset($json['pwd2']) ? "" : $json['pwd2']);


                    if ($nombres == "") {
                        $msg = "Ingrese sus nombres";
                        echo json_encode(['success' => false, 'input' => "nombres", 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }
                    if ($apellidos == "") {
                        $msg = "Ingrese sus Apellidos";
                        echo json_encode(['success' => false, 'input' => 'apellidos', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }

                    /*   if ($tipdoc == "0") {
                        $msg = "Ingrese su Tipo de documento";
                        echo json_encode(['success' => false, 'input' => 'tipdoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    } else {

                        if ($tipdoc == "2") {
                            if (strlen($nrodoc) != 8) {
                                $msg = "Ha seleccionado DNI, debe tener 8 dígitos";
                                echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        } elseif ($tipdoc == "4") {
                            if (strlen($nrodoc) != 12) {
                                $msg = "Ha seleccionado CARNET DE EXTRANJERIA, debe tener 12 dígitos";
                                echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        } elseif ($tipdoc == "7") {
                            if (strlen($nrodoc) != 12) {
                                $msg = "Ha seleccionado PASAPORTE, debe tener 12 dígitos";
                                echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        } elseif ($tipdoc == "23") {
                            if (strlen($nrodoc) != 9) {
                                $msg = "Ha seleccionado CARNET PTP, debe tener 9 dígitos";
                                echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        }
                    }
                     if ($nrodoc == "") {
                        $msg = "Ingrese su N° de documento";
                        echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }*/


                    if ($celular  == "") {
                        $msg = "Ingrese su Número de Celular";
                        echo json_encode(['success' => false, 'input' => 'celular', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    } else {
                        if (strlen($celular) < 9 || strlen($celular) > 11) {
                            $msg = "Ingrese un Número de Celular correcto";
                            echo json_encode(['success' => false, 'input' => 'celular', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                            return;
                        }
                    }
                    if ($email  == "") {
                        $msg = "Ingrese su correo electrónico";
                        echo json_encode(['success' => false, 'input' => 'email', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    } else {

                        $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

                        if (!preg_match($pattern, $email)) {
                            $msg = "Ingrese un formato correo electrónico correcto";
                            echo json_encode(['success' => false, 'input' => 'email', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                            return;
                        }
                    }

                    /*  if ($direccion  == "") {
                        $msg = "Ingrese su dirección ";
                        echo json_encode(['success' => false, 'input' => 'direccion', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }*/
                    if ($pwd1  == "") {
                        $msg = "Ingrese su contraseña ";
                        echo json_encode(['success' => false, 'input' => 'pwd1', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }
                    if ($pwd2  == "") {
                        $msg = "Repita su contraseña ";
                        echo json_encode(['success' => false, 'input' => 'pwd2', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }

                    if ($pwd1  != $pwd2) {
                        $msg = "La segunda contraseña debe ser igual la primera para completar la validación ";
                        echo json_encode(['success' => false, 'input' => 'pwd2', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }

                    $Param = [
                        'modo' =>'0',
                        'id_usuario' => "",
                        'nombres' => $nombres,
                        'apellidos' => $apellidos,
                        'tipdoc' => $tipdoc,
                        'nrodoc' => $nrodoc,
                        'celular' => $celular,
                        'email' => $email,
                        'direccion' => $direccion,
                        'pwd1' => $pwd1,
                        'pwd2' => $pwd2,
                        "id_estado" => 0,
                        "id_google" => "",
                        "verifiedEmail" => 0
                    ];



                    $odaoUsuario =  new daoUsuario($this->DB);
                    $oUsuario = new Usuario();
                    $oUsuario =   $odaoUsuario->RegistraUsuario($Param);

                    if (is_object($oUsuario)) {
                        echo json_encode(['success' => true, 'msg' => 'Registro exitoso, puede iniciar sesión !!'], JSON_UNESCAPED_UNICODE);
                    } else {
                        if ($oUsuario == 0) {
                            $msg = "Hubo un Error por parte de nosotros No procedió tu registro !!";
                        } elseif ($oUsuario == 2) {
                            $msg = "El correo que intenta registrar, ya existe !! ";
                        } elseif ($oUsuario == 3) {
                            $msg = "El N° de documento de identidad ya existe !!";
                        }
                        echo json_encode([
                            'success' => false,
                            'msg' => $msg
                        ], JSON_UNESCAPED_UNICODE);
                        return;
                    }
                } else {

                    header('Location: ' . RUTA_HTTP);
                    die();
                }
            } else {
                header('Location: ' . RUTA_HTTP);
                die();
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function registra_cliente_cuenta()
    {


        header('Content-Type: application/json');
        try {





            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $token = Session::get("access_token");
                if (!$token) {
                    Session::close();
                    addCookie("msg", $this->msgToken);
                    header('Location: ' . RUTA_HTTP);
                    die();
                }
                $cliente = $this->auth->Decode($token);
                if (!$cliente) {
                    Session::close();
                    addCookie("msg", $this->msgToken);
                    header('Location: ' . RUTA_HTTP);
                    die();
                }

                $daoUsuario = new daoUsuario($this->DB);
                $id_usuario = $cliente->id_usuario;
                $oUsuario = $daoUsuario->GetUsuario(["id_usuario" => $id_usuario]);

                $id_usuario = $oUsuario->id_usuario;
                $id_estado  = $oUsuario->id_estado;
                $id_google = $oUsuario->id_google;
                $verifiedEmail =  $oUsuario->verifiedEmail;

                $json = json_decode(file_get_contents('php://input'), true);

                if (isset($json)) {
                    $nombres = (!isset($json['nombres']) ? "" : $json['nombres']);
                    $apellidos = (!isset($json['apellidos']) ? "" : $json['apellidos']);
                    $tipdoc = (!isset($json['tipdoc']) ? '0' : $json['tipdoc']);
                    $nrodoc = (!isset($json['nrodoc']) ? "" : $json['nrodoc']);
                    $celular = (!isset($json['celular']) ? "" : $json['celular']);
                    $email = (!isset($json['email']) ? "" : $json['email']);
                    $direccion = (!isset($json['direccion']) ? "" : $json['direccion']);
                    $pwd1 = (!isset($json['pwd1']) ? "" : $json['pwd1']);
                    $pwd2 = (!isset($json['pwd2']) ? "" : $json['pwd2']);


                    if ($nombres == "") {
                        $msg = "Ingrese sus nombres";
                        echo json_encode(['success' => false, 'input' => "nombres", 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }
                    if ($apellidos == "") {
                        $msg = "Ingrese sus Apellidos";
                        echo json_encode(['success' => false, 'input' => 'apellidos', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }

                    /*   if ($tipdoc == "0") {
                        $msg = "Ingrese su Tipo de documento";
                        echo json_encode(['success' => false, 'input' => 'tipdoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    } else {

                        if ($tipdoc == "2") {
                            if (strlen($nrodoc) != 8) {
                                $msg = "Ha seleccionado DNI, debe tener 8 dígitos";
                                echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        } elseif ($tipdoc == "4") {
                            if (strlen($nrodoc) != 12) {
                                $msg = "Ha seleccionado CARNET DE EXTRANJERIA, debe tener 12 dígitos";
                                echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        } elseif ($tipdoc == "7") {
                            if (strlen($nrodoc) != 12) {
                                $msg = "Ha seleccionado PASAPORTE, debe tener 12 dígitos";
                                echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        } elseif ($tipdoc == "23") {
                            if (strlen($nrodoc) != 9) {
                                $msg = "Ha seleccionado CARNET PTP, debe tener 9 dígitos";
                                echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        }
                    }
                     if ($nrodoc == "") {
                        $msg = "Ingrese su N° de documento";
                        echo json_encode(['success' => false, 'input' => 'nrodoc', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }*/


                    if ($celular  == "") {
                        $msg = "Ingrese su Número de Celular";
                        echo json_encode(['success' => false, 'input' => 'celular', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    } else {
                        if (strlen($celular) < 9 || strlen($celular) > 11) {
                            $msg = "Ingrese un Número de Celular correcto";
                            echo json_encode(['success' => false, 'input' => 'celular', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                            return;
                        }
                    }
                    if ($email  == "") {
                        $msg = "Ingrese su correo electrónico";
                        echo json_encode(['success' => false, 'input' => 'email', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    } else {

                        $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

                        if (!preg_match($pattern, $email)) {
                            $msg = "Ingrese un formato correo electrónico correcto";
                            echo json_encode(['success' => false, 'input' => 'email', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                            return;
                        }
                    }

                    /*  if ($direccion  == "") {
                        $msg = "Ingrese su dirección ";
                        echo json_encode(['success' => false, 'input' => 'direccion', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }*/
                    /*    if ($pwd1  == "") {
                        $msg = "Ingrese su contraseña ";
                        echo json_encode(['success' => false, 'input' => 'pwd1', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }
                    if ($pwd2  == "") {
                        $msg = "Repita su contraseña ";
                        echo json_encode(['success' => false, 'input' => 'pwd2', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }
                  */
                    if ($pwd1  != $pwd2) {
                        $msg = "La segunda contraseña debe ser igual la primera para completar la validación ";
                        echo json_encode(['success' => false, 'input' => 'pwd2', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }

                    $Param = [
                        'modo' =>'1',
                        'id_usuario' => $id_usuario,
                        'nombres' => $nombres,
                        'apellidos' => $apellidos,
                        'tipdoc' => $tipdoc,
                        'nrodoc' => $nrodoc,
                        'celular' => $celular,
                        'email' => $email,
                        'direccion' => $direccion,
                        'pwd1' => $pwd1,
                        'pwd2' => $pwd2,
                        "id_estado" => $id_estado,
                        "id_google" => $id_google,
                        "verifiedEmail" => $verifiedEmail
                    ];

                

                    $odaoUsuario =  new daoUsuario($this->DB);
                    $oUsuario = new Usuario();
                    $oUsuario =   $odaoUsuario->RegistraUsuario($Param);

                    if (is_object($oUsuario)) {
                        echo json_encode(['success' => true, 'msg' => 'Actualización exitosa !!'], JSON_UNESCAPED_UNICODE);
                    } else {
                        if ($oUsuario == 0) {
                            $msg = "Hubo un Error por parte de nosotros No procedió tu actualización !!";
                        } elseif ($oUsuario == 2) {
                            $msg = "El correo que intenta registrar, ya existe !! ";
                        } elseif ($oUsuario == 3) {
                            $msg = "El N° de documento de identidad ya existe !!";
                        }
                        echo json_encode([
                            'success' => false,
                            'msg' => $msg
                        ], JSON_UNESCAPED_UNICODE);
                        return;
                    }
                } else {

                    header('Location: ' . RUTA_HTTP);
                    die();
                }
            } else {
                header('Location: ' . RUTA_HTTP);
                die();
            }
        } catch (Exception $e) {
            Session::close();
            addCookie("msg", $this->msgToken);
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }

    public function registra_cliente_google($code)
    {

        $client = AuthGoogleFactory::getInstance();
        $token = $client->fetchAccessTokenWithAuthCode($code);
        $client->setAccessToken($token['access_token']);

        Session::add("access_token_google", $token['access_token']);

        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        $givenName = $google_account_info->givenName;
        $familyName = $google_account_info->familyName;
        $verifiedEmail = ($google_account_info->verifiedEmail ?  1 : 0);
        $email = $google_account_info->email;
        $id_google = $google_account_info->id;

        $odaoUsuario =  new daoUsuario($this->DB);
        $usuario = new Usuario();
        $usuario = $odaoUsuario->GetUsuario_email(["email" => $email]);

        /*Usuario Existe*/
        if (is_object($usuario)) {
            $arr = [
                "id_usuario" => $usuario->id_usuario,
                "email" => $usuario->email,
                "nom_usuario" => $usuario->nom_usuario,
                "ape_usuario" => $usuario->ape_usuario,
                "nrodoc_usuario" => $usuario->nrodoc_usuario,
                "tipdoc_usuario" => $usuario->tipdoc_usuario,
                "desdoc_usuario" => $usuario->nom_doc,
                "cel_usuario" => $usuario->cel_usuario,
                "direc_usuario" => $usuario->direc_usuario
            ];
            $token = $this->auth->SignIn($arr);
            Session::add("access_token", $token);
            header('Location: ' . RUTA_HTTP);
            die();
        } else {

            $Param = [
                'id_usuario' => "",
                'nombres' => $givenName,
                'apellidos' => $familyName,
                'tipdoc' => "2",
                'nrodoc' => "",
                'celular' => "",
                'email' => $email,
                'direccion' => "",
                'pwd1' => "",
                'pwd2' => "",
                "id_estado" => 0,
                "id_google" => $id_google,
                "verifiedEmail" => $verifiedEmail
            ];

            $oUsuario =  $odaoUsuario->RegistraUsuario($Param);

            if (is_object($oUsuario)) {

                $arr = [
                    "id_usuario" => $oUsuario->id_usuario,
                    "email" => $oUsuario->email,
                    "nom_usuario" => $oUsuario->nom_usuario,
                    "ape_usuario" => $oUsuario->ape_usuario,
                    "nrodoc_usuario" => $oUsuario->nrodoc_usuario,
                    "tipdoc_usuario" => $oUsuario->tipdoc_usuario,
                    "desdoc_usuario" => "",
                    "cel_usuario" => $oUsuario->cel_usuario,
                    "direc_usuario" => $oUsuario->direc_usuario
                ];

                $token = $this->auth->SignIn($arr);
                Session::add("access_token", $token);
                header('Location: ' . RUTA_HTTP);
                die();
            } else {
                $msg = "Hubo un Error por parte de nosotros No procedió tu registro !!";
                $this->LogOutGoogle($msg);
                die();
            }
        }
    }

    public function recuperar_contrasenia()
    {
        header('Content-Type: application/json');

        $email_user = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
        $oempresa = new Empresa();
        $oempresa = EmpresaFactory::GetEmpresa(["cia" => $this->cia], $this->DB);
        $empresa = $oempresa->des;

        if ($email_user  == "") {
            $msg = "Ingrese su correo electrónico registrado";
            echo json_encode(['success' => false, 'input' => 'usuario', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
            return;
        } else {

            $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

            if (!preg_match($pattern, $email_user)) {
                $msg = "Ingrese un formato correo electrónico correcto";
                echo json_encode(['success' => false, 'input' => 'usuario', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                return;
            }
        }


        $odaoUsuario =  new daoUsuario($this->DB);
        $usuario = new Usuario();
        $usuario = $odaoUsuario->GetUsuario_email(["email" => $email_user]);

        if (is_object($usuario)) {

            $pwd_new = PWD_aletoria();

            $oValUsuario = $odaoUsuario->Actualiza_contrasenia(["id_usuario" =>  $usuario->id_usuario, "pwd" => $pwd_new]);


            if (!is_object($oValUsuario)) {
                if ($oValUsuario == 0) {
                    $msg = "Tuvimos un problema al enviar el correo electrónico, intentalo más tarde";
                }
                echo json_encode(['success' => false, 'input' => '', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                return;
            };
            ob_start();
            $user_names = $usuario->nom_usuario . " " . $usuario->ape_usuario;
            $user_email = $usuario->email;
            $variables = array(
                'user_name_auth' => $user_names,
                'nueva_pwd_auth' =>  $pwd_new
            );
            includeWithVariables('./view/templates/assets/plantilla_correo/tpl_email.php', $variables);
            $html = ob_get_clean();

            $encript = mailconfig::getTsl();
            $host = mailconfig::getHost(PRODUCTION);
            $port = mailconfig::getPort(PRODUCTION, $encript);
            $username = mailconfig::getUser(PRODUCTION);
            $password = mailconfig::getPassword(PRODUCTION);
            $remitente = $empresa;
            $email_user =  $user_email;
            $titulo = "Reseteo de Contraseña";
            $mensaje =  $html;


            $config = [
                "host" =>  $host,
                "user" => $username,
                "pwd" => $password,
                "puerto" => $port,
                "mailEnv" => $username,
                "remitente" => $remitente,
                "mailRec" => $email_user,
                "titulo" => $titulo,
                "mensaje" => $mensaje
            ];

            $PhpMailer = MailerGFactory::crearMailer($config, $encript);

            $enviado =  $PhpMailer->Send();


            if ($enviado) {
                $msg = "Te enviamos un correo con tu nueva contraseña temporal, por seguridad recuerda cambiarla.";
                echo json_encode(['success' => true, 'input' => '', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                return;
            } else {

                $msg = "Tuvimos un problema al enviar el correo electrónico, intentalo más tarde";
                echo json_encode(['success' => false, 'input' => '', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                return;
            }
        } else {
            $msg = "No se ha encontrado usuario registrado con el correo electrónico $email_user";
            echo json_encode(['success' => false, 'input' => 'usuario', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
            return;
        }
    }
    public function LogOut()
    {
        $token_google = Session::get("access_token_google");
        Session::remove("access_token");
        Session::remove("cart");
        if ($token_google) {
            Session::remove("access_token_google");
            $client = AuthGoogleFactory::getInstance();
            $client->revokeToken($token_google);
        }
        Session::close();
        header('Location: ' . RUTA_HTTP);
    }
    public function LogOutGoogle($msg)
    {
        $token_google = Session::get("access_token_google");
        Session::remove("access_token");
        Session::remove("cart");
        if ($token_google) {
            Session::remove("access_token_google");
            $client = AuthGoogleFactory::getInstance();
            $client->revokeToken($token_google);
        }
        Session::close();
        addCookie("msg", $msg);
        header('Location: ' . RUTA_HTTP);
    }
}
