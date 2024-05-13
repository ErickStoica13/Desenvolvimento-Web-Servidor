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
            require("/xampp/htdocs/configure/dataBase.php");

            $result = $db->query("SELECT * FROM usuarios");

            if ($result->num_rows > 0) {
                $usuarios = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($usuarios as $key => $value) {
                    echo '<tr id="user_' . $value['id'] . '">';
                    echo '<td>' . $value['nome'] . '</td>';
                    echo '<td>' . $value['email'] . '</td>';
                    echo '<td class="center-content">';
                    echo '<form method="post">';
                    echo '<input type="hidden" name="excluirUsuario" value="' . $value['id'] . '">';
                    echo '<button type="submit" onclick="return confirm(\'Tem certeza que deseja excluir este usuário?\')">Excluir</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>

</body>

</html>