<link rel="stylesheet" type="text/css" href="cadastro.css">
<h1>Cadastrar Novo Livro</h1>
         <form id="cadastro-form" action="index.php?acao=addLivro" method='POST'>
             <div>
                 <label for="nome">Nome do Livro:</label>
                 <input type="text" id="nome" name="nome">
             </div>
             <div>
                 <label for="email">Ano de Publicação:</label>
                 <input type="email" id="email" name="email">
             </div>
             <div>
                 <label for="cpf">Nome do Autor:</label>
                 <input type="text" id="cpf" name="cpf">
             </div>
             <div>
                 <label for="cep">Editora:</label>
                 <input type="text" id="cep" name="cep">
             </div>
             <div>
                 <label for="rua">Quantidade:</label>
                 <input type="text" id="rua" name="rua">
             </div>
             <button type="submit">Adicionar</button>
         </form>