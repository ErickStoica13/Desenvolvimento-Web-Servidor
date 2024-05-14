<?php
class livrosSalvarModel
{

    public function __construct()
    {
        require "vendor/autoload.php";
    }

    public function insertLivro($livro)
    {
        require("/xampp/htdocs/configure/dataBase.php");

        $db->query("INSERT INTO livros (nome, imagem, preco) VALUES ('$livro[nome]', '$livro[imagem]', '$livro[preco]')");
        $id = $db->insert_id;
        return !empty($id) ? true : false;
    }
}
