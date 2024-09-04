<?php
require_once './models/dto/Usuario.php';

class daoUsuario
{
    private $link;

    public function __construct($DB)
    {
        $this->link = $DB->db;
    }

    public function LoginIn($Param)
    {
        $conn = $this->link;
        $oUsuario = new Usuario();
        $lista = [];
        $email = $Param["email"];
        $pwd = $Param["pwd"];

        $sql = "SELECT   clientes_users.id_usuario, clientes_users.email, clientes_users.tipdoc_usuario, clientes_users.nrodoc_usuario,tg_tipdoc.desabr desdoc,
                         clientes_users.nom_usuario, clientes_users.ape_usuario,
                         clientes_users.direc_usuario, clientes_users.cel_usuario
                       FROM clientes_users INNER JOIN tg_tipdoc on tg_tipdoc.cod= clientes_users.tipdoc_usuario 
                       WHERE  email='$email' AND pwd=MD5('$pwd') AND LENGTH(TRIM(pwd))>0 AND  clientes_users.id_estado=0; ";

        $rs = $conn->execute($sql);

        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows()[0];

            $oUsuario->id_usuario = $lista['id_usuario'];
            $oUsuario->email = $lista['email'];
            $oUsuario->nom_usuario = $lista['nom_usuario'];
            $oUsuario->ape_usuario = $lista['ape_usuario'];
            $oUsuario->nrodoc_usuario = $lista['nrodoc_usuario'];
            $oUsuario->tipdoc_usuario = $lista['tipdoc_usuario'];
            $oUsuario->nom_doc = $lista['desdoc'];
            $oUsuario->cel_usuario = $lista['cel_usuario'];
            $oUsuario->direc_usuario = $lista['direc_usuario'];


            return $oUsuario;
        } else {
            return [];
        }
    }


    public function GetUsuario($Param)
    {
        $conn = $this->link;
        $oUsuario = new Usuario();
        $lista = [];
        $id_usuario = $Param["id_usuario"];
        $sql = "SELECT  clientes_users.id_usuario, clientes_users.email, clientes_users.tipdoc_usuario, clientes_users.nrodoc_usuario,tg_tipdoc.desabr desdoc,
               clientes_users.nom_usuario, clientes_users.ape_usuario,clientes_users.id_estado,
               clientes_users.direc_usuario, clientes_users.cel_usuario,clientes_users.created_at,clientes_users.verified_checkout,clientes_users.id_google,clientes_users.verifiedEmail
               FROM clientes_users INNER JOIN tg_tipdoc on tg_tipdoc.cod= clientes_users.tipdoc_usuario 
               WHERE  clientes_users.id_usuario='$id_usuario'  AND  clientes_users.id_estado=0; ";
        $rs = $conn->execute($sql);
       
        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows()[0];

            $oUsuario->id_usuario = $lista['id_usuario'];
            $oUsuario->email = $lista['email'];
            $oUsuario->nom_usuario = $lista['nom_usuario'];
            $oUsuario->ape_usuario = $lista['ape_usuario'];
            $oUsuario->nrodoc_usuario = $lista['nrodoc_usuario'];
            $oUsuario->tipdoc_usuario = $lista['tipdoc_usuario'];
            $oUsuario->nom_doc = $lista['desdoc'];
            $oUsuario->cel_usuario = $lista['cel_usuario'];
            $oUsuario->direc_usuario = $lista['direc_usuario'];
            $oUsuario->created_at = $lista['created_at'];
            $oUsuario->verified_checkout = $lista['verified_checkout'];
            $oUsuario->id_google = $lista['id_google'];
            $oUsuario->verifiedEmail = $lista['verifiedEmail'];
            $oUsuario->id_estado = $lista['id_estado'];
            return $oUsuario;
        } else {
            return [];
        }
    }
    public function GetUsuario_email($Param)
    {
        $conn = $this->link;
        $oUsuario = new Usuario();
        $lista = [];


        $email = $Param["email"];

        $sql = "SELECT  clientes_users.id_usuario, clientes_users.email, clientes_users.tipdoc_usuario, clientes_users.nrodoc_usuario,tg_tipdoc.desabr desdoc,
        clientes_users.nom_usuario, clientes_users.ape_usuario,clientes_users.id_estado,
        clientes_users.direc_usuario, clientes_users.cel_usuario, clientes_users.created_at,clientes_users.verified_checkout,clientes_users.id_google,clientes_users.verifiedEmail
        FROM clientes_users INNER JOIN tg_tipdoc on tg_tipdoc.cod= clientes_users.tipdoc_usuario 
        WHERE  clientes_users.email='$email'  AND  clientes_users.id_estado=0; ";



        $rs = $conn->execute($sql);

        $recordCount = $rs->recordCount();
        if ($recordCount > 0) {
            $lista = $rs->GetRows()[0];

            $oUsuario->id_usuario = $lista['id_usuario'];
            $oUsuario->email = $lista['email'];
            $oUsuario->nom_usuario = $lista['nom_usuario'];
            $oUsuario->ape_usuario = $lista['ape_usuario'];
            $oUsuario->nrodoc_usuario = $lista['nrodoc_usuario'];
            $oUsuario->tipdoc_usuario = $lista['tipdoc_usuario'];
            $oUsuario->nom_doc = $lista['desdoc'];
            $oUsuario->cel_usuario = $lista['cel_usuario'];
            $oUsuario->direc_usuario = $lista['direc_usuario'];
            $oUsuario->created_at = $lista['created_at'];
            $oUsuario->verified_checkout = $lista['verified_checkout'];
            $oUsuario->id_google = $lista['id_google'];
            $oUsuario->verifiedEmail = $lista['verifiedEmail'];
            $oUsuario->id_estado = $lista['id_estado'];
            return $oUsuario;
        } else {
            return [];
        }
    }


    public function RegistraUsuario($Param)
    {
        $conn = $this->link;

        $modo = $Param["modo"];
        $oUsuario = new Usuario();

     

        if (is_numeric($Param["id_usuario"])) {
            $oUsuario->id_usuario = $Param["id_usuario"];
        } else {
            $sql = "SELECT IFNULL(MAX(id_usuario),0) + 1 cod FROM clientes_users";
            $rs = $conn->Execute($sql);
            if ($rs && $rs->recordCount() == 1) {
                $oUsuario->id_usuario = $rs->GetRows()[0]["cod"];
            } else {
                $oUsuario->id_usuario = 0;
            }
        }


        $oUsuario->nrodoc_usuario = $Param["nrodoc"];
        $sql = "CALL pa_valida_nrodoc('$oUsuario->id_usuario','$oUsuario->nrodoc_usuario',@resultado);";
        $conn->execute($sql);
        $sql = "SELECT @resultado cod;";
        $rs = $conn->Execute($sql);
        $wexiste = $rs->GetRows()[0]["cod"];

        if ($wexiste == 0) {
            return 3;
        }

        $oUsuario->email = $Param["email"];
        $sql = "CALL pa_valida_correo('$oUsuario->id_usuario','$oUsuario->email',@resultado);";
        $conn->execute($sql);
        $sql = "SELECT @resultado cod;";
        $rs = $conn->Execute($sql);
        $wexiste = $rs->GetRows()[0]["cod"];

        if ($wexiste == 0) {
            return 2;
        }



        $oUsuario->email = $Param["email"];
        $oUsuario->tipdoc_usuario = $Param["tipdoc"];
        $oUsuario->nrodoc_usuario = $Param["nrodoc"];
        $oUsuario->nom_usuario = $Param["nombres"];
        $oUsuario->ape_usuario = $Param["apellidos"];
        $oUsuario->direc_usuario = $Param["direccion"];
        $oUsuario->cel_usuario = $Param["celular"];
        $oUsuario->id_estado = $Param["id_estado"];
        $oUsuario->pwd = $Param["pwd1"];
        $oUsuario->id_google = $Param["id_google"];
        $oUsuario->verifiedEmail = $Param["verifiedEmail"];


        $conn->StartTrans();

        if ($modo == 0) {
            $sql = "INSERT INTO clientes_users ( id_usuario, email, pwd, tipdoc_usuario, nrodoc_usuario, nom_usuario, ape_usuario, direc_usuario, cel_usuario, id_estado,id_google,verifiedEmail)
            VALUES ('$oUsuario->id_usuario','$oUsuario->email',MD5('$oUsuario->pwd'),'$oUsuario->tipdoc_usuario','$oUsuario->nrodoc_usuario','$oUsuario->nom_usuario', '$oUsuario->ape_usuario', '$oUsuario->direc_usuario', '$oUsuario->cel_usuario', '$oUsuario->id_estado','$oUsuario->id_google','$oUsuario->verifiedEmail');";
        } else {
            if (strlen(trim($oUsuario->pwd)) > 0) {
                $sql = "UPDATE clientes_users SET tipdoc_usuario='$oUsuario->tipdoc_usuario',nrodoc_usuario='$oUsuario->nrodoc_usuario',nom_usuario='$oUsuario->nom_usuario',
                        ape_usuario='$oUsuario->ape_usuario',direc_usuario='$oUsuario->direc_usuario',cel_usuario='$oUsuario->cel_usuario',pwd=MD5('$oUsuario->pwd'),email='$oUsuario->email' WHERE id_usuario='$oUsuario->id_usuario';";
            } else {
                $sql = "UPDATE clientes_users SET  tipdoc_usuario='$oUsuario->tipdoc_usuario',nrodoc_usuario='$oUsuario->nrodoc_usuario',nom_usuario='$oUsuario->nom_usuario',
                        ape_usuario='$oUsuario->ape_usuario',cel_usuario='$oUsuario->cel_usuario',email='$oUsuario->email',direc_usuario='$oUsuario->direc_usuario' WHERE id_usuario='$oUsuario->id_usuario'";
            }
        }


        $ind = $conn->Execute($sql);

        if (!$ind) {

            $conn->FailTrans();
            return 0;
        }
        $conn->CompleteTrans();
        return $oUsuario;
    }


    public function Actualiza_datos_checkout($Param)
    {
        $conn = $this->link;
       

        $oUsuario = new Usuario();

        $oUsuario->id_usuario = $Param["id_usuario"];

        $oUsuario->nrodoc_usuario = $Param["nrodoc"];
        $sql = "CALL pa_valida_nrodoc('$oUsuario->id_usuario','$oUsuario->nrodoc_usuario',@resultado);";
        $conn->execute($sql);
        $sql = "SELECT @resultado cod;";
        $rs = $conn->Execute($sql);
        $wexiste = $rs->GetRows()[0]["cod"];

        if ($wexiste == 0) {
            return 3;
        }

        $oUsuario->tipdoc_usuario = $Param["tipdoc"];
        $oUsuario->nrodoc_usuario = $Param["nrodoc"];
        $oUsuario->nom_usuario = $Param["nombres"];
        $oUsuario->ape_usuario = $Param["apellidos"];
        $oUsuario->cel_usuario = $Param["celular"];
        $oUsuario->direc_usuario = $Param["direccion"];
        $oUsuario->verified_checkout = $Param["verified_checkout"];
         $conn->StartTrans();
        $sql = "UPDATE clientes_users SET  tipdoc_usuario='$oUsuario->tipdoc_usuario',nrodoc_usuario='$oUsuario->nrodoc_usuario',nom_usuario='$oUsuario->nom_usuario',
                ape_usuario='$oUsuario->ape_usuario',cel_usuario='$oUsuario->cel_usuario',verified_checkout='$oUsuario->verified_checkout',direc_usuario='$oUsuario->direc_usuario' WHERE id_usuario='$oUsuario->id_usuario'";

        $ind = $conn->Execute($sql);
        if (!$ind) {
            $conn->FailTrans();
            return 0;
        }
        $conn->CompleteTrans();
        return $oUsuario;
    }


    public function Actualiza_contrasenia($Param)
    {
        $conn = $this->link;
        $conn->StartTrans();

        $oUsuario = new Usuario();

        $oUsuario->id_usuario = $Param["id_usuario"];
        $oUsuario->pwd = $Param["pwd"];
        $sql = "UPDATE clientes_users SET pwd=MD5('$oUsuario->pwd') WHERE id_usuario=$oUsuario->id_usuario";
        $ind = $conn->Execute($sql);
        if (!$ind) {
            $conn->FailTrans();
            return 0;
        }
        $conn->CompleteTrans();
        return $oUsuario;
    }
}
