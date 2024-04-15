<?php
session_start();

// Verifica se o usuário já está logado
if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    header('Location: index.php?acao=ja-logado');
    exit;
}

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if (empty($email) || empty($senha)) {
    header('Location: index.php?acao=campos-vazios');
    exit;
}

// Lendo o arquivo JSON
$dados_json = file_get_contents('dados/dados.json');
$dados = json_decode($dados_json, true);

$encontrado = false;
$adminLogado = false;
foreach ($dados as $usuario) {
    if ($usuario['email'] === $email && $usuario['senha'] === $senha) {
        $encontrado = true;
        // Verificando se o usuário é um administrador
        $adminLogado = $usuario['admin'] ?? false;
        break;
    }
}

if ($encontrado) {
    $_SESSION['logado'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['admin'] = $adminLogado; // armazena o status de administrador na sessão
    header('Location: index.php?acao=logado');
    exit;
} else {
    header('Location: index.php?acao=login-invalido');
    exit;
}
?>
