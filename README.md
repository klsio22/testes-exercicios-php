# Documentação de Execução do Ambiente Docker

Este documento fornece instruções detalhadas sobre como executar o ambiente Docker descrito no arquivo `docker-compose.yml`.

## Pré-requisitos

Antes de começar, certifique-se de ter o seguinte instalado em seu sistema:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Etapas de Execução

1. **Clone o repositório**:
   ```
   git clone https://github.com/seu-usuario/seu-projeto.git
   cd seu-projeto
   ```

2. **Inicie o ambiente Docker**:
   ```
   docker-compose up -d
   ```
   Esse comando irá criar e iniciar todos os serviços definidos no arquivo `docker-compose.yml`.

3. **Verifique os serviços em execução**:
   ```
   docker-compose ps
   ```
   Você deverá ver a lista de todos os serviços em execução.

4. **Acesse os aplicativos**:
   - **phpMyAdmin**: Abra o navegador e acesse `http://localhost:8001`. Use as seguintes credenciais:
     - Usuário: `admin`
     - Senha: `admin`
   - **Aplicação PHP/Apache**: Abra o navegador e acesse `http://localhost:8000`. Aqui você verá o conteúdo do diretório `htdocs/` montado no container `php-apache`.

## Detalhes da Configuração

O arquivo `docker-compose.yml` define os seguintes serviços:

1. **memcached**: Executa uma instância do Memcached, um sistema de cache em memória.
2. **redis**: Executa uma instância do Redis, um banco de dados em memória.
3. **phpmyadmin**: Executa uma instância do phpMyAdmin, uma ferramenta de administração web para o MySQL.
4. **mysql**: Executa uma instância do MySQL 8.0 com as seguintes configurações:
   - Diretório de trabalho: `/application`
   - Volume montado: `.:/application` (monta o diretório atual no container)
   - Variáveis de ambiente:
     - `MYSQL_ROOT_PASSWORD=admin`
     - `MYSQL_DATABASE=cursephp`
     - `MYSQL_USER=admin`
     - `MYSQL_PASSWORD=admin`
   - Porta exposta: `8002:3306`
5. **php-apache**: Executa uma instância do PHP 8.3 com o Apache, com as seguintes configurações:
   - Dependência: `mysql` (inicia após o MySQL)
   - Volume montado: `./htdocs/:/var/www/html/` (monta o diretório `htdocs/` no container)
   - Porta exposta: `8000:80`

Certifique-se de que seu diretório local `htdocs/` contenha o código-fonte da sua aplicação PHP.

Para parar os containers do ambiente Docker, você pode seguir as seguintes etapas:

Parar os containers:

Copiar
docker-compose stop
Este comando irá parar todos os containers definidos no arquivo docker-compose.yml.

Remover os containers:

Copiar
docker-compose down
Este comando irá parar e remover todos os containers, redes e volumes definidos no arquivo docker-compose.yml.

# Olá Mundo em PHP (Terminal mode)

1.  Crie a estrutura de diretórios para o projeto hello world:

```bash
$ mkdir -p projects/hello-world
$ cd projects/hello-word
```

1. Crie um arquivo chamado hello.php,  dentro da pasta hello-world, com o seguinte conteúdo

```php
# hello.php
<?php echo "Olá mundo!" ?>
```

1. No terminal, execute o comando docker para executar o arquivo php criado

```bash
$ docker run -it --rm -v $(pwd):/usr/src/scripts -w /usr/src/scripts/ php php hello.php
```

1. Você deve visualizar a seguinte saída
Olá mundo!
2. Criando uma alias para o comando php.

Adicione a seguinte linha no final do arquivo ~/.bashrc

```bash
alias php='docker run -it --rm -v $PWD:/usr/src/scripts -w /usr/src/scripts/ php php'
```

1. Feche e abra o terminal
2. Agora poderá executar o mesmo arquivo por meio do comando php

```bash
$ php -v
PHP 8.3.13 (cli) (built: Oct 28 2024 22:04:38) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.3.13, Copyright (c) Zend Technologies

$ php hello.php
Olá mundo!!
```

1. Modifique o algoritmo para receber seu nome e imprimir uma mensagem de boas vindas. O código deve ser como segue:

```php
<?php

echo "Digite seu nome: ";
$name = trim(fgets(STDIN));

echo "Olá $name, seja bem-vindo a disciplina de Desenvolvimento de Aplicações Back-End!";
```

1. Execução e saída

```bash
❯ php hello.php
Digite seu nome: Klesio
Olá Klesio, seja bem-vindo a disciplina de Desenvolvimento de Aplicações Back-End!
```