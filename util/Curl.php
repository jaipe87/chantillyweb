<?php

class Curl
{
    public static function sendPost($data = [], $header = [], $url, $format = 'url', $ssl = FALSE)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        if ($format = 'json') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        } else {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl);
        $resp = curl_exec($ch);

        $HTTPcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = [
            "StatusCode" => $HTTPcode,
            "data" => $resp
        ];

        curl_close($ch);

        return $response;
    }

    public static function sendPut($data = [], $header = [], $url, $format = 'url', $ssl = FALSE)
    {
        //url contra la que atacamos
        $ch = curl_init($url);
        //a true, obtendremos una respuesta de la url, en otro caso,
        //true si es correcto, false si no lo es
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //establecemos el verbo http que queremos utilizar para la petición
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        //enviamos el array data
        if ($format = 'json') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        } else {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl);

        $resp = curl_exec($ch);

        $HTTPcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = [
            "StatusCode" => $HTTPcode,
            "data" => $resp
        ];

        curl_close($ch);

        return $response;
    }

    public static function sendGet($header = [], $url, $ssl = FALSE)
    {

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $resp = curl_exec($ch);

        $HTTPcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = [
            "StatusCode" => $HTTPcode,
            "data" => $resp
        ];

        curl_close($ch);
        return $response;
    }

    public static function sendDelete($data = [], $header = [], $url, $format = 'url', $ssl = FALSE)
    {
        //url contra la que atacamos
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        //a true, obtendremos una respuesta de la url, en otro caso,
        //true si es correcto, false si no lo es
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //establecemos el verbo http que queremos utilizar para la petición
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        //enviamos el array data
        if ($format = 'json') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        } else {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl);
        //obtenemos la respuesta
        $resp = curl_exec($ch);

        $HTTPcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = [
            "StatusCode" => $HTTPcode,
            "data" => $resp
        ];

        curl_close($ch);

        return $response;
    }
}
