<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" type="text/css" href="CSS/produto.css">
</head>

<body>
    <?php
    require('template/header.php');
    ?>
    <div id="carrinho-message">
        <?php
        // Exibe mensagem de sucesso ao adicionar produto ao carrinho
        if (isset($_SESSION['carrinho_message'])) {
            echo $_SESSION['carrinho_message'];
            unset($_SESSION['carrinho_message']); // Limpa a mensagem depois de exibi-la
        }
        ?>
    </div>
    <h1>Produtos</h1>

    <div id="produtos">
        <?php require('template/listaprodutos.php'); ?>
    </div>

</body>

</html>
<?php
include('template/footer.php');
?>