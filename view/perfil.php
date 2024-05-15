<?php
require('model/edicaoLogoutModel.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="CSS/cadastro.css">
</head>

<body>
    <?php
    require('template/header.php');
    ?>
    <h1>Perfil do Usuário</h1>
    <form action="" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $usuario_logado['nome']; ?>">
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo $usuario_logado['email']; ?>">
        </div>
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="<?php echo $usuario_logado['cpf']; ?>">
        </div>
        <div>
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" value="<?php echo $usuario_logado['cep']; ?>">
        </div>
        <div>
            <label for="rua">Rua:</label>
            <input type="text" id="rua" name="rua" value="<?php echo $usuario_logado['rua']; ?>">
        </div>
        <div>
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" value="<?php echo $usuario_logado['bairro']; ?>">
        </div>
        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="<?php echo $usuario_logado['cidade']; ?>">
        </div>
        <div>
            <label for="uf">UF:</label>
            <input type="text" id="uf" name="uf" value="<?php echo $usuario_logado['uf']; ?>">
        </div>
        <div>
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" value="<?php echo $usuario_logado['numero']; ?>">
        </div>
        <div>
            <label for="data">Data de Nascimento:</label>
            <input type="date" id="data" name="data" value="<?php echo $usuario_logado['data']; ?>">
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="<?php echo $usuario_logado['senha']; ?>">
        </div>
        <button type="submit" name="atualizar">Atualizar Dados</button>

    </form>
    <form action="" method="post">
        <button type="submit" name="acao" value="logout">Logout</button>
    </form>



    </div>
</body>

</html>