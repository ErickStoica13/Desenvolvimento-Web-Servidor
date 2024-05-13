<?php
try {
    require("/xampp/htdocs/configure/dataBase.php");
    $dados_json = file_exists('/xampp/htdocs/dados/dados.json') ? file_get_contents('/xampp/htdocs/dados/dados.json') : '[]';
    $usuarios = json_decode($dados_json, true);
    foreach ($usuarios as $key => $value) {
        $db->query("INSERT INTO usuarios (nome, email, cpf, cep, rua, bairro, cidade, uf, numero, data, senha, admin) 
        VALUES ('$value[nome]', '$value[email]', '$value[cpf]', '$value[cep]', '$value[rua]', '$value[bairro]', '$value[cidade]', '$value[uf]', '$value[numero]', '$value[data]', '$value[senha]', '$value[admin]')");
        echo $db->insert_id . ' ID';
    }
} catch (Exception $e) {
    throw new Exception('ERRO - MYSQL: ' . $e->getMessage());
}
