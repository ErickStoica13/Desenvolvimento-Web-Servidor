<?php
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

function excluirUsuario($index) {
    //lendo o arquivo JSON
    $dados_json = file_get_contents('dados/dados.json');
    $usuarios = json_decode($dados_json, true);

    //verifica se o índice existe antes de tentar excluir
    if (isset($usuarios[$index])) {
        
        unset($usuarios[$index]);

        //reindexar o array para garantir que os índices sejam sequenciais
        $usuarios = array_values($usuarios);

        //salvando de volta no arquivo JSON
        file_put_contents('dados/dados.json', json_encode($usuarios, JSON_PRETTY_PRINT));

        return true;
    } else {
        return false;
    }
}
?>