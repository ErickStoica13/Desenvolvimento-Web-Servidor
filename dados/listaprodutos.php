<?php
//Lista de produtos em PHP
$produtos = [
    ['imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4s6zzMkyX8zIbhgPfhIl6ZXL4qrv7uhGq0ykXbjrz5nOl4JKc_e2F34_LOBylKMn18Ag&usqp=CAU', 'nome' => 'A divina comédia - Dante Alighieri - Box com 3 livros', 'preco' => 'R$ 40,00'],
    ['imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0AFWNzChYl5flLU70hiAHgc6xG7qVvObIc-mnIkNha2eFRnRVbcpnucF7ubB5R2Kujcc&usqp=CAU', 'nome' => 'O Senhor dos Anéis - J.R.R. Tolkien - Box com 3 livros', 'preco' => 'R$ 119,00'],
    ['imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlf2hP3BVMaSY5-w_NMkWaZ_7cXOo6r-xI_g&usqp=CAU', 'nome' => '1984 - George Orwell', 'preco' => 'R$ 19,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/41mzPVlkxQL._AC_UY327_FMwebp_QL65_.jpg', 'nome' => 'HTML5 e CSS3: guia prático e visual -  Elizabeth Castro', 'preco' => 'R$ 109,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/81LgMmwDhwL._AC_UY327_FMwebp_QL65_.jpg', 'nome' => 'Meditações - Marco Aurélio', 'preco' => 'R$ 33,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/41fF6p0hQZL._SX330_BO1,204,203,200_.jpg', 'nome' => 'O livro dos cinco anéis - Musashi', 'preco' => 'R$ 38,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51Fe45NGwkL._AC_UY327_FMwebp_QL65_.jpg', 'nome' => 'A Arte da Guerra - SUN TZU', 'preco' => 'R$ 42,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/411r+56BtoL._AC_UY327_FMwebp_QL65_.jpg', 'nome' => 'Noite escura - São João da Cruz', 'preco' => 'R$ 31,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/91Ly1NQPb8L._AC_UY327_FMwebp_QL65_.jpg', 'nome' => 'Os Miseráveis - Victor Hugo', 'preco' => 'R$ 39,90'],
    ['imagem' => 'https://m.media-amazon.com/images/I/41oMkonRbTL._SX331_BO1,204,203,200_.jpg', 'nome' => 'Hamlet - William Shakespeare', 'preco' => 'R$ 12,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/81BcpLExpYL._AC_UY327_FMwebp_QL65_.jpg', 'nome' => 'Romeu e Julieta - William Shakespeare', 'preco' => 'R$ 13,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/41IrLrq8JdL._SX345_BO1,204,203,200_.jpg', 'nome' => 'O príncipe - Nicolau Maquiavel', 'preco' => 'R$ 18,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51MSCS6s-cL._SX422_BO1,204,203,200_.jpg', 'nome' => 'Harry Potter -  J.K. Rowling - Box 7 livros', 'preco' => 'R$ 249,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51YWdnZNt5L._SY498_BO1,204,203,200_.jpg', 'nome' => 'Os Heróis do Olimpo - Box 5 livros', 'preco' => 'R$ 204,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51dn4o9rcTL._SX384_BO1,204,203,200_.jpg', 'nome' => 'Sherlock Holmes - Box 4 livros', 'preco' => 'R$ 74,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/416E0ngf0xL._SX341_BO1,204,203,200_.jpg', 'nome' => 'Dom Casmurro - Machado de Assis', 'preco' => 'R$ 19,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51HriiRzglL._SX335_BO1,204,203,200_.jpg', 'nome' => 'O Alienista- Machado De Assis', 'preco' => 'R$ 25,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/41PVVpQf-sL._SX322_BO1,204,203,200_.jpg', 'nome' => 'Fahrenheit 451 - Ray Bradbury', 'preco' => 'R$ 30,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51XNQt0VStL._SX350_BO1,204,203,200_.jpg', 'nome' => 'Frankenstein - Mary Shelley', 'preco' => 'R$ 16,22'],
    ['imagem' => 'https://m.media-amazon.com/images/I/419ebAR2eeL._SX346_BO1,204,203,200_.jpg', 'nome' => 'O Pequeno Príncipe - Antoine', 'preco' => 'R$ 5,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/61AD--JL1KL._SX331_BO1,204,203,200_.jpg', 'nome' => 'Alice No País Das Maravilhas - Lewis Carroll', 'preco' => 'R$ 88,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/81McBClWuBL._AC_UF1000,1000_QL80_.jpg', 'nome' => 'Discworld - Terry pratchett - Box', 'preco' => 'R$ 500,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/61yULaQqaCL._SX334_BO1,204,203,200_.jpg', 'nome' => 'O Mágico de Oz - L. Frank Baum', 'preco' => 'R$ 44,15'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51hJk6qYKkL._SX384_BO1,204,203,200_.jpg', 'nome' => '20 000 léguas submarinas - Júlio', 'preco' => 'R$ 33,50'],
    ['imagem' => 'https://m.media-amazon.com/images/I/417LGuOmjwL._SX370_BO1,204,203,200_.jpg', 'nome' => 'Bíblia', 'preco' => 'R$ 20,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51NKfAmui5L._SY348_BO1,204,203,200_.jpg', 'nome' => 'Demon Slayer - Gotouge Box Completa', 'preco' => 'R$ 999,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/41RTcYyXFXL._SX373_BO1,204,203,200_.jpg', 'nome' => 'Fullmetal Alchemist - Box Completa', 'preco' => 'R$1222,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51GxNdaG4jL._SY498_BO1,204,203,200_.jpg', 'nome' => 'Tokyo Ghoul Box Completa', 'preco' => 'R$ 800,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51U8QMo59eL._SX355_BO1,204,203,200_.jpg', 'nome' => 'Neon Genesis Evangelion Vol. 01', 'preco' => 'R$ 42,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51uOwQX0vOL._SY498_BO1,204,203,200_.jpg', 'nome' => 'Box Dragon Ball', 'preco' => 'R$ 900,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51fNe4A+yJL._SX331_BO1,204,203,200_.jpg', 'nome' => 'Box Hellsing', 'preco' => 'R$ 600,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51PlGenRe+L._SX342_BO1,204,203,200_.jpg', 'nome' => 'Naruto Vol. 45', 'preco' => 'R$ 42,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51u0njPYXBL._SX325_BO1,204,203,200_.jpg', 'nome' => 'V de Vingança Capa dura', 'preco' => 'R$ 85,00'],
    ['imagem' => 'https://m.media-amazon.com/images/I/61qUzsYqz-L.jpg', 'nome' => 'Flashpoint', 'preco' => 'R$ 149.99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/41TQtSVYS5L._SX266_BO1,204,203,200_.jpg', 'nome' => 'Demolidor: A queda de Murdock', 'preco' => 'R$ 60,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/41uXwKBLXCL._SX402_BO1,204,203,200_.jpg', 'nome' => 'Apologia De Sócrates - Platão', 'preco' => 'R$ 18,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51AIG1wHjwL._SY498_BO1,204,203,200_.jpg', 'nome' => 'O Corvo e outras histórias - Edgar Allan Poe', 'preco' => 'R$ 22,70'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51rEMmmweAL._SX346_BO1,204,203,200_.jpg', 'nome' => 'Memórias póstumas de Brás Cubas - Machado de Assis', 'preco' => 'R$ 21,56'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51t-2xkikXL._SX331_BO1,204,203,200_.jpg', 'nome' => 'O chamado de Cthulhu e outros contos - H. P. Lovecraft', 'preco' => 'R$ 14,99'],
    ['imagem' => 'https://m.media-amazon.com/images/I/51z0s3GcvwL._SX346_BO1,204,203,200_.jpg', 'nome' => 'It: A coisa - Stephen King', 'preco' => 'R$ 14,99'],
    ['imagem' => 'https://images-na.ssl-images-amazon.com/images/I/91fQ51I4TRL._AC_UL232_SR232,232_.jpg', 'nome' => 'O Exorcista', 'preco' => 'R$ 37,99'],
    ['imagem' => 'https://images-na.ssl-images-amazon.com/images/I/914D-Og5i4L._AC_UL232_SR232,232_.jpg', 'nome' => 'O Retrato de Dorian Gray', 'preco' => 'R$ 58,99'],
    ['imagem' => 'https://images-na.ssl-images-amazon.com/images/I/91Rh0D2brbL._AC_UL232_SR232,232_.jpg', 'nome' => 'Olhos prateados: Five Nights At Freddys 1', 'preco' => 'R$ 50,00'],
    ['imagem' => 'https://images-na.ssl-images-amazon.com/images/I/81LHpYxVdIL._AC_UL232_SR232,232_.jpg', 'nome' => 'Nós - Zamiátin ', 'preco' => 'R$ 61,99'],
];

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
