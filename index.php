

<!DOCTYPE html>
<?php
  include('template/header.php');
?>

<?php
// Seção PHP para processar ações e exibir mensagens
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'index';
$mensagem = '';

try {
    if ($acao == 'erro-campo') {
        $mensagem = 'Preencha todos os campos!';
        require('view/cadastro.php');
    } else if ($acao == 'erro-campo-texto') {
        $mensagem = 'Prencha os campos apenas com texto!';
    }else if ($acao == 'erro-senha') {
        $mensagem = 'A senha deve conter mais de 8 digitos!';
    }else if ($acao == 'erro-cep') {
        $mensagem = 'CEP invalido!';
    }else if ($acao == 'erro-cpf') {
        $mensagem = 'CPF inválido!, Por Favor Informar o CPF Correto';
    }else if ($acao == 'idade-insuficiente') {
        $mensagem = 'Idade Insufuciaente';
    }else if ($acao == 'login-invalido') {
        $mensagem = 'Email ou senha inválidos!';
    } else if ($acao == 'login-requerido') {
        $mensagem = 'É necessário fazer login para acessar essa página!';
    } else if ($acao == 'campos-vazios') {
        $mensagem = 'Por favor, preencha todos os campos antes de enviar!';
    } else if ($acao == 'atualizarDados') {
        $mensagem = 'Dados atualizados com sucesso!';
    } else if ($acao == 'cadastrar') {
        $mensagem = 'Usuário cadastrado com sucesso!';
    } else if ($acao == 'logado') {
        $mensagem = 'Login realizado com sucesso!';
    }else if ($acao == 'cadastrarAdm') {
        $mensagem = 'Novo Administrador Cadastrodo Com Sucesso!';
    }
} catch (Exception $e) {
    $mensagem = 'Ocorreu um erro ao processar sua solicitação.';
}

// exibindo mensagem como um alert
if (!empty($mensagem)) {
    echo '<script>alert("' . $mensagem . '"); window.history.back();</script>';
}
?>

<body>
  <?php
     if ($acao == 'cadastrar') {
        require('controller/feedbackStore.php');
    } else if ($acao == 'logar') {
        require('controller/verificalogin.php');
    } else if ($acao == 'cadastrarAdm') {
        require('controller/cadastroAdmController.php');
    } else {
        require('controller/pInicialController.php');
    }
  ?>
</body>

<?php
//  include('template/footer.php');
?>
</html>