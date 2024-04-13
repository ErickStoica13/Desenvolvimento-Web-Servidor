<link rel="stylesheet" type="text/css" href="car.css">
<body>
        <h1>Carrinho de Compras</h1>

        <div id="itens-carrinho"></div>

        <div id="cupom-desconto">
            <input type="text" id="cupom-input" placeholder="Cupom de desconto">
            <button id="aplicar-cupom">Aplicar Cupom</button>
        </div>

        <div id="total-carrinho">
            <p id="subtotal">Subtotal: R$ 0.00</p>
            <p id="desconto">Desconto: R$ 0.00</p>
            <p id="total">Total: R$ 0.00</p>
        </div>

        <div id="finalizar">
            <button id="finalizar-compra">Confirmar Compra</button>
        </div>

        <script src="carrinhoCompras.js"></script>
</body>