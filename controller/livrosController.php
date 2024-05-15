<?php

// namespace controller\pInicialController;

class livrosController
{
    public function __construct()
    {
        require "vendor/autoload.php";
    }

    public function livrosSalvar()
    {
        session_start();
        require 'model/livrosSalvarModel.php';


        $livro = [
            'nome' => $_POST['nome'] ?? '',
            // 'ano' => $_POST['ano'] ?? '',
            // 'autor' => $_POST['autor'] ?? '',
            // 'editora' => $_POST['editora'] ?? '',
            // 'quantidade' => $_POST['quantidade'] ?? '',
            'imagem' => $_POST['imagem'] ?? '',
        ];

        $livros = new livrosSalvarModel();
        $response = $livros->insertLivro($livro);

        if ($response) {
            header('Location: erro.php?acao=cadastrar_livro');
            exit;
        } else {
            header('Location: erro.php?acao=cadastrar_livro_erro');
            exit;
        }
    }
}
