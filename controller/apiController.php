<?php
class apiController
{

    private $DB = null;
    private $auth = null;
    private $msgToken = "";
    public function __construct($arrParam)
    {

        ob_start();
        $this->DB = $arrParam["DB"];
        $this->auth = AuthFactory::getInstance();
        $this->msgToken = "No ha iniciado Sesión o su Sesión ha expirado";
        Session::init();
        ob_get_clean();
    }

    public function select_all_tipdoc()
    {
        header('Content-Type: application/json');
        try {

            $daoRpt = new daoTipdoc($this->DB);
            $tbltipdoc = $daoRpt->select_all_Tipdoc([]);
            $data = [];
            if (is_array($tbltipdoc) && count($tbltipdoc) > 0) {

                $data = list_dismount($tbltipdoc);
                echo json_encode(["success" => true, "data" => $data, "msg" => ""], JSON_PRETTY_PRINT);
            } else {
                echo json_encode(["success" => false, "data" => $data, "msg" => "No se hay datos a listar"], JSON_PRETTY_PRINT);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select_all_provincia()
    {
        header('Content-Type: application/json');
        try {

            $daoRpt = new daoUbigeo($this->DB);
            $coddep = isset($_REQUEST['coddep']) ? $_REQUEST['coddep'] : 0;
            $coddep = str_pad($coddep, 2, "0", STR_PAD_LEFT);
            $tblprovincia = $daoRpt->select_all_provincia(["coddep" => $coddep]);
            $data = [];
            $Total = 0.00;
            $data =  Session::get("cart");
            if (is_array($data) || is_object($data)) {
                foreach ($data as $item) {
                    $Total = $Total + ($item["neto"] * $item["quantity"]);
                }
            }
            $data = [];

            if (is_array($tblprovincia) && count($tblprovincia) > 0) {
                $data = list_dismount($tblprovincia);
                echo json_encode(["success" => true, "data" => $data, "total" => $Total, "msg" => ""], JSON_PRETTY_PRINT);
            } else {

                echo json_encode(["success" => false, "data" => $data, "total" => $Total, "msg" => "No se hay datos a listar"], JSON_PRETTY_PRINT);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select_all_distrito()
    {
        header('Content-Type: application/json');
        try {

            $daoRpt = new daoUbigeo($this->DB);
            $coddep = isset($_REQUEST['coddep']) ? $_REQUEST['coddep'] : 0;
            $codpro = isset($_REQUEST['codpro']) ? $_REQUEST['codpro'] : 0;
            $coddep = str_pad($coddep, 2, "0", STR_PAD_LEFT);
            $codpro = str_pad($codpro, 2, "0", STR_PAD_LEFT);
            $tbldistrito = $daoRpt->select_all_distrito(["coddep" => $coddep, "codpro" => $codpro]);

            $data = [];
            $Total = 0.00;
            $data =  Session::get("cart");
            if (is_array($data) || is_object($data)) {
                foreach ($data as $item) {
                    $Total = $Total + ($item["neto"] * $item["quantity"]);
                }
            }
            $data = [];
            if (is_array($tbldistrito) && count($tbldistrito) > 0) {

                $data = list_dismount($tbldistrito);

                echo json_encode(["success" => true, "data" => $data, "total" => $Total, "msg" => ""], JSON_PRETTY_PRINT);
            } else {
                echo json_encode(["success" => false, "data" => $data, "total" => $Total, "msg" => "No se hay datos a listar"], JSON_PRETTY_PRINT);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select_all_distrito_precio()
    {
        header('Content-Type: application/json');
        try {

            $daoRpt = new daoUbigeo($this->DB);
            $coddep = isset($_REQUEST['coddep']) ? $_REQUEST['coddep'] : 0;
            $codpro = isset($_REQUEST['codpro']) ? $_REQUEST['codpro'] : 0;
            $coddis = isset($_REQUEST['coddis']) ? $_REQUEST['coddis'] : 0;
            $coddep = str_pad($coddep, 2, "0", STR_PAD_LEFT);
            $codpro = str_pad($codpro, 2, "0", STR_PAD_LEFT);
            $coddis = str_pad($coddis, 2, "0", STR_PAD_LEFT);

            $oDistrito = $daoRpt->select_all_distrito_precio(["coddep" => $coddep, "codpro" => $codpro, "coddis" => $coddis]);
            $envio = 0.00;
            $Total = 0.00;
            $data =  Session::get("cart");
            if (is_array($data) || is_object($data)) {
                foreach ($data as $item) {
                    $Total = $Total + ($item["neto"] * $item["quantity"]);
                }
            }
            if (is_object($oDistrito)  > 0) {
                $envio = $oDistrito->prec_envio;

                echo json_encode(["success" => true, "envio" => $envio, "total" => $Total, "msg" => ""], JSON_PRETTY_PRINT);
            } else {
                echo json_encode(["success" => false, "envio" => $envio, "total" => $Total, "msg" => "No se hay datos a listar"], JSON_PRETTY_PRINT);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function  consulta_ruc($ruc)
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
                        $url = "https://www.amkdelivery.com/Reniec/consultaSunatJSON.php?ruc=$ruc";
                        $header = [
                            'Accept: application/json',
                            'Content-Type: "application/json; charset=UTF-8'
                        ];
                        $response = Curl::sendGet($header, $url);
                        $result = [];
                        if (!isset($response) || $response["StatusCode"] == HTTP_CODE_NO_AUTORIZADO) {
                            echo json_encode(["success" => false, "data" => [], "msg" => "Acceso no autorizado"], JSON_PRETTY_PRINT);
                            return;
                        } else {
                            $result = json_decode($response["data"], true);
                            if (is_array($result)) {
                                echo json_encode(["success" => true, "data" => $result, "msg" => ""], JSON_PRETTY_PRINT);
                                return;
                            } else {
                                echo json_encode(["success" => false, "data" => [], "msg" => $result], JSON_PRETTY_PRINT);
                                return;
                            }
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
