<?php

// namespace controller\pInicialController;

class cadastroController
{
    public function __construct()
    {
        require "vendor/autoload.php";
    }

    public function cadastroModel()
    {
        session_start();
        require 'model/cadastroModel.php';
    }

    public function cadastroAdmModel()
    {
        session_start();
        require 'model/cadastroAdmModel.php';
    }
}
