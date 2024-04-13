<?php
//session_start();


if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: index.php?acao=login-requerido');
    exit;
}

$dados_json = file_get_contents('dados/dados.json');
$usuarios = json_decode($dados_json, true);

$usuario_logado = null;
foreach ($usuarios as $usuario) {
    if ($usuario['email'] === $_SESSION['email']) {
        $usuario_logado = $usuario;
        break;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['atualizar'])) {
    //processando os dados do formulário de edição
    $usuario_logado['email'] = $_POST['email'];
    $usuario_logado['nome'] = $_POST['nome'];
    $usuario_logado['cpf'] = $_POST['cpf'];
    $usuario_logado['cep'] = $_POST['cep'];
    $usuario_logado['rua'] = $_POST['rua'];
    $usuario_logado['bairro'] = $_POST['bairro'];
    $usuario_logado['cidade'] = $_POST['cidade'];
    $usuario_logado['uf'] = $_POST['uf'];
    $usuario_logado['numero'] = $_POST['numero'];
    $usuario_logado['data'] = $_POST['data'];
    $usuario_logado['senha'] = $_POST['senha'];

    //atualizando os dados no arquivo JSON
    foreach ($usuarios as $chave => $usuario) {
        if ($usuario['email'] === $_SESSION['email']) {
            $usuarios[$chave] = $usuario_logado;
            break;
        }
    }
    
    //gravando os dados no json
    $arquivo = fopen('dados/dados.json', 'w');
    fwrite($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT));
    fclose($arquivo);

    //redirecionar para a mesma página após a atualização
    header('Location: index.php?acao=atualizarDados');
    
    exit;
}

// Logout
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'logout') {
    //limpando a sessão
    $_SESSION = array();

    //invalidar o cookie de sessão
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    //finalizar a sessão
    session_destroy();

    header('Location: index.php');
    exit;
}
?>