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
