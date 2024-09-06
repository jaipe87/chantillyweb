<?php

class CuentaController
{
    private $tpl = null;
    private $DB = null;
    private $cia = 1;
    private $empresa = null;
    private $auth = null;
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
            $token = Session::get("access_token");
            if ($token) {
                $cliente = $this->auth->Decode($token);
                if (!$cliente) {
                    Session::close();
                    addCookie("msg", $msgtoken);
                    header('Location: ' . RUTA_HTTP);
                    die();
                }
                $nombre_sesion = $cliente->nom_usuario;
                $letra_sesion = strtolower(substr($nombre_sesion, 0, 1));
                $this->tpl->assign("nombre_sesion", $nombre_sesion);

                $this->tpl->assign("letra_sesion", $letra_sesion);
                $this->tpl->assign("token", $token);
            } else {
                Session::close();
                addCookie("msg", $msgtoken);
                header('Location: ' . RUTA_HTTP);

                die();
            }


            $oaoMenu = new daoPagina($this->DB);

            $lstMenus = $oaoMenu->select_all_Menu_pagina();

            if (is_array($lstMenus)) {
                if (count($lstMenus) > 0) {
                    $this->tpl->assign("lista_menus", $lstMenus);
                }
            }

            $daoTematica = new daoTematicas($this->DB);

            $lstTematicas = $daoTematica->select_all_tematicas(["cia" => $this->cia]);

            if (is_array($lstTematicas)) {
                if (count($lstTematicas) > 0) {
                    $this->tpl->assign("lista_tematica", $lstTematicas);
                }
            }

            if ($this->empresa) {
                $this->tpl->assign("empresa", $this->empresa);
            }

            $this->tpl->display("cuenta.tpl");
        } catch (Exception $e) {
            Session::close();
            addCookie("msg", $msgtoken);
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }

    public function mis_datos()
    {

        try {
            $msgtoken = $this->msgToken;
            $token = Session::get("access_token");

            if ($token) {
                $cliente = $this->auth->Decode($token);
                if (!$cliente) {
                    Session::close();
                    addCookie("msg", $msgtoken);
                    header('Location: ' . RUTA_HTTP);
                    die();
                } else {
                    $daoUsuario = new daoUsuario($this->DB);
                    $id_usuario = $cliente->id_usuario;

                    $oUsuario = $daoUsuario->GetUsuario(["id_usuario" => $id_usuario]);

                    $this->tpl->assign("cliente", $oUsuario);
                }
                $daoTipdoc =  new daoTipdoc($this->DB);
                $ListaDocumentos = $daoTipdoc->select_all_Tipdoc([]);

                if ($ListaDocumentos) {
                    if (is_array($ListaDocumentos)) {
                        $this->tpl->assign("lstDocumentos", $ListaDocumentos);
                    }
                }
                $nombre_sesion = $cliente->nom_usuario;
                $letra_sesion = strtolower(substr($nombre_sesion, 0, 1));
                $this->tpl->assign("nombre_sesion", $nombre_sesion);

                $this->tpl->assign("letra_sesion", $letra_sesion);
                $this->tpl->assign("token", $token);
            } else {
                Session::close();
                addCookie("msg", $msgtoken);
                header('Location: ' . RUTA_HTTP);

                die();
            }


            $oaoMenu = new daoPagina($this->DB);

            $lstMenus = $oaoMenu->select_all_Menu_pagina();

            if (is_array($lstMenus)) {
                if (count($lstMenus) > 0) {
                    $this->tpl->assign("lista_menus", $lstMenus);
                }
            }

            $daoTematica = new daoTematicas($this->DB);

            $lstTematicas = $daoTematica->select_all_tematicas(["cia" => $this->cia]);

            if (is_array($lstTematicas)) {
                if (count($lstTematicas) > 0) {
                    $this->tpl->assign("lista_tematica", $lstTematicas);
                }
            }

            if ($this->empresa) {
                $this->tpl->assign("empresa", $this->empresa);
            }
            $titulo = "TUS DATOS";

            $this->tpl->assign("titulo", $titulo);
            $this->tpl->display("usuario.tpl");
        } catch (Exception $e) {
            Session::close();
            addCookie("msg", $msgtoken);
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }



    public function mis_compras()
    {


        try {

            $msgtoken = $this->msgToken;
            $token = Session::get("access_token");
            if ($token) {
                $cliente = $this->auth->Decode($token);
                if (!$cliente) {
                    Session::close();
                    addCookie("msg", $msgtoken);
                    header('Location: ' . RUTA_HTTP);
                    die();
                }
                $nombre_sesion = $cliente->nom_usuario;
                $letra_sesion = strtolower(substr($nombre_sesion, 0, 1));
                $this->tpl->assign("nombre_sesion", $nombre_sesion);

                $this->tpl->assign("letra_sesion", $letra_sesion);
                $this->tpl->assign("token", $token);
            } else {
                Session::close();
                addCookie("msg", $msgtoken);
                header('Location: ' . RUTA_HTTP);

                die();
            }


            $oaoMenu = new daoPagina($this->DB);

            $lstMenus = $oaoMenu->select_all_Menu_pagina();

            if (is_array($lstMenus)) {
                if (count($lstMenus) > 0) {
                    $this->tpl->assign("lista_menus", $lstMenus);
                }
            }

            $daoTematica = new daoTematicas($this->DB);

            $lstTematicas = $daoTematica->select_all_tematicas(["cia" => $this->cia]);

            if (is_array($lstTematicas)) {
                if (count($lstTematicas) > 0) {
                    $this->tpl->assign("lista_tematica", $lstTematicas);
                }
            }

            if ($this->empresa) {
                $this->tpl->assign("empresa", $this->empresa);
            }


            $odaoPedido = new daoPedido($this->DB);

            $lista_fechas = $odaoPedido->combofecha(["id_usuario" => $cliente->id_usuario]);

            if (is_array($lista_fechas)) {
                if (count($lista_fechas) > 0) {
                    $this->tpl->assign("lista_fechas", $lista_fechas);
                }
            }
            $titulo = "MIS COMPRAS";

            $this->tpl->assign("titulo", $titulo);
            $this->tpl->display("pedido.tpl");
        } catch (Exception $e) {
            Session::close();
            addCookie("msg", $msgtoken);
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }

    public function  get_pedidos()
    {
        header('Content-Type: application/json');
        $token = Session::get("access_token");

        try {

            if ($token) {

                $cliente = $this->auth->Decode($token);

                if ($cliente) {
                    $daoUsuario = new daoUsuario($this->DB);
                    $id_usuario = $cliente->id_usuario;
                    $oUsuario = $daoUsuario->GetUsuario(["id_usuario" => $id_usuario]);
                    if ($oUsuario) {

                        $id_pedido = isset($_REQUEST['id_pedido']) ? intval($_REQUEST['id_pedido']) : 0;
                        $filtro = isset($_REQUEST['id_filtro']) ? intval($_REQUEST['id_filtro']) : 0;
                        $tipofiltro = isset($_REQUEST['id_tipo']) ? intval($_REQUEST['id_tipo']) : 0;

                        $odaoPedido =  new daoPedido($this->DB);
                        $oLstPedidos = [];
                        $oLstPedidos = $odaoPedido->GetPedido(["id_pedido" => $id_pedido, "idFiltro" => $filtro, "id_tipo"=>$tipofiltro]);


                        if (is_array($oLstPedidos) && count($oLstPedidos) > 0) {

                            $data = list_dismount($oLstPedidos);
                            echo json_encode([
                                "success" => true,
                                "data" => $data,
                                "msg" => ""
                            ], JSON_PRETTY_PRINT);
                        } else {
                            echo json_encode([
                                "success" => false,
                                "data" => [],
                                "msg" => "No se han encontrado registros a mostrar"
                            ], JSON_PRETTY_PRINT);
                        }
                    } else {
                        echo json_encode(["success" => false, "data" => [], "msg" => "Acceso no autorizado"], JSON_PRETTY_PRINT);
                        return;
                    }
                } else {
                    echo json_encode(["success" => false, "data" => [], "msg" => "Acceso no autorizado"], JSON_PRETTY_PRINT);
                    return;
                }
            } else {
                echo json_encode(["success" => false, "data" => [], "msg" => $this->msgToken], JSON_PRETTY_PRINT);
                return;
            }
        } catch (Exception $e) {
            Session::close();
            addCookie("msg", $this->msgToken);
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }
}
