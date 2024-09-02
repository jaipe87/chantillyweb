<?php

require_once './models/dto/Producto_web.php';
require_once './models/dto/Producto.php';
require_once './models/dto/Keke.php';
require_once './models/dto/Relleno.php';

class daoProducto_web
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }
    public function select_all_Productos_destacados($Param, $offset = 0, $limite = 0)
    {
        $conn = $this->link;
        $lstProductos = [];
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT cia,codart_web,descri_corta,descri_larga,precio_min,precio_max,url FROM
                tabart_web WHERE tabart_web.cia=$cia and tabart_web.st=0 and tabart_web.stdestacado=1 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar)
                AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%'
                LIMIT $offset, $limite";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto_web();
                $oProducto->cia = $item["cia"];
                $oProducto->codart_web = Encriptar($item['codart_web']);
                $oProducto->descri_corta = $item['descri_corta'];
                $oProducto->descri_larga = $item['descri_larga'];
                $oProducto->precio_min = $item['precio_min'];
                $oProducto->precio_max = $item['precio_max'];
                $oProducto->url = $item['url'];
                array_push($lstProductos, $oProducto);
            }

            return $lstProductos;
        } else {
            return [];
        }
    }

    public function select_count_productos_destacados($Param)
    {
        $conn = $this->link;
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT COUNT(*) as total 
                FROM tabart_web 
                WHERE tabart_web.cia=$cia and tabart_web.st=0 and tabart_web.stdestacado=1 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar) 
                AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%' ";
        $rs = $conn->execute($sql);
        $total = $rs->fields['total'];

        return $total;
    }
    public function select_all_Productos_personalizadas($Param, $offset = 0, $limite = 0)
    {
        $conn = $this->link;
        $lstProductos = [];
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $sql = "SELECT cia,codart_web,descri_corta,descri_larga,precio_min,precio_max,url FROM
                tabart_web WHERE tabart_web.cia=$cia and tabart_web.st=0 and tabart_web.id_tematica!=0 AND tabart_web.tipo_producto=2 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar)
                LIMIT $offset, $limite";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto_web();
                $oProducto->cia = $item["cia"];
                $oProducto->codart_web = Encriptar($item['codart_web']);
                $oProducto->descri_corta = $item['descri_corta'];
                $oProducto->descri_larga = $item['descri_larga'];
                $oProducto->precio_min = $item['precio_min'];
                $oProducto->precio_max = $item['precio_max'];
                $oProducto->url = $item['url'];
                array_push($lstProductos, $oProducto);
            }

            return $lstProductos;
        } else {
            return [];
        }
    }
    public function select_count_productos_personalizadas($Param)
    {
        $conn = $this->link;
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $sql = "SELECT COUNT(*) as total 
                FROM tabart_web 
                WHERE tabart_web.cia=$cia and tabart_web.st=0 and tabart_web.id_tematica!=0 AND tabart_web.tipo_producto=2 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar) ";
        $rs = $conn->execute($sql);
        $total = $rs->fields['total'];

        return $total;
    }
    public function select_all_Productos_tortas($Param, $offset = 0, $limite = 0)
    {
        $conn = $this->link;
        $lstProductos = [];
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT cia,codart_web,descri_corta,descri_larga,precio_min,precio_max,url FROM
                tabart_web WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 1 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar)
                 AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%'
                LIMIT $offset, $limite";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto_web();
                $oProducto->cia = $item["cia"];
                $oProducto->codart_web =  Encriptar($item['codart_web']);
                $oProducto->descri_corta = $item['descri_corta'];
                $oProducto->descri_larga = $item['descri_larga'];
                $oProducto->precio_min = $item['precio_min'];
                $oProducto->precio_max = $item['precio_max'];
                $oProducto->url = $item['url'];
                array_push($lstProductos, $oProducto);
            }

            return $lstProductos;
        } else {
            return [];
        }
    }
    public function select_count_productos_tortas($Param)
    {
        $conn = $this->link;
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT COUNT(*) as total 
                FROM tabart_web 
                WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 1 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar) 
                 AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%'";
        $rs = $conn->execute($sql);
        $total = $rs->fields['total'];

        return $total;
    }
    public function select_all_Productos_postres($Param, $offset = 0, $limite = 0)
    {
        $conn = $this->link;
        $lstProductos = [];
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT cia,codart_web,descri_corta,descri_larga,precio_min,precio_max,url FROM
                tabart_web WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 3 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar)
                 AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%'
                LIMIT $offset, $limite";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto_web();
                $oProducto->cia = $item["cia"];
                $oProducto->codart_web = Encriptar($item['codart_web']);
                $oProducto->descri_corta = $item['descri_corta'];
                $oProducto->descri_larga = $item['descri_larga'];
                $oProducto->precio_min = $item['precio_min'];
                $oProducto->precio_max = $item['precio_max'];
                $oProducto->url = $item['url'];
                array_push($lstProductos, $oProducto);
            }

            return $lstProductos;
        } else {
            return [];
        }
    }
    public function select_count_productos_postres($Param)
    {
        $conn = $this->link;
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT COUNT(*) as total 
                FROM tabart_web 
                WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 3 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar) 
                 AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%'";
        $rs = $conn->execute($sql);
        $total = $rs->fields['total'];

        return $total;
    }
    public function select_all_Productos_bocaditos($Param, $offset = 0, $limite = 0)
    {
        $conn = $this->link;
        $lstProductos = [];
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT cia,codart_web,descri_corta,descri_larga,precio_min,precio_max,url FROM
                tabart_web WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 4 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar)
                 AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%'
                LIMIT $offset, $limite";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto_web();
                $oProducto->cia = $item["cia"];
                $oProducto->codart_web = Encriptar($item['codart_web']);
                $oProducto->descri_corta = $item['descri_corta'];
                $oProducto->descri_larga = $item['descri_larga'];
                $oProducto->precio_min = $item['precio_min'];
                $oProducto->precio_max = $item['precio_max'];
                $oProducto->url = $item['url'];
                array_push($lstProductos, $oProducto);
            }

            return $lstProductos;
        } else {
            return [];
        }
    }
    public function select_count_productos_bocaditos($Param)
    {
        $conn = $this->link;
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT COUNT(*) as total 
                FROM tabart_web 
                WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 4 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar) 
                 AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%'";
        $rs = $conn->execute($sql);
        $total = $rs->fields['total'];

        return $total;
    }

    public function select_all_Productos_promociones($Param, $offset = 0, $limite = 0)
    {
        $conn = $this->link;
        $lstProductos = [];
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT cia,codart_web,descri_corta,descri_larga,precio_min,precio_max,url FROM
                tabart_web WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 6 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar)
                 AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%'
                LIMIT $offset, $limite";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto_web();
                $oProducto->cia = $item["cia"];
                $oProducto->codart_web = Encriptar($item['codart_web']);
                $oProducto->descri_corta = $item['descri_corta'];
                $oProducto->descri_larga = $item['descri_larga'];
                $oProducto->precio_min = $item['precio_min'];
                $oProducto->precio_max = $item['precio_max'];
                $oProducto->url = $item['url'];
                array_push($lstProductos, $oProducto);
            }

            return $lstProductos;
        } else {
            return [];
        }
    }
    public function select_count_productos_promociones($Param)
    {
        $conn = $this->link;
        $cia = $Param["cia"];
        $pagina = $Param["pagina"];
        $criterio = $Param["criterio"];
        $sql = "SELECT COUNT(*) as total 
                FROM tabart_web 
                WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 6 AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar) 
                 AND CONCAT(codart_web,descri_corta,descri_larga) LIKE '%$criterio%'";
        $rs = $conn->execute($sql);
        $total = $rs->fields['total'];

        return $total;
    }



    public function select_one_producto($Param)
    {
        $conn = $this->link;
        $oProducto = new Producto_web();
        $cia = $Param["cia"];
        $codart_web = $Param["codart_web"];
        $sql = "SELECT tabart_web.codart_web,tabart_web.descri_corta,tabart_web.descri_larga ,tabart_web.precio_min,tabart_web.precio_max,tabart_web.cod_categoria, tabart_web.url,tabart_web.mostrar_porciones,
                       tabart_web.mostrar_kekes,tabart_web.mostrar_relleno,tabart_web.mostrar_dia_recojo,tabart_web.mostrar_dedicatoria,tabart_web.tipo_producto  FROM  tabart_web  
                WHERE tabart_web.cia=$cia AND tabart_web.codart_web = '$codart_web' AND tabart_web.st=0 ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $item = $rs->GetRows()[0];
            $oProducto->codart_web = Encriptar($item['codart_web']);
            $oProducto->descri_corta = $item['descri_corta'];
            $oProducto->descri_larga = $item['descri_larga'];
            $oProducto->precio_min = $item['precio_min'];
            $oProducto->precio_max = $item['precio_max'];
            $oProducto->cod_categoria = $item['cod_categoria'];
            $oProducto->tipo_producto = $item["tipo_producto"];
            $oProducto->url = $item['url'];
            $oProducto->mostrar_porciones = $item['mostrar_porciones'];
            $oProducto->mostrar_kekes = $item['mostrar_kekes'];
            $oProducto->mostrar_relleno = $item['mostrar_relleno'];
            $oProducto->mostrar_dia_recojo = $item['mostrar_dia_recojo'];
            $oProducto->mostrar_dedicatoria = $item['mostrar_dedicatoria'];
            return $oProducto;
        } else {
            return [];
        }
    }
    public function select_all_Productos_porciones($Param)
    {
        $conn = $this->link;
        $lstPorciones = [];
        $cia = $Param["cia"];
        $codart_web = $Param["codart_web"];

        $sql = "SELECT  tabart_web.codart_web,tabart.codart, tabart.descri, tabart.porciones,tabart.porciones_detalle,  tabart.precio,tabart.horas,tabart_web.cod_categoria  FROM   tabart_web  
                INNER JOIN  tabart  ON tabart_web.cia=tabart.cia AND tabart_web.codart_web=tabart.codart_web 
                WHERE tabart_web.cia=$cia AND tabart_web.codart_web = '$codart_web' ORDER BY tabart.ordenar ASC;";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto();
                $oProducto->codart_web = Encriptar($item["codart_web"]);
                $oProducto->codart = Encriptar($item['codart']);
                $oProducto->descri = $item['descri'];
                $oProducto->porciones = $item['porciones'];
                $oProducto->porciones_detalle = $item['porciones_detalle'];
                $oProducto->precio = $item['precio'];
                $oProducto->horas = $item['horas'];
                $oProducto->cod_categoria = $item["cod_categoria"];
                array_push($lstPorciones, $oProducto);
            }
            return $lstPorciones;
        } else {
            return [];
        }
    }
    public function select_one_Producto_detalle($Param)
    {
        $conn = $this->link;
        $cia = $Param["cia"];
        $codart_web = $Param["codart_web"];
        $codart = $Param["codart"];
        $sql = "SELECT tabart.codart,tabart.descri, tabart.porciones,tabart.precio,tabart.porciones_detalle,tabart.horas,
                 tabart_web.codart_web, tabart_web.descri_corta,tabart_web.url,tabart_web.mostrar_porciones,tabart_web.mostrar_kekes,
                 tabart_web.mostrar_relleno,tabart_web.mostrar_dia_recojo,tabart_web.mostrar_dedicatoria  FROM   tabart_web  
                INNER JOIN  tabart  ON tabart_web.cia=tabart.cia AND tabart_web.codart_web=tabart.codart_web 
                WHERE tabart_web.cia=$cia AND tabart_web.codart_web = '$codart_web' AND tabart.codart='$codart' ;";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows()[0];
            $oProducto = new Producto();
            $oProducto->codart = Encriptar($lista['codart']);
            $oProducto->codart_web = Encriptar($lista['codart_web']);
            $oProducto->descri_corta = $lista['descri_corta'];
            $oProducto->descri =  $lista['descri'];
            $oProducto->porciones = $lista['porciones'];
            $oProducto->porciones_detalle = $lista['porciones_detalle'];
            $oProducto->precio = $lista['precio'];
            $oProducto->horas = $lista['horas'];
            $oProducto->url = $lista['url'];
            $oProducto->mostrar_porciones = $lista['mostrar_porciones'];
            $oProducto->mostrar_kekes = $lista['mostrar_kekes'];
            $oProducto->mostrar_relleno = $lista['mostrar_relleno'];
            $oProducto->mostrar_dia_recojo = $lista['mostrar_dia_recojo'];
            $oProducto->mostrar_dedicatoria = $lista['mostrar_dedicatoria'];

            return $oProducto;
        } else {
            return [];
        }
    }
    public function select_all_Productos_keke($Param)
    {
        $conn = $this->link;

        $lstKeke = [];

        $cia = $Param["cia"];
        $codart_web = $Param["codart_web"];
        $cod_categoria = $Param["cod_categoria"];

        $sql = "SELECT tabkeke.id_keke,tabkeke.keke  FROM   tabart_web 
                                          INNER JOIN det_cobertura_keke_relleno ON det_cobertura_keke_relleno.cia=tabart_web.cia AND det_cobertura_keke_relleno.id_categoria=tabart_web.cod_categoria
                                          INNER JOIN tabkeke on tabkeke.cia=det_cobertura_keke_relleno.cia AND tabkeke.id_keke= det_cobertura_keke_relleno.id_keke                                            
                WHERE tabart_web.cia=$cia AND tabart_web.codart_web = '$codart_web' AND tabart_web.cod_categoria=$cod_categoria AND tabkeke.st=0 AND det_cobertura_keke_relleno.st=0  GROUP BY keke;";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oKeke = new Keke();
                $oKeke->id_keke = $item['id_keke'];
                $oKeke->keke = $item['keke'];
                array_push($lstKeke, $oKeke);
            }
            return $lstKeke;
        } else {
            return [];
        }
    }
    public function select_all_Productos_Relleno($Param)
    {
        $conn = $this->link;

        $lstRelleno = [];

        $cia = $Param["cia"];
        $codart_web = $Param["codart_web"];
        $cod_categoria = $Param["cod_categoria"];
        $id_keke = $Param["id_keke"];

        $sql = "SELECT tabrelleno.id_relleno,tabrelleno.relleno FROM  tabart_web 
                INNER JOIN det_cobertura_keke_relleno ON det_cobertura_keke_relleno.cia=tabart_web.cia AND det_cobertura_keke_relleno.id_categoria=tabart_web.cod_categoria
                INNER JOIN tabrelleno ON tabrelleno.cia=det_cobertura_keke_relleno.cia AND tabrelleno.id_relleno= det_cobertura_keke_relleno.id_relleno                                            
                WHERE tabart_web.cia=$cia AND tabart_web.codart_web = '$codart_web' AND tabart_web.cod_categoria=$cod_categoria AND det_cobertura_keke_relleno.id_keke=$id_keke AND det_cobertura_keke_relleno.st=0 AND tabrelleno.st=0 ";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oRelleno = new Relleno();
                $oRelleno->id_relleno = $item['id_relleno'];
                $oRelleno->relleno = $item['relleno'];
                array_push($lstRelleno, $oRelleno);
            }
            return $lstRelleno;
        } else {
            return [];
        }
    }
    public function select_all_Productos_bocaditos_detalle($Param, $offset = 0, $limite = 0)
    {
        $conn = $this->link;
        $lstProductos = [];
        $cia = $Param["cia"];
        $sql = "SELECT cia,codart_web,descri_corta,descri_larga,precio_min,precio_max,url FROM
                tabart_web WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 4
                LIMIT $offset, $limite";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto_web();
                $oProducto->cia = $item["cia"];
                $oProducto->codart_web = Encriptar($item['codart_web']);
                $oProducto->descri_corta = $item['descri_corta'];
                $oProducto->descri_larga = $item['descri_larga'];
                $oProducto->precio_min = $item['precio_min'];
                $oProducto->precio_max = $item['precio_max'];
                $oProducto->url = $item['url'];
                array_push($lstProductos, $oProducto);
            }

            return $lstProductos;
        } else {
            return [];
        }
    }

    public function select_count_productos_bocaditos_detalle($Param)
    {
        $conn = $this->link;
        $cia = $Param["cia"];
        $sql = "SELECT COUNT(*) as total 
                FROM tabart_web 
                WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 4 ";
        $rs = $conn->execute($sql);
        $total = $rs->fields['total'];

        return $total;
    }


    public function select_all_Productos_accesorios($Param)
    {
        $conn = $this->link;
        $lstAccesorios = [];
        $cia = $Param["cia"];


        $sql = "SELECT  tabart_web.codart_web,tabart.codart,tabart_web.descri_corta, tabart.precio,tabart_web.cod_categoria,tabart_web.url  FROM   tabart_web  
                INNER JOIN  tabart  ON tabart_web.cia=tabart.cia AND tabart_web.codart_web=tabart.codart_web 
                WHERE tabart_web.cia=$cia AND tabart_web.tipo_producto=5 ";

        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto();
                $oProducto->codart_web = Encriptar($item["codart_web"]);
                $oProducto->codart = Encriptar($item['codart']);
                $oProducto->descri_corta = $item['descri_corta'];
                $oProducto->precio = $item['precio'];
                $oProducto->url = $item['url'];
                $oProducto->cod_categoria = $item["cod_categoria"];
                array_push($lstAccesorios, $oProducto);
            }
            return $lstAccesorios;
        } else {
            return [];
        }
    }

    public function select_all_Productos_tematicas($Param, $offset = 0, $limite = 0)
    {
        $conn = $this->link;
        $lstProductos = [];
        $cia = $Param["cia"];
        $id_tematica = $Param["id_tematica"];
        $criterio = $Param["criterio"];
        $pagina = $Param["pagina"];
        $sql = "SELECT tabart_web.cia,codart_web,descri_corta,descri_larga,precio_min,precio_max,tabart_web.url FROM
                tabart_web INNER JOIN tabtematica ON  tabtematica.cia=tabart_web.cia AND tabtematica.id_tematica=tabart_web.id_tematica 
                WHERE tabart_web.cia=$cia and tabart_web.st=0  AND tabart_web.tipo_producto = 2  AND tabart_web.tipo_producto=2 
                AND CONCAT(codart_web,descri_corta,descri_larga,tabtematica.tematica) LIKE '%$criterio%' AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar) ";

        if ($id_tematica != 0) {
            $sql .= " AND tabart_web.id_tematica=$id_tematica";
        }

        $sql .= " LIMIT $offset, $limite";
       
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows();
            foreach ($lista as $item) {
                $oProducto = new Producto_web();
                $oProducto->cia = $item["cia"];
                $oProducto->codart_web = Encriptar($item['codart_web']);
                $oProducto->descri_corta = $item['descri_corta'];
                $oProducto->descri_larga = $item['descri_larga'];
                $oProducto->precio_min = $item['precio_min'];
                $oProducto->precio_max = $item['precio_max'];
                $oProducto->url = $item['url'];
                array_push($lstProductos, $oProducto);
            }

            return $lstProductos;
        } else {
            return [];
        }
    }
    public function select_count_productos_tematicas($Param)
    {
        $conn = $this->link;
        $cia = $Param["cia"];
        $id_tematica = $Param["id_tematica"];
        $criterio = $Param["criterio"];
        $pagina = $Param["pagina"];
        $sql = "SELECT COUNT(*) as total 
                FROM tabart_web INNER JOIN tabtematica ON   tabtematica.cia=tabart_web.cia AND tabtematica.id_tematica=tabart_web.id_tematica
                WHERE tabart_web.cia=$cia and tabart_web.st=0 AND tabart_web.tipo_producto = 2  AND tabart_web.tipo_producto=2 
                AND CONCAT(codart_web,descri_corta,descri_larga,tabtematica.tematica) LIKE '%$criterio%' AND FIND_IN_SET($pagina,tabart_web.pagina_mostrar) ";
        if ($id_tematica != 0) {
            $sql .= " AND tabart_web.id_tematica=$id_tematica";
        }
    
        $rs = $conn->execute($sql);
        $total = $rs->fields['total'];

        return $total;
    }

    public function select_importe_tarjeta_dedicatoria()
    {
        $conn = $this->link;

        $sql = "SELECT importe 
                FROM tarjeta_dedicatoria WHERE st=0 limit 1 ";
        $rs = $conn->execute($sql);
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $total = $rs->fields['importe'];
        } else {
            $total = 0.00;
        }
        return $total;
    }
}
