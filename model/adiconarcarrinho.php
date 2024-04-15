<?php
session_start();
// Verifica se o formulário foi submetido e o botão "comprar" foi acionado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comprar'])) {
    // Verifica se a sessão do carrinho já existe, se não, cria um carrinho vazio
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Obtém os dados do produto do formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    // Adiciona o produto ao carrinho
    $item = ['nome' => $nome, 'preco' => $preco];
    $_SESSION['carrinho'][] = $item;

    // Exibe mensagem de sucesso ao adicionar produto ao carrinho
    $_SESSION['carrinho_message'] = 'Produto adicionado ao carrinho!';

    // Redireciona de volta para a página de produtos
    echo '<script>window.history.back();</script>';
    exit();
}
?>