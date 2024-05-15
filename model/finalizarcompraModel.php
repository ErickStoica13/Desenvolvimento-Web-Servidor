<?php
session_start();

// verificando se o usuário está logado antes de finalizar a compra
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: erro.php?acao=erro-compra');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['finalizar-compra'])) {
    //verificando se todos os campos do formulário foram preenchidos
    if (
        isset($_POST['numero_cartao']) && !empty($_POST['numero_cartao']) &&
        isset($_POST['nome_impresso']) && !empty($_POST['nome_impresso']) &&
        isset($_POST['data_validade']) && !empty($_POST['data_validade']) &&
        isset($_POST['cvv']) && !empty($_POST['cvv']) &&
        isset($_POST['cpf_titular']) && !empty($_POST['cpf_titular'])
    ) {
        //validando o formato do CPF 
        if (strlen($_POST['cpf_titular']) !== 11 || !ctype_digit($_POST['cpf_titular'])) {
            header('Location: erro.php?acao=erro-cpf');
            exit;
        }

        // validando o numero do cartão
        if (strlen($_POST['numero_cartao']) !== 16 || !ctype_digit($_POST['numero_cartao'])) {
            header('Location: erro.php?acao=erro-campo-cartao');
            exit;
        }

        //validando o cvv 3 digitos apenas
        if (strlen($_POST['cvv']) !== 3 || !ctype_digit($_POST['cvv'])) {
            header('Location: erro.php?acao=erro-campo-cvv');
            exit;
        }

        //validação do nome no cartão
        if (!preg_match('/^[a-zA-Z\s]+$/', $_POST['nome_impresso'])) {
            header('Location: erro.php?acao=erro-campo-texto');
            exit;
        }

        // verificando a data da validade do cartão se a data de validade é maior que a data atual
        $dataValidade = $_POST['data_validade'];
        $dataAtual = date('Y-m-d');
        if ($dataValidade <= $dataAtual) {
            header('Location: erro.php?acao=erro-campo-data');
            exit;
        }

        //se todas as verificações passarem e houver itens no carrinho, a compra é finalizada
        if (!empty($_SESSION['carrinho'])) {
            unset($_SESSION['carrinho']);
            header('Location: erro.php?acao=compra-finalizada');
        } else {
            header('Location: erro.php?acao=erro-item');
            exit;
        }
    } else {
        // se algum campo estiver em branco,é redirecionada de volta à página anterior com uma mensagem de erro
        header('Location: erro.php?acao=erro-campo');
    }
} else {
    header('Location: erro.php?acao=erro-compra');
}
