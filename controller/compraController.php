<?php

// namespace controller\pInicialController;

class compraController
{
    public function __construct()
    {
        require "vendor/autoload.php";
    }

    public function finalizarcompraModel()
    {
        session_start();
        require 'model/finalizarcompraModel.php';
    }
}
