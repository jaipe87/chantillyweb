<?php

require_once './models/dto/Menu.php';

class daoMenu
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }

    public function Select_all_menu($Param)
    {
        $conn = $this->link;
        $lista = [];
        $Lst_menu = [];
        $cod = $Param["id_usuario"];

        $sql = "SELECT admin_pages_web.id_pages,nombre_pages,nivel_pages,link_view FROM admin_pages_web 
                INNER JOIN admin_usuario_web ON admin_usuario_web.id_pages=admin_pages_web.id_pages AND admin_usuario_web.id_usuario=$cod
                WHERE est_pages=1 AND opcion_activa=1 ORDER BY orden_pages ;";

        $rs = $conn->execute($sql);

        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oMenu = new Menu();
                $oMenu->id_pages = $item['id_pages'];
                $oMenu->nombre_menu = $item['nombre_pages'];
                $oMenu->nivel_menu = $item['nivel_pages'];
                $oMenu->link_view = $item['link_view'];
                array_push($Lst_menu, $oMenu);
            }
            return $Lst_menu;
        } else {
            return [];
        }
    }

    public function Select_all_menu_by_Usuario($Param)
    {
        $conn = $this->link;
        $lista = [];
        $Lst_menu = [];
        $cod = $Param["id_usuario"];

        $sql = "SELECT admin_pages_web.id_pages,nombre_pages ,admin_pages_web.nivel_pages,
                IFNULL(admin_usuario_web.opcion_activa,0) opcion_activa  FROM admin_pages_web 
                LEFT JOIN admin_usuario_web ON  admin_usuario_web.id_pages=admin_pages_web.id_pages AND  admin_usuario_web.id_usuario=$cod
                WHERE est_pages=1 ORDER BY orden_pages;";

        $rs = $conn->Execute($sql);

        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oMenu = new Menu();
                $oMenu->id_pages = $item['id_pages'];
                $oMenu->nombre_menu = $item['nombre_pages'];
                $oMenu->nivel_menu = $item['nivel_pages'];
                $oMenu->opcion_activa = $item['opcion_activa'];
                array_push($Lst_menu, $oMenu);
            }
            return $Lst_menu;
        } else {
            return [];
        }
    }
}