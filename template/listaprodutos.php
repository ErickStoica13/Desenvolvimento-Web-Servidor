<?php
require("/xampp/htdocs/configure/dataBase.php");
$result = $db->query("SELECT * FROM livros");
//Lista de produtos em PHP
if ($result->num_rows > 0) {
    $produtos = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($produtos as $produto) {
        echo '<div class="produto">';
        echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">';
        echo '<h3>' . $produto['nome'] . '</h3>';
        echo '<p>' . $produto['preco'] . '</p>';
        echo '<form method="post" action="model/adiconarcarrinho.php">';
        echo '<input type="hidden" name="nome" value="' . $produto['nome'] . '">';
        echo '<input type="hidden" name="preco" value="' . $produto['preco'] . '">';
        echo '<button type="submit" name="comprar" class="btn-comprar">Comprar</button>';
        echo '</form>';
        echo '</div>';
    }
}
