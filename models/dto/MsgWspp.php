<?php 

class MsgWspp {
    private $idMensaje;
    private $mensajeWeb;

    public function __construct($idMensaje, $mensajeWeb) {
        $this->idMensaje = $idMensaje;
        $this->mensajeWeb = $mensajeWeb;
    }

    public function getIdMensaje() {
        return $this->idMensaje;
    }

    public function setIdMensaje($idMensaje) {
        $this->idMensaje = $idMensaje;
    }

    public function getMensajeWeb() {
        return $this->mensajeWeb;
    }

    public function setMensajeWeb($mensajeWeb) {
        $this->mensajeWeb = $mensajeWeb;
    }
}
