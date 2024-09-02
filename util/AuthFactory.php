<?php


class AuthFactory
{
    public static function getInstance(){

        require_once './lib/jwt/auth.php';
        return new Auth;
    }
}