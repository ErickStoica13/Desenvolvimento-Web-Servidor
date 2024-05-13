<?php
require("/xampp/htdocs/configure/dataBase.php");

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$cep = $_POST['cep'] ?? '';
$rua = $_POST['rua'] ?? '';
$bairro = $_POST['bairro'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$uf = $_POST['uf'] ?? '';
$numero = $_POST['numero'] ?? '';
$data = $_POST['data'] ?? '';
$senha = $_POST['senha'] ?? '';

if (empty($nome) || empty($email) || empty($cpf) || empty($cep) || empty($rua) || empty($bairro) || empty($cidade) || empty($uf) || empty($numero) || empty($data) || empty($senha)) {
    header('Location: index.php?acao=erro-campo');
    exit;
} elseif (!preg_match('/^[a-zA-Z ]+$/', $rua) || !preg_match('/^[a-zA-Z ]+$/', $bairro) || !preg_match('/^[a-zA-Z ]+$/', $cidade)) {
    header('Location: index.php?acao=erro-campo-texto');
    exit;
} elseif (!ctype_digit($cep) || strlen($cep) !== 8) {
    header('Location: index.php?acao=erro-cep');
    exit;
} elseif (!ctype_digit($cpf) || strlen($cpf) !== 11) {
    header('Location: index.php?acao=erro-cpf');
    exit;
} elseif (!ctype_digit($numero)) {
    header('Location: index.php?acao=erro-campo');
    exit;
} elseif (strlen($senha) < 8) {
    header('Location: index.php?acao=erro-senha');
    exit;
} else {

    function calcularIdade($data_nascimento)
    {
        $agora = new DateTime();
        $nascimento = new DateTime($data_nascimento);
        $idade = $agora->diff($nascimento);
        return $idade->y;
    }

    if (calcularIdade($data) < 18) {
        header('Location: index.php?acao=idade-insuficiente');
        exit;
    }
    $novo_usuario = [
        'nome' => $nome,
        'email' => $email,
        'cpf' => $cpf,
        'cep' => $cep,
        'rua' => $rua,
        'bairro' => $bairro,
        'cidade' => $cidade,
        'uf' => $uf,
        'numero' => $numero,
        'data' => $data,
        'senha' => $senha,
        'admin' => true,
        //unica diferença do cadastro comum, desculpa eu não deveria repetir código :> kkkkkkk
    ];
    print_r($novo_usuario);
    die;
    $db->query("INSERT INTO usuarios (nome, email, cpf, cep, rua, bairro, cidade, uf, numero, data, senha, admin) 
    VALUES ('$novo_usuario[nome]', '$novo_usuario[email]', '$novo_usuario[cpf]', '$novo_usuario[cep]', '$novo_usuario[rua]', '$novo_usuario[bairro]', '$novo_usuario[cidade]', '$novo_usuario[uf]', '$novo_usuario[numero]', '$novo_usuario[data]', '$novo_usuario[senha]', '$novo_usuario[admin]')");
}
