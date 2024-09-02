<!--Este archivo se llama en AuthFactory pero por el momento está conectado-->
<?php
date_default_timezone_set('America/Lima');
include_once 'autoload.php';

use Firebase\JWT\JWT;

class Auth
{
    private $encrypt = ['RS256'];
    private $aud = null;

    public function SignIn($data)
    {
        if (empty($data)) {
            throw new Exception("Fallo autenticación");
        }

        $time = time();
        $expire = __EXPIRES_IN__;

        $payload = null;
    
        $issuer_claim = $_SERVER['HTTP_HOST'];
        $audience_claim = $this->Aud();
        $issuedat_claim = $time;
        $notbefore_claim = $issuedat_claim + 10;
        $expire_claim = $issuedat_claim + $expire;
        $payload = [
            "iss" => $issuer_claim,
            "aud" => $audience_claim,
            "iat" => $issuedat_claim,
            "nbf" => $notbefore_claim,
            "exp" => $expire_claim,
            "data" => $data
        ];

        return JWT::encode($payload,GetPrivateKey(), 'RS256');
    }

    public function CheckTokenAud($token)
    {
        if (empty($token)) {
            throw new Exception("No esta autenticado");
        }
        JWT::$leeway = 60;
        $decode = JWT::decode(
            $token,
            GetPublicKey(),
            $this->encrypt
        );

        if ($decode->aud !== $this->Aud()) {
            throw new Exception("No esta autenticado");
        }
        return true;
    }

    public function Decode($token)
    {
        $this->CheckTokenAud($token);
        JWT::$leeway = 60;
        return JWT::decode(
            $token,
            GetPublicKey(),
            $this->encrypt
        )->data;
    }

    private function Aud()
    {
        $waud = "";
        $waud = @$_SERVER['HTTP_USER_AGENT'];
        $waud .= gethostname();
        return sha1($waud);
    }
}
