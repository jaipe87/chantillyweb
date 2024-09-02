<?php
/**
 * Clase básica para adminsitrar sesiones
 */
class Session
{
    /**
     * Inicializa la sesión
     */
    public static function init()
    {
	    ini_set("session.cookie_lifetime","604800");
        ini_set("session.gc_maxlifetime","604800");
        session_start();

    }
    /**
     * Agrega un elemento a la sesión
     * @param string $key la llave del array de sesión
     * @param string $value el valor para el elemento de la sesión
     */
    public static function add($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    /**
     * Retorna un elemento a la sesión
     * @param string $key la llave del array de sesión
     * @return string el valor del array de sesión si tiene valor
     */
    public static function get($key)
    {
        return !empty($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    /**
     * Retorna todos los valores del array de sesión
     * @return el array de sesión completo
     */
    public static function getAll()
    {
        return $_SESSION;
    }
    /**
     * Remueve un elemento de la sesión
     * @param string $key la llave del array de sesión
     */
    public static function remove($key)
    {
        if(!empty($_SESSION[$key]))
            unset($_SESSION[$key]);
    }
    /**
     * Cierra la sesión eliminando los valores
     */
    public static function close()
    {
        $_SESSION = array();
        session_destroy();
    }

    /**
     * Retorna el estatus de la sesión
     * @return string el estatus de la sesión
     */
    public static function getStatus()
    {
        return session_status();
    }
/**
     * Retorna el estatus de la sesión
     * @return boolean si existe la sesion 
     */
    public static function has($key){

        if (isset($_SESSION[$key])) {
            return true;
        } else {
            return false;
        }

    }
}