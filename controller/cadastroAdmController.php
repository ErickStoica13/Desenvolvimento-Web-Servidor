<?php

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

   $dados_json = file_exists('dados/dados.json') ? file_get_contents('dados/dados.json') : '[]';
   $usuarios = json_decode($dados_json, true);

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

   $usuarios[] = $novo_usuario;

   $arquivo = fopen('dados/dados.json', 'w');
   fwrite($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT));
   fclose($arquivo);
}
?>