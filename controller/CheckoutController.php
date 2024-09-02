<?php
class CheckoutController
{
    private $tpl = null;
    private $DB = null;
    private $auth = null;
    private $cia = 1;
    private $empresa = null;
    private $msgToken = "";

    public function __construct($arrParam)
    {
        ob_start();
        $this->DB = $arrParam["DB"];
        $this->tpl = $arrParam["tpl"];
        $this->auth = AuthFactory::getInstance();
        $this->empresa = EmpresaFactory::GetEmpresa(["cia" => $this->cia], $this->DB);
        $this->msgToken = "No ha iniciado Sesión o su Sesión ha expirado";
        Session::init();
        ob_get_clean();
    }
    public function Index()
    {
        try {
            $msgtoken = $this->msgToken;
            $msgCart = "No ha agregado aún productos a su carrito de compras";
            $token = Session::get("access_token");
            if ($token) {
                $this->tpl->assign("token", $token);
            } else {
                Session::close();
                addCookie("msg", $msgtoken);
                header('Location: ' . RUTA_HTTP);

                die();
            }
            if ($this->empresa) {
                $this->tpl->assign("empresa", $this->empresa);
            }
            $cart = Session::get("cart");
          
            if ($cart) {

                if (is_array($cart)) {
                    if (count($cart) > 0) {
                        $this->tpl->assign("cart", $cart);
                    } else {
                        addCookie("msg", $msgCart);
                        header('Location: ' . RUTA_HTTP);
                        die();
                    }
                } else {
                    addCookie("msg", $msgCart);
                    header('Location: ' . RUTA_HTTP);
                    die();
                }
            } else {
                addCookie("msg", $msgCart);
                header('Location: ' . RUTA_HTTP);
                die();
            }

            $cliente = $this->auth->Decode($token);

            if ($cliente) {
                $daoUsuario = new daoUsuario($this->DB);
                $id_usuario = $cliente->id_usuario;
                $oUsuario = $daoUsuario->GetUsuario(["id_usuario" => $id_usuario]);

                $this->tpl->assign("cliente", $oUsuario);
            } else {
                Session::close();
                addCookie("msg", $msgtoken);
                header('Location: ' . RUTA_HTTP);
                die();
            }

            $oNumPedido = 0;
            $odaoPedido =  new daoPedido($this->DB);
            $oNumPedido = $odaoPedido->InitNumberOrder(["codigo" => $oUsuario->id_usuario]);

            if ($oNumPedido == 0) {

                addCookie("msg", "Tuvimos Problemas por parte de nosotros, espera en unos minutos y vuelves a intentarlo");
                header('Location: ' . RUTA_HTTP);
                die();
            } else {
                $numOrder = Encriptar($oNumPedido);
                $this->tpl->assign("numpedido", $numOrder);
            }

            $daoTipdoc =  new daoTipdoc($this->DB);
            $ListaDocumentos = $daoTipdoc->select_all_Tipdoc([]);

            if ($ListaDocumentos) {
                if (is_array($ListaDocumentos)) {
                    $this->tpl->assign("lstDocumentos", $ListaDocumentos);
                }
            }

            $daoUbigeo =  new daoUbigeo($this->DB);

            $ListDepartamento = $daoUbigeo->select_all_departamento([]);
            if ($ListDepartamento) {
                if (is_array($ListDepartamento)) {
                    $this->tpl->assign("lstDepartamento", $ListDepartamento);
                }
            }

            $daoLocales =  new daoContacto($this->DB);

            $ListLocales =  $daoLocales->carga_datos_contacto([]);
            if ($ListLocales) {
                if (is_array($ListLocales)) {
                    $this->tpl->assign("lstLocales", $ListLocales);
                }
            }

            $titulo = "Registro de Compra";
            $urlwebpay = NiubizFactory::getButtonWebPay(PRODUCTION);
            $delivery = false;
            $this->tpl->assign("delivery", $delivery);
            $this->tpl->assign("urlwebpay", $urlwebpay);
            $this->tpl->assign("titulo", $titulo);
            $this->tpl->display("checkout.tpl");
        } catch (Exception $e) {
            Session::close();
            addCookie("msg", $msgtoken);
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }

    public function actualiza_datos()
    {

        header('Content-Type: application/json');
        $msgtoken = $this->msgToken;
        try {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $json = json_decode(file_get_contents('php://input'), true);

                $token = Session::get("access_token");
                if ($token) {
                    $cliente = $this->auth->Decode($token);

                    if (!$cliente) {
                        Session::close();
                        addCookie("msg", $msgtoken);
                        header('Location: ' . RUTA_HTTP);
                        die();
                    } else {
                    }
                } else {
                    Session::close();
                    addCookie("msg", $msgtoken);
                    header('Location: ' . RUTA_HTTP);
                    die();
                }

                if (isset($json)) {
                    $id_usuario = $cliente->id_usuario;
                    $nombres = (!isset($json['nombres']) ? "" : $json['nombres']);
                    $apellidos = (!isset($json['apellidos']) ? "" : $json['apellidos']);
                    $tipdoc = (!isset($json['tipdoc']) ? '0' : $json['tipdoc']);
                    $nrodoc = (!isset($json['nrodoc']) ? "" : $json['nrodoc']);
                    $celular = (!isset($json['celular']) ? "" : $json['celular']);
                    $direccion = (!isset($json['direccion']) ? "" : $json['direccion']);

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
                    if ($direccion  == "") {
                        $msg = "Ingrese su dirección ";
                        echo json_encode(['success' => false, 'input' => 'direccion', 'msg' => $msg], JSON_UNESCAPED_UNICODE);
                        return;
                    }

                    if ($tipdoc == "0") {
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
                    }


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

                    $Param = [
                        'id_usuario' => $id_usuario,
                        'nombres' => $nombres,
                        'apellidos' => $apellidos,
                        'tipdoc' => $tipdoc,
                        'nrodoc' => $nrodoc,
                        'celular' => $celular,
                        "direccion" => $direccion,
                        "verified_checkout" => 1
                    ];

                    $odaoUsuario =  new daoUsuario($this->DB);
                    $oUsuario = new Usuario();
                    $oUsuario =   $odaoUsuario->Actualiza_datos_checkout($Param);

                    if (is_object($oUsuario)) {
                        echo json_encode(['success' => true, 'msg' => 'Actualizaste tus datos correctamente !!'], JSON_UNESCAPED_UNICODE);
                    } else {
                        if ($oUsuario == 0) {
                            $msg = "Hubo un Error por parte de nosotros No procedió su actualización !!";
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
            addCookie("msg", $msgtoken);
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }


    private function GenerateTokenAutorization()
    {
        $user = NiubizFactory::getUser(PRODUCTION);
        $pwd = NiubizFactory::getPassword(PRODUCTION);
        $cry = base64_encode($user . ":" . $pwd);
        $url = NiubizFactory::getUrlAuthorization(PRODUCTION);

        $header = ['Authorization: Basic ' . $cry];
        $response = Curl::sendGet($header, $url);

        if (!isset($response) || $response["StatusCode"] == HTTP_CODE_NO_AUTORIZADO) {
            return "";
        } else {
            $result = $response["data"];
        }

        return $result;
    }

    private function GenerateTokenSession($amount, $cliente, $dias)
    {

        $url = NiubizFactory::getUrlSession(PRODUCTION);
        $ipcliente = getRealIP();
        $channel = "web";
        $data = [
            'amount' => $amount,
            'channel' => $channel,
            'antifraud' => [
                'clientIp' => $ipcliente,
                'merchantDefineData' => [
                    'MDD4' => $cliente->email,
                    'MDD21' => '0',
                    'MDD32' => $cliente->id_usuario,
                    'MDD75' => 'Registrado',
                    'MDD77' => $dias
                ]
            ]
        ];

        $TokenAutorization = $this->GenerateTokenAutorization();

        if (!isset($TokenAutorization) || $TokenAutorization == "") {
            return [];
        }

        $header = ['Content-Type: application/json', 'Authorization: ' . $TokenAutorization];

        $response = Curl::sendPost(json_encode($data), $header, $url, 'json');
        if ($response["StatusCode"] == HTTP_CODE_OK) {
            $respuesta = json_decode($response["data"], true);
        } else {
            $respuesta = [];
        }
        return $respuesta;
    }

    private function GetTransaction($amount, $PurchaseNumber, $data)
    {

        $TokenAutorization = $this->GenerateTokenAutorization();
        if (!isset($TokenAutorization) || $TokenAutorization == "") {
            return [];
        }
        $TokenTransaction = $data["transactionToken"];
        $channel = $data["channel"];
        $data = [
            'channel' => $channel,
            'captureType' => 'manual',
            'countable' => true,
            'order' => [
                'tokenId' => $TokenTransaction,
                'purchaseNumber' => $PurchaseNumber,
                'amount' => $amount,
                'currency' => 'PEN'
            ]
        ];
        $header = ['Content-Type: application/json', 'Authorization: ' . $TokenAutorization];
        $url = NiubizFactory::getUrlTransaction(PRODUCTION);
        $response = Curl::sendPost(json_encode($data), $header, $url);
        $respuesta = [
            "StatusCode" => $response["StatusCode"],
            "data" => json_decode($response["data"], true),
            "datajson" => $response["data"]
        ];
        return $respuesta;
    }

    public function  configurationButton()
    {

        header('Content-Type: application/json');
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $json = json_decode(file_get_contents('php://input'), true);

                $terminos = isset($json['terms']) ? $json['terms'] : 0;
                $privacidad = isset($json['privacidad']) ? $json['privacidad'] : 0;

                $html = "";
                if ($terminos == 1 && $privacidad == 1) {
                    $html = '<button type="button" id="GrabaCompra" onclick="ClickOrderButtonNz()"><b class="">PAGAR</b></button>';
                } else {
                    $html = '<button type="button" id="GrabaCompra" onclick="ClickOrderButton()"><b class="">PAGAR</b></button>';
                }
                echo json_encode(['success' => true, 'button' => $html], JSON_UNESCAPED_UNICODE);
                return;
            } else {

                header('Location: ' . RUTA_HTTP);
                die();
            }
        } catch (Exception $e) {
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }
    public function PreparePayment()
    {

        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $msgtoken = $this->msgToken;
            $msgCarrito = "Tu Carrito está vacío";
            $msgProblemas = "Ocurrió un error interno al momento de procesar su compra, inténlalo nuevamente";
            $msgImporte = "Importe total de la compra no debe ser CERO !!";
            $msgNiubiz = "Sucedió un error al conectarnos con NIUBIZ, inténtelo mas adelante !!";

            if (Session::has("access_token")) {
                $json = json_decode(file_get_contents('php://input'), true);

                if (isset($json)) {


                    $amount = 0.00;
                    $PurchaseNumber = (!isset($json['PurchaseNumber']) ? "" : $json['PurchaseNumber']);
                    $data_form =  (!isset($json['data_form']) ? [] : $json['data_form']);

                    try {
                        $token = Session::get("access_token");
                        $decode = $this->auth->Decode($token);
                        if ($decode) {
                            try {
                                $cliente = $decode;
                                $cart = [];
                                if (Session::has('cart')) {
                                    $cart = Session::get("cart");
                                    if (is_array($cart) || is_object($cart)) {
                                        if (!count($cart) > 0) {
                                            echo json_encode(['success' => false, 'msg' => $msgCarrito], JSON_UNESCAPED_UNICODE);
                                            return;
                                        }
                                    } else {

                                        echo json_encode(['success' => false, 'msg' => $msgCarrito], JSON_UNESCAPED_UNICODE);
                                        return;
                                    }
                                } else {

                                    echo json_encode(['success' => false, 'msg' => $msgCarrito], JSON_UNESCAPED_UNICODE);
                                    return;
                                }


                                foreach ($cart as $item) {
                                    $amount = $amount + ($item["quantity"] * $item["neto"]);
                                }



                                if ($amount == 0) {
                                    echo json_encode(['success' => false, 'msg' => $msgImporte], JSON_UNESCAPED_UNICODE);
                                    return;
                                }


                                if (!$data_form) {
                                    echo json_encode(['success' => false, 'msg' => $msgProblemas], JSON_UNESCAPED_UNICODE);
                                    return;
                                }
                                if (count($data_form) == 0) {
                                    echo json_encode(['success' => false, 'msg' => $msgProblemas], JSON_UNESCAPED_UNICODE);
                                    return;
                                }

                                $data_form["subtotal"] = $amount;

                                $envio = 0;

                                $TipEntrega = $data_form["TipoEntrega"];

                                if ($TipEntrega != 0) {

                                    $daoUbigeo =  new daoUbigeo($this->DB);

                                    $coddep = $data_form["coddep"];
                                    $codpro = $data_form["codpro"];
                                    $coddis = $data_form["coddis"];

                                    $oDistrito = $daoUbigeo->select_all_distrito_precio(["coddep" => $coddep, "codpro" => $codpro, "coddis" => $coddis]);

                                    if ($oDistrito) {

                                        $envio = $oDistrito->prec_envio;
                                    }
                                }


                                $amount = $amount + $envio;


                                $data_form["envio"] = $envio;

                                $data_form["total"] = $amount;


                                $oCliente = new Usuario();
                                $odaoCliente =  new daoUsuario($this->DB);

                                $oCliente = $odaoCliente->GetUsuario(["id_usuario" => $cliente->id_usuario]);

                                $firstDate = new DateTime($oCliente->created_at);
                                $secondDate = new DateTime();
                                $intvl = $firstDate->diff($secondDate);

                                $SessionNiubiz = $this->GenerateTokenSession($amount, $oCliente, $intvl->days);

                                if ($SessionNiubiz == []) {
                                    echo json_encode(['success' => false, 'msg' => $msgNiubiz], JSON_UNESCAPED_UNICODE);
                                    return;
                                }


                                $sessionKey = $SessionNiubiz["sessionKey"];
                                $channel = "web";
                                $merchantid = NiubizFactory::getMerchantId(PRODUCTION);
                                $purchasenumber = Desencriptar($PurchaseNumber);
                                $expirationminutes = 20;
                                $timeouturl = RUTA_HTTP . "/Checkout";
                                $merchantlogo = RUTA_HTTP . "/view/templates/assets/images/logocheckout.png";
                                $formbuttoncolor = "#c41c1a";
                                $action = RUTA_HTTP . "/Checkout/SaveOrder/?pnb=$purchasenumber";
                                $amount = $amount;
                                $merchantname = $this->empresa->des;



                                if (Session::has("data_form")) {
                                    Session::remove("data_form");
                                }
                                Session::add("data_form", $data_form);

                                $data = compact(
                                    "sessionKey",
                                    "channel",
                                    "merchantid",
                                    "purchasenumber",
                                    "expirationminutes",
                                    "timeouturl",
                                    "merchantlogo",
                                    "formbuttoncolor",
                                    "action",
                                    "amount",
                                    "merchantname"
                                );


                                echo json_encode(['success' => true,  "data" => $data, 'msg' => ""], JSON_UNESCAPED_UNICODE);
                                return;
                            } catch (Exception $e) {

                                echo json_encode(['success' => true, 'msg' => $msgNiubiz], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        }
                    } catch (Exception $e) {

                        Session::close();
                        addCookie("msg", $msgtoken);
                        header('Location: ' . RUTA_HTTP);
                    }
                } else {
                    echo json_encode(['success' => false, 'msg' => $msgProblemas], JSON_UNESCAPED_UNICODE);
                    return;
                }
            } else {
                Session::close();
                addCookie("msg", $msgtoken);
                header('Location: ' . RUTA_HTTP);
                die();
            }
        } else {
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }

    public function SaveOrder()
    {

        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $msgtoken = $this->msgToken;
            $msgCarrito = "Tu Carrito está vacío";
            $msgProblemas = "Ocurrió un error interno al momento de procesar su compra, inténlalo nuevamente";
            $msgImporte = "Importe total de la compra no debe ser CERO !!";
            $msgNiubiz = "Sucedió un error al conectarnos con NIUBIZ, inténtelo mas adelante !!";

            if (Session::has("access_token")) {



                try {
                    $token = Session::get("access_token");
                    $decode = $this->auth->Decode($token);
                    if ($decode) {
                        try {

                            $cliente = $decode;
                            $cart = [];
                            if (Session::has('cart')) {
                                $cart = Session::get("cart");
                                if (is_array($cart) || is_object($cart)) {
                                    if (!count($cart) > 0) {
                                        echo json_encode(['success' => false, 'msg' => $msgCarrito], JSON_UNESCAPED_UNICODE);
                                        return;
                                    }
                                } else {

                                    echo json_encode(['success' => false, 'msg' => $msgCarrito], JSON_UNESCAPED_UNICODE);
                                    return;
                                }
                            } else {

                                echo json_encode(['success' => false, 'msg' => $msgCarrito], JSON_UNESCAPED_UNICODE);
                                return;
                            }




                            $arrNet = $_POST;
                            if (!isset($arrNet) || !$arrNet) {
                                echo json_encode(['success' => false, 'msg' => $msgNiubiz], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                            $data = Session::get("data_form");

                            if (!isset($data) || !$data) {
                                echo json_encode(['success' => false, 'msg' => $msgNiubiz], JSON_UNESCAPED_UNICODE);
                                return;
                            }

                            $oCliente = new Usuario();
                            $odaoCliente =  new daoUsuario($this->DB);
                            $oCliente = $odaoCliente->GetUsuario(["id_usuario" => $cliente->id_usuario]);


                            $purchasenumber = $_REQUEST["pnb"];
                            $data_transaction = [];
                            $amount = $data["total"];

                            $respNet = $this->GetTransaction($amount, $purchasenumber, $arrNet);
                            if (!$respNet) {
                                echo json_encode(['success' => false, 'msg' => $msgNiubiz], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                            $statusCode = $respNet["StatusCode"];
                            $dataMap = (!isset($respNet["data"]) || $respNet["data"] == '' ? '' : $respNet["data"]);
                            $response_json = (!isset($respNet["datajson"]) || $respNet["datajson"] == '' ? '' : $respNet["datajson"]);
                            if ($statusCode != HTTP_CODE_OK) {
                                if ($statusCode == HTTP_CODE_BAD_REQUEST) {
                                    $card = (!isset($dataMap["data"]["CARD"]) ? '' : $dataMap["data"]["CARD"]);
                                    $brand = (!isset($dataMap["data"]["BRAND"]) ? '' : $dataMap["data"]["BRAND"]);
                                    $actionDescripcion = (!isset($dataMap["data"]["ACTION_DESCRIPTION"]) ? $dataMap["errorMessage"] : $dataMap["data"]["ACTION_DESCRIPTION"]);
                                    $FechaT = (!isset($dataMap["data"]["TRANSACTION_DATE"]) ? '' : $dataMap["data"]["TRANSACTION_DATE"]);
                                    if ($FechaT != '') {
                                        $c = preg_split('//', $FechaT, -1, PREG_SPLIT_NO_EMPTY);
                                        $fechaTran = $c[4] . $c[5] . "/" . $c[2] . $c[3] . "/" . $c[0] . $c[1] . " " . $c[6] . $c[7] . ":" . $c[8] . $c[9] . ":" . $c[10] . $c[11];
                                    } else {
                                        $fechaTran = FechaActual('Y-m-d');
                                    }
                                    $data_transaction = [
                                        "statusCode" => $statusCode,
                                        "actionCode" => '',
                                        "data" => [
                                            "nropedido" => $purchasenumber,
                                            "errorCode" => $dataMap["errorCode"],
                                            "fecha" => $fechaTran,
                                            "actionDescripcion" => $actionDescripcion,
                                            "card" => $card,
                                            "marca" => $brand,
                                            "errorMessage" => $dataMap["errorMessage"]
                                        ]
                                    ];
                                    Session::add('data_transaction', $data_transaction);
                                    header('Location: ' . RUTA_HTTP . '/respuesta');
                                    return;
                                } else {
                                    if ($statusCode == HTTP_CODE_NO_AUTORIZADO) {
                                        $data_transaction = [
                                            "statusCode" => $statusCode,
                                            "actionCode" => '',
                                            "data" => [
                                                "nropedido" => $purchasenumber,
                                                "errorCode" => $statusCode,
                                                "errorMessage" => "Unauthorized Access"
                                            ]
                                        ];
                                        Session::add('data_transaction', $data_transaction);
                                        header('Location: ' . RUTA_HTTP . '/respuesta');
                                        return;
                                    } else {
                                        if ($statusCode == HTTP_CODE_NOT_ACCEPTABLED) {
                                            $data_transaction = [
                                                "statusCode" => $statusCode,
                                                "actionCode" => '',
                                                "data" => [
                                                    "nropedido" => $purchasenumber,
                                                    "errorCode" => $statusCode,
                                                    "errorMessage" => "Too many request with same payload [Idempotent policy]"
                                                ]
                                            ];
                                            Session::add('data_transaction', $data_transaction);
                                            header('Location: ' . RUTA_HTTP . '/respuesta');
                                            return;
                                        } else {
                                            if ($statusCode == HTTP_CODE_ERROR_INTERNO_SERVER) {
                                                $data_transaction = [
                                                    "statusCode" => $statusCode,
                                                    "actionCode" => '',
                                                    "data" => [
                                                        "nropedido" => $purchasenumber,
                                                        "errorCode" => $statusCode,
                                                        "errorMessage" => "Internal Server Error"
                                                    ]
                                                ];
                                                Session::add('data_transaction', $data_transaction);
                                                header('Location: ' . RUTA_HTTP . '/respuesta');
                                                return;
                                            } else {
                                                $data_transaction = [
                                                    "statusCode" => $statusCode,
                                                    "actionCode" => '',
                                                    "data" => [
                                                        "nropedido" => $purchasenumber,
                                                        "errorCode" => $statusCode,
                                                        "errorMessage" => "Internal Server Error"
                                                    ]

                                                ];
                                                Session::add('data_transaction', $data_transaction);
                                                header('Location: ' . RUTA_HTTP . '/respuesta');
                                                return;
                                            }
                                        }
                                    }
                                }
                            }

                            $numberorder = $dataMap["order"]["purchaseNumber"];
                            $detalle = [];

                            foreach ($cart as $item) {
                                $detpedido = new DetPedido();

                                $detpedido->id_pedido = $purchasenumber;
                                $detpedido->codart = Desencriptar($item["codart"]);
                                $detpedido->codart_web =  Desencriptar($item["codart_web"]);
                                $detpedido->descri_corta = $item["descri_corta"];
                                $detpedido->cantidad = $item["quantity"];
                                $detpedido->precio = $item["neto"];
                                $detpedido->porcion = $item["porcion"];
                                $detpedido->medidas = $item["medidas"];
                                $detpedido->keke = $item["keke"];
                                $detpedido->relleno = $item["relleno"];
                                $detpedido->diarecojo = $item["diarecojo"];
                                $detpedido->dedicatoria = $item["dedicatoria"];
                                $detpedido->neto =  $detpedido->precio * $detpedido->cantidad;
                                array_push($detalle, $detpedido);
                            }


                            $Param = [
                                "id_pedido" =>  $purchasenumber,
                                "codigo" => $oCliente->id_usuario,
                                "tipo_envio" => $data["TipoEntrega"],
                                "idsucursal" => $data["Sucursal"],
                                "coddep" => $data["coddep"],
                                "codpro" => $data["codpro"],
                                "coddis" => $data["coddis"],
                                "direcc_entrega" => $data["direcEntrega"],
                                "ref_direccion" => $data["direcrefrencia"],
                                "numorder" =>  $numberorder,
                                "codresponse_niubiz" => $statusCode,
                                "response_niubiz" =>  $response_json,
                                "envio" => $data["envio"],
                                "subtotal" => $data["subtotal"],
                                "total" => $data["total"],
                                "stterminos" => $data["stterminos"],
                                "stprivacidad" => $data["stprivacidad"],
                                "latitud" => $data["latitud"],
                                "longitud" => $data["longitud"],
                                "detalle" => $detalle,

                            ];



                            $odaoPedido = new daoPedido($this->DB);
                            $ind = $odaoPedido->GrabaPedido($Param);

                           if ($ind > 0) {
                                $name = $oCliente->nom_usuario;
                                $surname = $oCliente->ape_usuario;
                                $correo = $oCliente->email;
                                //  $html = $this->SetMessageHtml($ind);
                                $card = $dataMap["dataMap"]["CARD"];
                                $brand = $dataMap["dataMap"]["BRAND"];
                                $FechaT = $dataMap["dataMap"]["TRANSACTION_DATE"];
                                $c = preg_split('//', $FechaT, -1, PREG_SPLIT_NO_EMPTY);
                                $fechaTran = $c[4] . $c[5] . "/" . $c[2] . $c[3] . "/" . $c[0] . $c[1] . " " . $c[6] . $c[7] . ":" . $c[8] . $c[9] . ":" . $c[10] . $c[11];
                                $currency = $dataMap["order"]["currency"];
                                $brand = $dataMap["dataMap"]["BRAND"];
                                $actionCode = $dataMap["dataMap"]["ACTION_CODE"];
                                $actionDescripcion = $dataMap["dataMap"]["ACTION_DESCRIPTION"];
                                $data_transaction = [
                                    "statusCode" => $statusCode,
                                    "data" => [
                                        "errorCode" => $statusCode,
                                        "errorMessage" => "OK",
                                        "actionCode" => $actionCode,
                                        "actionDescripcion" => $actionDescripcion,
                                        "body" => [
                                            "nroPedido" => str_pad($ind, 6, "0", STR_PAD_LEFT),
                                            "usuario" => $name . ' ' . $surname,
                                            "card" => $card,
                                            "Fecha" => $fechaTran,
                                            "amount" => $amount,
                                            "currency" => $currency,
                                            "productos" => $detalle,
                                            "marca" => $brand
                                        ]
                                    ]
                                ];
                                 Session::remove("cart");

                                if(Session::has('data_transaction')){
                                    Session::remove('data_transaction');
                                }
                                Session::add('data_transaction', $data_transaction);
                           
                                addCookie('msg', $name . ', te hemos enviado un correo, con el Resumen de tu compra :) !!');
                                header('Location: ' . RUTA_HTTP . '/respuesta');
                                return;
                            } else {
                                echo json_encode(['success' => true, 'msg' => $msgProblemas], JSON_UNESCAPED_UNICODE);
                                return;
                            }
                        } catch (Exception $e) {
                            echo json_encode(['success' => true, 'msg' => $msgProblemas], JSON_UNESCAPED_UNICODE);
                            return;
                        }
                    }
                } catch (Exception $e) {
                    Session::close();
                    addCookie("msg", $msgtoken);
                    header('Location: ' . RUTA_HTTP);
                    die();
                }
            } else {
                Session::close();
                addCookie("msg", $msgtoken);
                header('Location: ' . RUTA_HTTP);
                die();
            }
        } else {
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }
}
