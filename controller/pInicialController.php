<?php
 if (isset($_GET['page']) && $_GET['page'] === 'inicio') {
    include('htdocs/view/paginaInicial.php');
} elseif (isset($_GET['page']) && $_GET['page'] === 'cadastro') {
    include('view/cadastro.php');
} elseif (isset($_GET['page']) && $_GET['page'] === 'carrinho') {
    include('view/carrinho.php');
} elseif (isset($_GET['page']) && $_GET['page'] === 'produtos') {
    include('view/produtos.php');
} elseif (isset($_GET['page']) && $_GET['page'] === 'login') {
    include('view/login.php');
}elseif (isset($_GET['page']) && $_GET['page'] === 'inserirLivro') {
    include('view/inserirLivro.php');
}elseif (isset($_GET['page']) && $_GET['page'] === 'perfil') {
    include('view/perfil.php');
}elseif (isset($_GET['page']) && $_GET['page'] === 'usuarios') {
    include('view/usuarios.php');
}elseif (isset($_GET['page']) && $_GET['page'] === 'cadastroAdmin') {
    include('view/cadastroAdmin.php');
}else {
    include('view/paginaInicial.php');
}

