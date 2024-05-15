<?php
// session_start();
require("/xampp/htdocs/configure/dataBase.php");

// Verifica se o usuário já está logado
if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    header('Location: erro.php?acao=ja-logado');
    exit;
}

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if (empty($email) || empty($senha)) {
    header('Location: erro.php?acao=campos-vazios');
    exit;
}

// Lendo o Base
$result = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

$encontrado = false;
$adminLogado = false;
if ($result->num_rows > 0) {
    $usuario = $result->fetch_array();
    $encontrado = true;
    $adminLogado = $usuario['admin'] == 1 ? true : false;
}

if ($encontrado) {
    $_SESSION['logado'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['admin'] = $adminLogado; // armazena o status de administrador na sessão
    header('Location: erro.php?acao=logado');
    exit;
} else {
    header('Location: erro.php?acao=login-invalido');
    exit;
}
