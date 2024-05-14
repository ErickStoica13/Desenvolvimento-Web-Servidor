<?php
// Seção PHP para processar ações e exibir mensagens
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'index';

$mensagem = '';
try {
    if ($acao == 'erro-campo') {
        $mensagem = 'Preencha todos os campos!';
    } else if ($acao == 'erro-campo-texto') {
        $mensagem = 'Prencha os campos apenas com texto!';
    } else if ($acao == 'erro-senha') {
        $mensagem = 'A senha deve conter mais de 8 digitos!';
    } else if ($acao == 'erro-cep') {
        $mensagem = 'CEP invalido!';
    } else if ($acao == 'erro-cpf') {
        $mensagem = 'CPF inválido!, Por Favor Informar o CPF Correto';
    } else if ($acao == 'idade-insuficiente') {
        $mensagem = 'Idade Insufuciaente';
    } else if ($acao == 'login-invalido') {
        $mensagem = 'Email ou senha inválidos!';
    } else if ($acao == 'login-requerido') {
        $mensagem = 'É necessário fazer login para acessar essa página!';
    } else if ($acao == 'campos-vazios') {
        $mensagem = 'Por favor, preencha todos os campos antes de enviar!';
    } else if ($acao == 'atualizarDados') {
        $mensagem = 'Dados atualizados com sucesso!';
    } else if ($acao == 'cadastrar_livro_erro') {
        $mensagem = 'Falha ao cadastrar!';
    } else if ($acao == 'cadastrar_livro') {
        $mensagem = 'Livro cadastrado com sucesso!';
    } else if ($acao == 'cadastrar') {
        $mensagem = 'Usuário cadastrado com sucesso!';
    } else if ($acao == 'logado') {
        $mensagem = 'Login realizado com sucesso!';
    } else if ($acao == 'compra-finalizada') {
        $mensagem = 'Compra realizada com Sucesso!';
    } else if ($acao == 'erro-compra') {
        $mensagem = 'Você precisa estar logado para finalizar a Compra!';
    } else if ($acao == 'erro-campo-cartao') {
        $mensagem = 'Cartão Inválido!';
    } else if ($acao == 'erro-campo-cvv') {
        $mensagem = 'CVV Inválido!';
    } else if ($acao == 'erro-campo-data') {
        $mensagem = 'Data Inválido!';
    } else if ($acao == 'erro-item') {
        $mensagem = 'Não há nenhum item no carrinho!';
    } else if ($acao == 'ja-logado') {
        $mensagem = 'Você já está logado!';
    } else if ($acao == 'cadastrarAdm') {
        $mensagem = 'Novo admin cadastrado com sucesso!';
    }
} catch (Exception $e) {
    $mensagem = 'Ocorreu um erro ao processar sua solicitação.';
}

if (!empty($mensagem)) {
    echo '<script>alert("' . $mensagem . '"); window.history.back();</script>';
}
