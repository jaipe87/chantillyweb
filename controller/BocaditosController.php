<?php

class BocaditosController
{
    private $tpl = null;
    private $DB = null;
    private $id_pagina = 4;
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
            $titulo = "BOCADITOS EN LÍNEA";
            $this->tpl->assign("titulo", $titulo);

            
            $subtitulo = "Los mejores bocaditos en la Casa del Chantilly, calidad y amor.";

            if($this->empresa){
                $this->tpl->assign("empresa", $this->empresa);
            }


            $this->tpl->assign("id_pagina", $this->id_pagina);
            $this->tpl->assign("subtitulo", $subtitulo);
            $this->tpl->display("bocaditos.tpl");
            

        } catch (Exception $e) {
            Session::close();
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }
    public function refresh_datos_bocaditos()
    {
        header('Content-Type: application/json');
        try {
            $daoProductoweb = new daoProducto_web($this->DB);
            // Obtener página y límite de los parámetros de la solicitud
            $pagina = isset($_REQUEST['pagina']) ? intval($_REQUEST['pagina']) : 1;
            $limite = isset($_REQUEST['limite']) ? intval($_REQUEST['limite']) : 8;
            $id_pagina = isset($_REQUEST['id_pagina']) ? intval($_REQUEST['id_pagina']) : $this->id_pagina;
            $criterio = isset($_REQUEST['criterio']) ? $_REQUEST['criterio'] : '';
            // Lógica de paginación
            $offset = ($pagina - 1) * $limite;
            $tbltortas = $daoProductoweb->select_all_Productos_bocaditos(["cia" => $this->cia, "pagina"=> $id_pagina,"criterio"=>$criterio], $offset, $limite);
            $total_items = $daoProductoweb->select_count_productos_bocaditos(["cia" => $this->cia, "pagina"=> $id_pagina,"criterio"=>$criterio]);
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
