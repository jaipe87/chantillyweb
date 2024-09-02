<?php

class TortasTematicasController
{
    private $tpl = null;
    private $DB = null;
    private $cia = 1;
    private $id_pagina = 6;
    private $empresa = null;
    public function __construct($arrParam)
    {
        $this->DB = $arrParam["DB"];
        $this->tpl = $arrParam["tpl"];
        $this->empresa = EmpresaFactory::GetEmpresa(["cia"=>$this->cia],$this->DB);  
        Session::init();
    }
    public function Index()
    {
        try {




            $daoTematica = new daoTematicas($this->DB);
            $oaoMenu = new daoPagina($this->DB);

            $lstMenus = $oaoMenu->select_all_Menu_pagina();

            if (is_array($lstMenus)) {
                if (count($lstMenus) > 0) {
                    $this->tpl->assign("lista_menus", $lstMenus);
                }
            }
            $lstTematicas = $daoTematica->select_all_tematicas(["cia" => $this->cia]);

            if (is_array($lstTematicas)) {
                if (count($lstTematicas) > 0) {
                    $this->tpl->assign("lista_tematica", $lstTematicas);
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
            $titulo = "TORTAS TEMÁTICAS";
            if($this->empresa){
                $this->tpl->assign("empresa", $this->empresa);
            }
            $this->tpl->assign("titulo", $titulo);

            $subtitulo = "Las mejores tortas en la Casa del Chantilly, calidad y amor.";

            $this->tpl->assign("idtematica", "0");
            $this->tpl->assign("subtitulo", $subtitulo);
            $this->tpl->display("tortatematica.tpl");
        } catch (Exception $e) {
            Session::close();
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }

    public function Tematica()
    {

        try {

            $idtematica = Desencriptar(isset($_REQUEST['tm']) ? $_REQUEST['tm'] : 0);

            if (isset($idtematica) && $idtematica != 0) {


                $daoTematica = new daoTematicas($this->DB);


                $oTematica = $daoTematica->select_one_tematicas(["cia" => $this->cia, "id_tematica" => $idtematica]);

                if (isset($oTematica)) {
                    if (is_object($oTematica)) {

                        $oaoMenu = new daoPagina($this->DB);

                        $lstMenus = $oaoMenu->select_all_Menu_pagina();

                        if (is_array($lstMenus)) {
                            if (count($lstMenus) > 0) {
                                $this->tpl->assign("lista_menus", $lstMenus);
                            }
                        }
                        $lstTematicas = $daoTematica->select_all_tematicas(["cia" => $this->cia]);

                        if (is_array($lstTematicas)) {
                            if (count($lstTematicas) > 0) {
                                $this->tpl->assign("lista_tematica", $lstTematicas);
                            }
                        }
                        $titulo = "TORTAS TEMÁTICAS - " . $oTematica->tematica;
                        $this->tpl->assign("titulo", $titulo);

                        $subtitulo = "Las mejores tortas en la Casa del Chantilly, calidad y amor.";
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
                        if($this->empresa){
                            $this->tpl->assign("empresa", $this->empresa);
                        }
                        $this->tpl->assign("idtematica", Encriptar($idtematica));
                        $this->tpl->assign("subtitulo", $subtitulo);
                        $this->tpl->display("tortatematica.tpl");
                    } else {
                        header('Location: ' . RUTA_HTTP . "/TortasTematicas");
                        die();
                    }
                } else {

                    header('Location: ' . RUTA_HTTP . "/TortasTematicas");
                    die();
                }
            } else {
                header('Location: ' . RUTA_HTTP . "/TortasTematicas");
                die();
            }
        } catch (Exception $e) {
            Session::close();
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }

    public function refresh_datos_tortas_tematicas()
    {
        header('Content-Type: application/json');
        try {
            $daoProductoweb = new daoProducto_web($this->DB);
            // Obtener página y límite de los parámetros de la solicitud
            $pagina = isset($_REQUEST['pagina']) ? intval($_REQUEST['pagina']) : 1;
            $limite = isset($_REQUEST['limite']) ? intval($_REQUEST['limite']) : 8;
            $id_tematica = isset($_REQUEST['id_tematica']) ? $_REQUEST['id_tematica'] : '';
            $id_pagina = isset($_REQUEST['id_pagina']) ? intval($_REQUEST['id_pagina']) : $this->id_pagina;
            $criterio = isset($_REQUEST['criterio']) ? $_REQUEST['criterio'] : '';

            $offset = ($pagina - 1) * $limite;
            $tbltortas = $daoProductoweb->select_all_Productos_tematicas(["cia" => $this->cia,  "criterio" => $criterio, "pagina" => $id_pagina, "id_tematica" => Desencriptar($id_tematica)], $offset, $limite);
            $total_items = $daoProductoweb->select_count_productos_tematicas(["cia" => $this->cia,  "criterio" => $criterio, "pagina" => $id_pagina, "id_tematica" => Desencriptar($id_tematica)]);
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
}
