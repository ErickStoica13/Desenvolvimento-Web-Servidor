<?php
session_start();
?>

<head>
    <title>E-commerce</title>
    <link rel="stylesheet" type="text/css" href="CSS/paginaInicial.css">
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
                <li><a href="?page=paginaInicial" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'inicio' ? 'active' : ''; ?>">Início</a></li>
                <li><a href="?page=produtos" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'produtos' ? 'active' : ''; ?>">Produtos</a></li>
                <li><a href="?page=carrinho" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'carrinho' ? 'active' : ''; ?>">Carrinho</a></li>
                <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] === true && isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                    <li><a href="?page=inserirLivro" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'inserirLivro' ? 'active' : ''; ?>">Inserir Livro</a></li>
                    <li><a href="?page=usuarios" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'usuarios' ? 'active' : ''; ?>">Usuários</a></li>
                    <li><a href="?page=cadastroAdmin" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'cadastroAdmin' ? 'active' : ''; ?>">Cadastrar Adm</a></li>
                <?php endif; ?>
                <li><a href="?page=cadastro" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'cadastro' ? 'active' : ''; ?>">Cadastro</a></li>
                <li><a href="?page=login" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'login' ? 'active' : ''; ?>">Login</a></li>
                <li><a href="?page=perfil" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'perfil' ? 'active' : ''; ?>">Perfil</a></li>
                <li class="login-container">
            </ul>
        </nav>
    </header>
</body>