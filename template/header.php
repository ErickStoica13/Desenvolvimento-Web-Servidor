<head>
    <title>E-commerce</title>
    <link rel="stylesheet" type="text/css" href="CSS/paginaInicial.css">
</head>

<body>
    <header>
        <nav>
            <ul class="menu">
                <li><a href="/" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'inicio' ? 'active' : ''; ?>">Início</a></li>
                <li><a href="/produtos" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'produtos' ? 'active' : ''; ?>">Produtos</a></li>
                <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] === true && isset($_SESSION['admin']) && $_SESSION['admin'] === true) : ?>
                    <li><a href="/inserirLivro" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'inserirLivro' ? 'active' : ''; ?>">Inserir Livro</a></li>
                    <li><a href="/usuarios" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'usuarios' ? 'active' : ''; ?>">Usuários</a></li>
                    <li><a href="/cadastroAdmin" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'cadastroAdmin' ? 'active' : ''; ?>">Cadastrar Adm</a></li>
                <?php endif; ?>
                <li><a href="/cadastro" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'cadastro' ? 'active' : ''; ?>">Cadastro</a></li>
                <?php if (!(isset($_SESSION['logado']) && $_SESSION['logado'] === true)) : ?>
                    <li><a href="/login" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'login' ? 'active' : ''; ?>">Login</a></li>
                <?php endif; ?>
                <?php if ((isset($_SESSION['logado']) && $_SESSION['logado'] === true)) : ?>
                    <li><a href="/carrinho" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'carrinho' ? 'active' : ''; ?>">Carrinho</a></li>
                    <li><a href="/perfil" class="<?php echo isset($_GET['page']) && $_GET['page'] === 'perfil' ? 'active' : ''; ?>">Perfil</a></li>
                <?php endif; ?>
                <li class="login-container">
            </ul>
        </nav>
    </header>
</body>