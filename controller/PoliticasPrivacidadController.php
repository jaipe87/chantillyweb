<?php
class PoliticasPrivacidadController
{
    private $tpl = null;
    private $DB = null;
    private $cia = 1;
    private $empresa = null;
    public function __construct($arrParam)
    {
        ob_start();
        $this->DB = $arrParam["DB"];
        $this->tpl = $arrParam["tpl"];
        $this->empresa = EmpresaFactory::GetEmpresa(["cia"=>$this->cia],$this->DB);  
        Session::init();
        ob_get_clean();
    }
    public function Index()
    {
        try {
            $titulo = "Políticas de Privacidad";
            $this->tpl->assign("titulo", $titulo);
            
            $token = Session::get("access_token");
            if ($token) {
                $this->tpl->assign("token", $token);
            }
            if($this->empresa){
                $this->tpl->assign("empresa", $this->empresa);
            }
            $this->tpl->display("privacidad.tpl");
        } catch (Exception $e) {
            Session::close();
            header('Location: ' . RUTA_HTTP);
            die();
        }
    }
}
