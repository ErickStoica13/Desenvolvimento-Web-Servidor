<?php
require('template/header.php');
?>
<link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
<h1>Cadastrar Novo Livro</h1>
<form id="cadastro-form" action="salvarLivro" method="POST">
    <div>
        <label for="nome">Nome do Livro:</label>
        <input type="text" id="nome" name="nome">
    </div>
    <div>
        <label for="ano">Ano de Publicação:</label>
        <input type="text" id="ano" name="ano">
    </div>
    <div>
        <label for="autor">Nome do Autor:</label>
        <input type="text" id="autor" name="autor">
    </div>
    <div>
        <label for="editora">Editora:</label>
        <input type="text" id="editora" name="editora">
    </div>
    <div>
        <label for="quantidade">Quantidade:</label>
        <input type="text" id="quantidade" name="quantidade">
    </div>
    <div>
        <label for="imagem">Imagem do Livro:</label>
        <input type="file" id="imagem" name="imagem">
    </div>
    <button type="submit">Adicionar</button>
</form>