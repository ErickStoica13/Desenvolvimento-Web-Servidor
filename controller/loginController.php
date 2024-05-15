<?php

// namespace controller\pInicialController;

class loginController
{
    public function __construct()
    {
        require "vendor/autoload.php";
    }

    public function verificaLogin()
    {
        session_start();
        require 'model/verificaloginModel.php';
    }
}
