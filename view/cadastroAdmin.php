<?php
require('template/header.php');
?>
<link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
<h1>Cadastro</h1>
<form id="cadastro-form" action="cadastrarAdm" method='POST'>
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf">
    </div>
    <div>
        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep">
    </div>
    <div>
        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua">
    </div>
    <div>
        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro">
    </div>
    <div>
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade">
    </div>
    <div>
        <label for="uf">UF:</label>
        <input type="text" id="uf" name="uf">
    </div>
    <div>
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero">
    </div>
    <div>
        <label for="data-nascimento">Data de Nascimento:</label>
        <input type="date" id="data-nascimento" name="data">
    </div>
    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
    </div>
    <button type="submit">Cadastrar</button>
</form>