<?php
if (isset($_POST['remover']) && isset($_POST['index'])) {
    $index = $_POST['index'];
    if (isset($_SESSION['carrinho'][$index])) {
        unset($_SESSION['carrinho'][$index]);
    }
}

$listaItens = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : [];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" type="text/css" href="CSS/car.css">
    <style>
        #cartao-credito {
            width: 12%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php
    require('template/header.php');
    ?>
    <h1>Carrinho de Compras</h1>

    <div id="itens-carrinho">
        <h3>Produtos no Carrinho</h3>
        <?php
        if (!empty($listaItens)) {
            foreach ($listaItens as $index => $item) {
                echo '<div class="item-carrinho">';
                echo '<form method="post" action="">';
                echo '<input type="hidden" name="index" value="' . $index . '">';
                echo '<p><strong>Nome:</strong> ' . $item['nome'] . '</p>';
                echo '<p><strong>Preço:</strong> ' . $item['preco'] . '</p>';
                echo '<button type="submit" name="remover">Remover</button>';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo '<p>Nenhum produto no carrinho.</p>';
        }
        ?>
    </div>


    <div id="total-carrinho">

        <?php
        $subtotal = 0;
        if (!empty($listaItens)) {
            foreach ($listaItens as $item) {
                $subtotal += floatval(str_replace('R$', '', $item['preco']));
            }
        }

        $desconto = 0;
        $total = $subtotal - $desconto;

        echo '<p id="subtotal">Subtotal: R$ ' . number_format($subtotal, 2) . '</p>';
        echo '<p id="desconto">Desconto: R$ ' . number_format($desconto, 2) . '</p>';
        echo '<p id="total">Total: R$ ' . number_format($total, 2) . '</p>';
        ?>
    </div>

    <div id="finalizar">
        <form method="post" action="finalizarCompra">
            <h3>Cartão de Crédito</h3>
            <label for="numero_cartao">Número do Cartão:</label><br>
            <input type="text" id="numero_cartao" name="numero_cartao"><br><br>

            <label for="nome_impresso">Nome Impresso no Cartão:</label><br>
            <input type="text" id="nome_impresso" name="nome_impresso"><br><br>

            <label for="data_validade">Data de Validade:</label><br>
            <input type="date" id="data_validade" name="data_validade"><br><br>

            <label for="cvv">CVV:</label><br>
            <input type="text" id="cvv" name="cvv"><br><br>

            <label for="cpf_titular">CPF do Titular:</label><br>
            <input type="text" id="cpf_titular" name="cpf_titular"><br><br>

            <button type="submit" id="finalizar-compra" name="finalizar-compra">Confirmar Compra</button>
        </form>
    </div>

</body>

</html>