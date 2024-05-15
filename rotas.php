<?php

require_once('./controller/pInicialController.php');
require_once('./controller/loginController.php');
require_once('./controller/cadastroController.php');
require_once('./controller/compraController.php');
require_once('./controller/livrosController.php');

use Pecee\SimpleRouter\SimpleRouter as Router;

// index
Router::get('/', "pInicialController@viewIndex");

// Produtos
Router::get('/produtos', "pInicialController@produtos");
Router::get('/carrinho', "pInicialController@carrinho");
Router::post('/carrinho', "pInicialController@carrinho");
Router::get('/inserirLivro', "pInicialController@inserirLivro");
Router::post('/finalizarCompra', "compraController@finalizarcompraModel");
Router::post('/salvarLivro', "livrosController@livrosSalvar");

//Login Cadastro
Router::get('/login', "pInicialController@login");
Router::get('/cadastroAdmin', "pInicialController@cadastroAdmin");
Router::get('/cadastro', "pInicialController@cadastro");
Router::all('/verificarlogin', "loginController@verificaLogin");
Router::post('/cadastrar', "cadastroController@cadastroModel");
Router::post('/cadastrarAdm', "cadastroController@cadastroAdmModel");

// Usuario
Router::get('/perfil', "pInicialController@perfil");
Router::post('/perfil', "pInicialController@perfil");
Router::get('/usuarios', "pInicialController@usuarios");
Router::post('/usuarios', "pInicialController@usuarios");

Router::all('erro.php', "pInicialController@erro");

Router::start();
