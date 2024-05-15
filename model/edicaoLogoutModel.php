<?php
//session_start();
require("/xampp/htdocs/configure/dataBase.php");

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: erro.php?acao=login-requerido');
    exit;
}

$email = $_SESSION['email'];
$result = $db->query("SELECT * FROM usuarios WHERE email = '$email'");
if ($result->num_rows > 0) {
    $usuario = $result->fetch_array();
    $usuario_logado = $usuario;
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

    $db->query("UPDATE usuarios SET 
        nome = '$usuario_logado[nome]', 
        email = '$usuario_logado[email]', 
        cpf = '$usuario_logado[cpf]', 
        cep = '$usuario_logado[cep]', 
        rua = '$usuario_logado[rua]', 
        bairro = '$usuario_logado[bairro]', 
        cidade = '$usuario_logado[cidade]', 
        uf = '$usuario_logado[uf]', 
        numero = '$usuario_logado[numero]', 
        data = '$usuario_logado[data]', 
        senha = '$usuario_logado[senha]', 
        admin = '$usuario_logado[admin]' 
    WHERE email = '$email'");

    //redirecionar para a mesma página após a atualização
    header('Location: erro.php?acao=atualizarDados');

    exit;
}

// Logout
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'logout') {
    //limpando a sessão
    $_SESSION = [];

    //invalidar o cookie de sessão
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    //finalizar a sessão
    session_destroy();

    header('Location: /');
    exit;
}
