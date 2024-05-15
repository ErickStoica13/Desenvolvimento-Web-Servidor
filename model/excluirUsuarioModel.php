<?php
require("/xampp/htdocs/configure/dataBase.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluirUsuario'])) {
    $index = $_POST['excluirUsuario'];
    // excluindo o usuário do arquivo dados.json
    $excluido = excluirUsuario($index);
    if ($excluido) {
        echo '<script>alert("Usuário excluído com sucesso!");</script>';
    } else {
        echo '<script>alert("Falha ao excluir o usuário.");</script>';
    }
}

function excluirUsuario($index)
{
    require("/xampp/htdocs/configure/dataBase.php");

    $delete = $db->query("SELECT * FROM usuarios WHERE id = '$index'");
    if ($delete->num_rows > 0) {
        $db->query("DELETE FROM usuarios WHERE id = '$index'");
        return true;
    } else {
        return false;
    }
}
