<?php
class ContactoController
{
    private $tpl = null;
    private $DB = null;
    private $id_pagina = 5;
    private $cia = 1;
    private $empresa = null;
    public function __construct($arrParam)
    {
        $this->DB = $arrParam["DB"];
        $this->tpl = $arrParam["tpl"];
        $this->empresa = EmpresaFactory::GetEmpresa(["cia" => $this->cia], $this->DB);
        Session::init();
    }
    public function Index()
    {
        try {

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

            $titulo = "NUESTROS LOCALES";
            $this->tpl->assign("titulo", $titulo);

            $subtitulo = "Conoce un poco más de nuestros locales a nivel nacional";
            $this->tpl->assign("id_pagina", $this->id_pagina);
            $this->tpl->assign("subtitulo", $subtitulo);
            $this->tpl->display("contacto.tpl");
        } catch (Exception $e) {
            Session::close();
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }
    public function refresh_datos_contacto()
    {
        header('Content-Type: application/json');
        try {

            $daoRpt = new daoContacto($this->DB);
            $tblcontacto = $daoRpt->carga_datos_contacto([]);
            $data = [];
           
            if (is_array($tblcontacto) && count($tblcontacto) > 0) {
               
                $data = list_dismount($tblcontacto);
                echo json_encode(["success" => true, "data" => $data, "msg" => ""], JSON_PRETTY_PRINT);
            } else {
                echo json_encode(["success" => false, "data" => $data, "msg" => "No se han cargado locales a mostrar"], JSON_PRETTY_PRINT);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
