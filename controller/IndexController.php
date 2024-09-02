<?php
require_dir('models/dao.*');
class IndexController
{

    private $tpl = null;
    private $DB = null;
    private $id_pagina = 1;
    private $cia = 1;
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

            $daoBanner = new daoBanner($this->DB);

            $lstBanner = $daoBanner->select_all_Banner([]);

            if (is_array($lstBanner)) {
                if (count($lstBanner) > 0) {
                    $this->tpl->assign("lista_banner", $lstBanner);
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
                if (isset($_GET['code'])) {
                   $code = $_GET['code'];
                   $oauth =  new AuthController(["DB"=>$this->DB,"tpl"=>$this->tpl]);
                   $oauth->registra_cliente_google($code);
                
                } else {

                    $login_url = createAuthUrl();
                    $login_url = filter_var($login_url, FILTER_SANITIZE_URL);
                    $this->tpl->assign("login_url", $login_url);
                } 
            }
           
            if($this->empresa){
                $this->tpl->assign("empresa", $this->empresa);
            }
           
            if (isset($_COOKIE['msg'])) {
                $msg = $_COOKIE["msg"];
                removeCookie("msg");
                $this->tpl->assign("msg", $msg); 
            }

            $this->tpl->assign("id_pagina", $this->id_pagina);
            $this->tpl->display("index.tpl");
        } catch (Exception $e) {
            Session::close();
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }

   
}
