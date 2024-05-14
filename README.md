# 1 - Baixe o Arquivo:

Faça o download do arquivo "Desenvolvimento-Web-Servidor-Trabalho-1".

# 2 - Descompacte o Arquivo:

Descompacte o arquivo que você baixou.

# 3 - Renomeie o Arquivo:

Renomeie o arquivo "Desenvolvimento-Web-Servidor-Trabalho-1" para "htdocs".

# 4 - Acesse a Pasta do XAMPP:

Navegue até a pasta de instalação do XAMPP no disco local C:.

# 5 - Substitua a Pasta htdocs:

Dentro da pasta do XAMPP, localize a pasta chamada "htdocs".
Substitua a pasta existente com o nome "htdocs" pelo arquivo renomeado "htdocs" que você preparou anteriormente.
Ou, você pode abrir a pasta "htdocs" e excluir todo o conteúdo dentro dela antes de copiar os arquivos da pasta "Desenvolvimento-Web-Servidor-Trabalho-1" para dentro dela.

# 6 - Intalar composer:

Em [getcomposer.org](https://getcomposer.org/) faça a intalação do composer seguindo o passo a passo.
Após a instalação no cmd coloque o comando 'composer install' para intalar as dependencias, 'composer up' atualiza as mesmas.
Caso haja um problema no composer no cmd use 'composer dump'.

# 7 - Base de dados:

Para a Base de dados são necessarias duas tabelas, usuarios e livros, o nome da mase deve ser ```sql web_server_sistema

````:

```sql

CREATE TABLE livros (
	id int(10) NOT NULL,
	nome varchar(100) NOT NULL,
	imagem varchar(100) NOT NULL,
	preco varchar(100) NOT NULL
);

````

```sql
CREATE TABLE usuarios (
	id int(10) NOT NULL,
	nome varchar(100) NOT NULL,
	email varchar(100) NOT NULL,
	senha varchar(100) NOT NULL,
	cpf varchar(100) NOT NULL,
	cep varchar(100) NOT NULL,
	rua varchar(100) NOT NULL,
	bairro varchar(100) NOT NULL,
	cidade int(100) NOT NULL,
	uf varchar(100) NOT NULL,
	numero int(100) NOT NULL,
	data varchar(100) NOT NULL,
	admin tinyint(1) NOT NULL
);

```

# Esses passos devem garantir a instalação correta do software.

# Versão do Xampp utilizada: 8.0.30 / PHP 8.0.30. 64 bit.
