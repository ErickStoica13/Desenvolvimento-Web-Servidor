<?php
require('model/excluirUsuarioModel.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
    <style>
        table {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php
    require('template/header.php');
    ?>
    <h1>Lista de Usuários</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require("./template/listarUsuarios.php");
            ?>
        </tbody>
    </table>

</body>

</html>