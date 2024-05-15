<?php

// namespace controller\pInicialController;

class pInicialController
{
    public function __construct()
    {
        require "vendor/autoload.php";
    }

    public function viewIndex()
    {
        session_start();
        require 'view/paginaInicial.php';
    }

    public function produtos()
    {
        session_start();
        require 'view/produtos.php';
    }

    public function carrinho()
    {
        session_start();
        require 'view/carrinho.php';
    }

    public function login()
    {
        session_start();
        require 'view/login.php';
    }

    public function inserirLivro()
    {
        session_start();
        require 'view/inserirLivro.php';
    }

    public function perfil()
    {
        session_start();
        require 'view/perfil.php';
    }

    public function usuarios()
    {
        session_start();
        require 'view/usuarios.php';
    }

    public function cadastroAdmin()
    {
        session_start();
        require 'view/cadastroAdmin.php';
    }

    public function cadastro()
    {
        session_start();
        require 'view/cadastro.php';
    }

    public function erro()
    {
        session_start();
        require 'view/erro.php';
    }
}
