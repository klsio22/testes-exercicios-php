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
5. **php-apache**: Executa uma instância do PHP 7.4 com o Apache, com as seguintes configurações:
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
