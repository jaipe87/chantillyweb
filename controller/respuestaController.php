<?php
class respuestaController
{
    private $tpl = null;
    private $DB = null;
    private $cia = 1;
    private $empresa = null;
    private $msgToken = "";

    public function __construct($arrParam)
    {
        ob_start();
        $this->DB = $arrParam["DB"];
        $this->tpl = $arrParam["tpl"];
        $this->empresa = EmpresaFactory::GetEmpresa(["cia" => $this->cia], $this->DB);
        $this->msgToken = "No ha iniciado Sesión o su Sesión ha expirado";
        Session::init();
        ob_get_clean();
    }
    public function Index()
    {
        try {
            $msgtoken = $this->msgToken;
            $titulo = "Resumen de Transacción";


            $this->tpl->assign("titulo", $titulo);

            $token = Session::get("access_token");
            if ($token) {
                $this->tpl->assign("token", $token);
            } else {
                Session::close();
                addCookie("msg", $msgtoken);
                header('Location: ' . RUTA_HTTP);

                die();
            }
            if ($this->empresa) {
                $this->tpl->assign("empresa", $this->empresa);
            }

           if (Session::has('data_transaction')) {
                $data_transaction = Session::get("data_transaction");
                Session::remove("data_transaction");

                if ($data_transaction) {

                    $this->tpl->assign("data_transaction", $data_transaction);
                } else {
                    addCookie("msg", "Sucedió un error por parte de nosotros !!, inténtalo nuevamente en unos minutos");
                    header('Location: ' . RUTA_HTTP);
                    die();
                }
            } else {
                addCookie("msg", "Sucedió un error por parte de nosotros !!, inténtalo nuevamente en unos minutos");
                header('Location: ' . RUTA_HTTP);
                die();
            }


            $this->tpl->assign("HTTP_CODE_CREATE", HTTP_CODE_CREATE);
            $this->tpl->assign("HTTP_CODE_OK", HTTP_CODE_OK);
            $this->tpl->assign("HTTP_CODE_NO_AUTORIZADO", HTTP_CODE_NO_AUTORIZADO);
            $this->tpl->assign("HTTP_CODE_BAD_REQUEST", HTTP_CODE_BAD_REQUEST);
            $this->tpl->assign("HTTP_CODE_NOT_ACCEPTABLED", HTTP_CODE_NOT_ACCEPTABLED);
            $this->tpl->assign("HTTP_CODE_ERROR_INTERNO_SERVER", HTTP_CODE_ERROR_INTERNO_SERVER);
           

            if (hasCookie('msg')) {
                $msg = $_COOKIE["msg"];
                removeCookie("msg");
                $this->tpl->assign("msg", $msg);
            }


            $this->tpl->display("respuesta.tpl");
        } catch (Exception $e) {
            Session::close();
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }
}
