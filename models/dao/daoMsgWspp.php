<?php

class daoMsgWspp {

    private $link;

    public function __construct($DB) {
        $this->link = $DB->db;
    }

    public function saveMessage(MsgWspp $msgWspp) {
        $conn = $this->link;
        $sql = "INSERT INTO msg_wspp (mensaje) VALUES (:mensaje)";
        $stmt = $this->$conn->prepare($sql);
        $stmt->bindParam(':mensaje', $msgWspp->getMensajeWeb(), PDO::PARAM_STR);
        return $stmt->execute();
    }
}
