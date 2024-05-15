<?php
require('template/header.php');
?>
<link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
<h1>Login</h1>
<form id="cadastro-form" action="verificarlogin" method='POST'>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
    </div>
    <button type="submit">Logar</button>
</form>