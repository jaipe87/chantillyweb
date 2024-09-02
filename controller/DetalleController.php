<?php
class DetalleController
{
    private $tpl = null;
    private $DB = null;
    private $cia = 1;
    private $codart_web = "";
    private $empresa = null;
    public function __construct($arrParam)
    {
        $this->DB = $arrParam["DB"];
        $this->tpl = $arrParam["tpl"];
        $this->empresa = EmpresaFactory::GetEmpresa(["cia" => $this->cia], $this->DB);
        Session::init();
        //  Session::close();
    }
    public function Index()
    {
        try {

            $this->codart_web = Desencriptar(isset($_REQUEST['p']) ? $_REQUEST['p'] : "");

            $oaoMenu = new daoPagina($this->DB);

            $lstMenus = $oaoMenu->select_all_Menu_pagina();

            if (is_array($lstMenus)) {
                if (count($lstMenus) > 0) {
                    $this->tpl->assign("lista_menus", $lstMenus);
                }
            }

            $oProducto_web = new daoProducto_web($this->DB);
            $oProducto = new Producto_web();
            $lstPorciones = [];
            $producto_unico =  new Producto();
            $oProducto =  $oProducto_web->select_one_producto(["cia" => $this->cia, "codart_web" => $this->codart_web]);
            $preciounico = 0.00;

            $impdedicatoria = $oProducto_web->select_importe_tarjeta_dedicatoria();

            if (is_object($oProducto)) {
                if ($oProducto  != null) {
                    $this->tpl->assign("producto", $oProducto);


                    $lstPorciones = $oProducto_web->select_all_Productos_porciones(["cia" => $this->cia, "codart_web" => Desencriptar($oProducto->codart_web)]);

                    if (is_array($lstPorciones)) {
                        if (count($lstPorciones) > 0 && $oProducto->mostrar_porciones == 1) {
                            $this->tpl->assign("lista_porciones", $lstPorciones);
                        } else {
                            if (count($lstPorciones) == 1 && $oProducto->mostrar_porciones == 0) {
                                $producto_unico = $lstPorciones[0];
                            }
                        }
                    }
                    $lstKekes = $oProducto_web->select_all_Productos_keke(["cia" => $this->cia, "codart_web" => Desencriptar($oProducto->codart_web), "cod_categoria" => $oProducto->cod_categoria]);
                    if (is_array($lstKekes)) {
                        if (count($lstKekes) > 0 && $oProducto->mostrar_kekes == 1) {
                            $this->tpl->assign("lista_kekes", $lstKekes);
                        }
                    }
                }


                $lstAccesorios = [];
                $lstAccesorios =  $oProducto_web->select_all_Productos_accesorios(["cia" => $this->cia]);
                if (is_array($lstAccesorios)) {
                    if (count($lstAccesorios) > 0) {

                        $this->tpl->assign("lista_accesorios", $lstAccesorios);
                    }
                }
                $token = Session::get("access_token");
                if ($token) {
                    $auth = AuthFactory::getInstance();
                    $nombre_sesion = $auth->Decode($token)->nom_usuario;
                    $letra_sesion = strtolower(substr($nombre_sesion, 0, 1));
                    $this->tpl->assign("nombre_sesion", $nombre_sesion);

                    $this->tpl->assign("letra_sesion", $letra_sesion);
                    $this->tpl->assign("token", $token);
                } else {

                    $login_url = createAuthUrl();
                    $login_url = filter_var($login_url, FILTER_SANITIZE_URL);
                    $this->tpl->assign("login_url", $login_url);
                }
                if ($this->empresa) {
                    $this->tpl->assign("empresa", $this->empresa);
                }
                $this->tpl->assign("impdedicatoria", $impdedicatoria);
                $this->tpl->assign("producto_unico", $producto_unico);
                $this->tpl->display("detalle.tpl");
            } else {

                header('Location: ' . RUTA_HTTP);
                die();
            }
        } catch (Exception $e) {
            Session::close();
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }
    public function select_porcion_cake()
    {
        header('Content-Type: application/json');
        try {

            $codart_web = isset($_REQUEST['codart_web']) ? $_REQUEST['codart_web'] : "";
            $codart = isset($_REQUEST['codart']) ? $_REQUEST['codart'] : "";

            $daoProducto = new daoProducto_web($this->DB);
            $oProducto = $daoProducto->select_one_Producto_detalle(["cia" => $this->cia, "codart_web" => Desencriptar($codart_web), "codart" => Desencriptar($codart)]);

            if (is_object($oProducto)) {
                $data = $oProducto;
                echo json_encode(["success" => true,  "data" => $data,  "msg" => ""], JSON_PRETTY_PRINT);
                return;
            } else {
                echo json_encode(["success" => false, "data" => [], "msg" => "Datos no encontrados !!"], JSON_PRETTY_PRINT);
                return;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function refresh_datos_bocaditos_detalle()
    {
        header('Content-Type: application/json');
        try {
            $daoProductoweb = new daoProducto_web($this->DB);
            // Obtener página y límite de los parámetros de la solicitud
            $pagina = isset($_REQUEST['pagina']) ? intval($_REQUEST['pagina']) : 1;
            $limite = isset($_REQUEST['limite']) ? intval($_REQUEST['limite']) : 8;

            // Lógica de paginación
            $offset = ($pagina - 1) * $limite;
            $tbltortas = $daoProductoweb->select_all_Productos_bocaditos_detalle(["cia" => $this->cia], $offset, $limite);
            $total_items = $daoProductoweb->select_count_productos_bocaditos_detalle(["cia" => $this->cia]);
            $data = [];
            $id = [];
            if (is_array($tbltortas) && count($tbltortas) > 0) {
                foreach ($tbltortas as $fila) {
                    array_push($id, $fila->codart_web);
                }
                $data = list_dismount($tbltortas);
                echo json_encode([
                    "success" => true,
                    "data" => $data,
                    "id" => $id,
                    "total_items" => $total_items,
                    "pagina" => $pagina,
                    "limite" => $limite,
                    "msg" => ""
                ], JSON_PRETTY_PRINT);
            } else {
                echo json_encode([
                    "success" => false,
                    "data" => $data,
                    "id" => $id,
                    "total_items" => $total_items,
                    "pagina" => $pagina,
                    "limite" => $limite,
                    "msg" => "No se han encontrado registros a mostrar"
                ], JSON_PRETTY_PRINT);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function carga_rellenos_x_keke()
    {
        header('Content-Type: application/json');
        try {

            $codart_web = isset($_REQUEST['codart_web']) ? $_REQUEST['codart_web'] : "";
            $cod_categoria = isset($_REQUEST['cdc']) ? $_REQUEST['cdc'] : "0";
            $id_keke = isset($_REQUEST['id_keke']) ? $_REQUEST['id_keke'] : "0";


            $daoProducto = new daoProducto_web($this->DB);
            $lstRellenos = $daoProducto->select_all_Productos_Relleno(["cia" => $this->cia, "codart_web" => Desencriptar($codart_web), "cod_categoria" => $cod_categoria, "id_keke" => $id_keke]);

            if (is_array($lstRellenos)  && count($lstRellenos) > 0) {

                $data = list_dismount($lstRellenos);

                echo json_encode(["success" => true,  "data" => $data,  "msg" => ""], JSON_PRETTY_PRINT);
                return;
            } else {
                echo json_encode(["success" => false, "data" => [], "msg" => "Datos no encontrados !!"], JSON_PRETTY_PRINT);
                return;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function carga_carrito_save()
    {
        header('Content-Type: application/json');
        try {
            $Total = 0.00;
            $cart =  Session::get("cart");
            if (is_array($cart) || is_object($cart)) {
                foreach ($cart as $item) {
                    $Total = $Total + $item["quantity"];
                }
            }
            echo json_encode(["success" => true, "data" => $cart, "Total" => $Total,  "msg" => ""], JSON_PRETTY_PRINT);
            return;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function carga_producto_cart()
    {
        header('Content-Type: application/json');
        try {

            $codart_web = isset($_REQUEST['wb']) ? $_REQUEST['wb'] : "";
            $codart = isset($_REQUEST['id']) ? $_REQUEST['id'] : "";
            $id_keke = isset($_REQUEST['k']) ? $_REQUEST['k'] : "0";
            $id_relleno = isset($_REQUEST['r']) ? $_REQUEST['r'] : "0";
            $cantidad =   isset($_REQUEST['qt']) ? $_REQUEST['qt'] : 0;
            $dia_recojo = isset($_REQUEST['dr']) ? $_REQUEST['dr'] : "";
            $tiene_dedicatoria = isset($_REQUEST['std']) ? $_REQUEST['std'] : "0";
            $dedicatoria =  isset($_REQUEST['dd']) ? $_REQUEST['dd'] : "";


            if (!$codart_web) {
                echo json_encode(["success" => false, "data" => [], "msg" => "Producto no encontrado !!"], JSON_PRETTY_PRINT);
                return;
            }




            $codart_web = Desencriptar($codart_web);
            $codart = Desencriptar($codart);
            $impdedicatoria = 0.00;
            $quantity = 0;
            $name_producto = "";
            $Total = 0.00;

            $daoProducto =  new daoProducto_web($this->DB);
            $daoKeke = new daoKeke($this->DB);
            $daoRelleno = new daoRelleno($this->DB);

            $oProducto = new Producto();
            $oKeke =  new Keke();
            $oRelleno =  new Relleno();

            $oProducto = $daoProducto->select_one_Producto_detalle(["cia" => $this->cia, "codart_web" => $codart_web, "codart" => $codart]);


            if (!$oProducto) {
                echo json_encode(["success" => false, "data" => [], "msg" => "Seleccione una Porción válida !!"], JSON_PRETTY_PRINT);
                return;
            }


            if ($oProducto->mostrar_dedicatoria != 0) {
                if ($tiene_dedicatoria != "0") {
                    $impdedicatoria = $daoProducto->select_importe_tarjeta_dedicatoria();
                } else {
                    $dedicatoria = "";
                }
            } else {
                $tiene_dedicatoria = "0";
            }

            $fechaActual = new DateTime();
            $fecnow = $fechaActual->format('Y-m-d');

            if ($oProducto->mostrar_dia_recojo != 0) {

                if (!$dia_recojo || $dia_recojo == "") {
                    echo json_encode(["success" => false, "data" => [], "msg" => "Seleccione un día de Recojo !!"], JSON_PRETTY_PRINT);
                    return;
                }


                if ($oProducto->horas != 0) {
                    $dias = $oProducto->horas / 24;
                    $fechaEvaluar = new DateTime($fecnow);
                    $fechaAncla =  $fechaEvaluar->modify("+$dias days");
                    $fechacomparacion = $fechaAncla->format('Y-m-d');
                    $fecmsg =  $fechaAncla->format('d/m/Y');
                    if ($dia_recojo == $fechacomparacion) {
                        echo json_encode(["success" => false, "data" => [], "msg" => "Seleccione una fecha mayor a $fecmsg"], JSON_PRETTY_PRINT);
                        return;
                    }
                    if ($dia_recojo < $fechacomparacion) {
                        echo json_encode(["success" => false, "data" => [], "msg" => "Ingrese una fecha mayor a $fecmsg"], JSON_PRETTY_PRINT);
                        return;
                    }
                } else {
                    if ($dia_recojo < $fecnow) {
                        echo json_encode(["success" => false, "data" => [], "msg" => "Seleccione una fecha mayor o igual a $fecnow"], JSON_PRETTY_PRINT);
                        return;
                    }
                }
            }


            $idkeke = 0;
            $keke = "";
            if ($oProducto->mostrar_kekes != 0) {

                $oKeke = $daoKeke->select_one_keke(["cia" => $this->cia, "id_keke" => $id_keke]);
                if (!$oKeke) {
                    echo json_encode(["success" => false, "data" => [], "msg" => "Seleccione un Tipo de Keke válido !!"], JSON_PRETTY_PRINT);
                    return;
                }
                $idkeke = $oKeke->id_keke;
                $keke = $oKeke->keke;
            }

            $idrelleno = 0;
            $relleno = "";
            if ($oProducto->mostrar_relleno != 0) {

                $oRelleno = $daoRelleno->select_one_relleno(["cia" => $this->cia, "id_relleno" => $id_relleno]);

                if (!$oRelleno) {
                    echo json_encode(["success" => false, "data" => [], "msg" => "Seleccione un Tipo de Relleno válido !!"], JSON_PRETTY_PRINT);
                    return;
                }

                $idrelleno =  $oRelleno->id_relleno;
                $relleno = $oRelleno->relleno;
            }



            $id = $codart . $id_keke . $id_relleno . $dedicatoria . $dia_recojo;



            $name_producto = $oProducto->descri_corta;

            $cart = Session::get("cart");

            // INICIALIZAMOS EL CARRITO VACIO
            if (!$cart) {

                $cart = [
                    $id => [
                        "codart" => $oProducto->codart,
                        "codart_web" => $oProducto->codart_web,
                        "descri_corta" => $oProducto->descri_corta,
                        "quantity" => $cantidad,
                        "precio" => $oProducto->precio,
                        "porcion" => $oProducto->porciones,
                        "medidas" => $oProducto->porciones_detalle,
                        "id_keke" => $idkeke,
                        "keke" => $keke,
                        "id_relleno" => $idrelleno,
                        "relleno" => $relleno,
                        "diarecojo" =>  $dia_recojo,
                        "tiene_dedicatoria" => $tiene_dedicatoria,
                        "impdedicatoria" => $impdedicatoria,
                        "dedicatoria" => $dedicatoria,
                        "neto" =>  $oProducto->precio + $impdedicatoria,
                        "img" => $oProducto->url
                    ]

                ];

                Session::add("cart", $cart);
                $data =  Session::get("cart");
                if (is_array($data) || is_object($data)) {
                    foreach ($data as $item) {
                        $Total = $Total + $item["quantity"];
                    }
                }

                echo json_encode(["success" => true, "data" => $cart, "Total" => $Total,  "msg" => "Se añadió " . $name_producto . " a su orden"], JSON_PRETTY_PRINT);
                return;
            }
            // SI YA EXISTE EL ITEM EN EL CARRITO , SOLO SE SUMA CANTIDADES
            if (isset($cart[$id])) {
                $cantid =  $cart[$id]['quantity'] + $cantidad;

                if ($cantid > 0) {
                    $cart[$id]['quantity'] = $cart[$id]['quantity'] + $cantidad;
                }


                Session::add("cart", $cart);
                $data =  Session::get("cart");
                if (is_array($data) || is_object($data)) {
                    foreach ($data as $item) {
                        $Total = $Total + $item["quantity"];
                    }
                }
                echo json_encode(["success" => true, "data" => $cart, "Total" => $Total,  "msg" => "Se añadió " . $name_producto . " a su orden"], JSON_PRETTY_PRINT);
                return;
            }

            // SI NO EXISTE EL ITEM EN EL CARRITO YA CON ITEMS DISTINTOS AL Q VAMOS A INGRESAR, SE AÑADE EL ITEM
            $cart[$id] = [
                "codart" => $oProducto->codart,
                "codart_web" => $oProducto->codart_web,
                "descri_corta" => $oProducto->descri_corta,
                "quantity" => $cantidad,
                "precio" => $oProducto->precio,
                "porcion" => $oProducto->porciones,
                "medidas" => $oProducto->porciones_detalle,
                "id_keke" => $idkeke,
                "keke" => $keke,
                "id_relleno" => $idrelleno,
                "relleno" => $relleno,
                "diarecojo" => $dia_recojo,
                "tiene_dedicatoria" => $tiene_dedicatoria,
                "dedicatoria" => $dedicatoria,
                "impdedicatoria" => $impdedicatoria,
                "neto" =>  $oProducto->precio + $impdedicatoria,
                "img" => $oProducto->url
            ];
            Session::add("cart", $cart);
            $data =  Session::get("cart");
            if (is_array($data) || is_object($data)) {
                foreach ($data as $item) {
                    $Total = $Total + $item["quantity"];
                }
            }

            echo json_encode(["success" => true, "data" => $cart, "Total" => $Total,  "msg" => "Se añadió " . $name_producto . " a su orden"], JSON_PRETTY_PRINT);
            return;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function DeleteItem()
    {
        header('Content-Type: application/json');
        try {

            $Total = 0.00;
            $codart = isset($_REQUEST['id']) ? $_REQUEST['id'] : "";

            $id_keke = isset($_REQUEST['k']) ? $_REQUEST['k'] : "0";
            $id_relleno = isset($_REQUEST['r']) ? $_REQUEST['r'] : "0";
            $dedicatoria = isset($_REQUEST['d']) ? $_REQUEST['d'] : "0";
            $drecojo = isset($_REQUEST['f']) ? $_REQUEST['f'] : "0";
            $codart = Desencriptar($codart);

            $id = $codart . $id_keke . $id_relleno . $dedicatoria . $drecojo;
            $cart = Session::get("cart");

            $prodname = $cart[$id]["descri_corta"];

            if (isset($cart[$id])) {

                unset($cart[$id]);

                Session::add("cart", $cart);

                $data = Session::get("cart");
                if (is_array($data) || is_object($data)) {
                    foreach ($data as $item) {
                        $Total = $Total + $item["quantity"];
                    }
                }
                echo json_encode(["success" => true, "data" => $data, "Total" => $Total,  "msg" => "Se removió " . $prodname . " de su orden"], JSON_PRETTY_PRINT);
            } else {
                echo json_encode(["success" => false, "data" => [],  "msg" => "No se puedo remover el item a su orden"], JSON_PRETTY_PRINT);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function carga_dedicatoria()
    {
        header('Content-Type: application/json');

        try {


            $daoProducto = new daoProducto_web($this->DB);
            $imp_dedicatoria = $daoProducto->select_importe_tarjeta_dedicatoria();

            echo json_encode(["success" => true,  "data" => $imp_dedicatoria,  "msg" => ""], JSON_PRETTY_PRINT);
            return;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
