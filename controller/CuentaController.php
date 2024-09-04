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
        $this->DB = $arrParam["DB"];
        $this->tpl = $arrParam["tpl"];
        $this->auth = AuthFactory::getInstance();
        $this->empresa = EmpresaFactory::GetEmpresa(["cia" => $this->cia], $this->DB);
        $this->msgToken = "No ha iniciado Sesión o su Sesión ha expirado";
        Session::init();
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
            $this->tpl->assign("login", "login");
            $this->tpl->assign("titulo", $titulo);
            $this->tpl->display("usuario.tpl");
        } catch (Exception $e) {
            Session::close();
            addCookie("msg", $msgtoken);
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }



    public function mis_pedidos()
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

            $this->tpl->display("pedido.tpl");
        } catch (Exception $e) {
            Session::close();
            addCookie("msg", $msgtoken);
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }
}
