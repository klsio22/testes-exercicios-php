<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
</head>
<body>
    <h1>A linguagem PHP</h1>
    <h2>Introdução</h2>
    <ul>
        <li>Sintaxe Básica</li>
        <li>Tags PHP</li>
        <li>Variáveis</li>
        <li>Impressão de dados em PHP</li>
        <li>Constantes</li>
        <li>Concatenação e Interpolação</li>
        <li>Tipos de dados</li>
        <li>Estruturas de Controle</li>
        <li>Vetores. Matrizes. Dicionários</li>
        <li>Principais Operadores</li>
    </ul>

    <h2>Exemplos:</h2>

    <h3>1. Sintaxe Básica</h3>
    <p>
        <?php 
            // Exemplo básico de PHP
            echo "Olá, Mundo!";
        ?>
    </p>

    <h3>2. Tags PHP</h3>
    <p>
        <?php 
            // O código PHP é colocado entre as tags <?php e ?>
            echo "Este texto está dentro de tags PHP!";
        ?>
    </p>

    <h3>3. Variáveis</h3>
    <p>
        <?php
            // Definindo variáveis
            $nome = "Kleber";
            $idade = 25;
            echo "Meu nome é $nome e tenho $idade anos.";
        ?>
    </p>

    <h3>4. Impressão de dados em PHP</h3>
    <p>
        <?php
            // Usando echo para imprimir dados
            echo "Este é um exemplo de como imprimir dados em PHP usando echo.";
        ?>
    </p>

    <h3>5. Constantes</h3>
    <p>
        <?php
            // Definindo uma constante
            define("SAUDACAO", "Bem-vindo ao PHP!");
            echo SAUDACAO;
        ?>
    </p>

    <h3>6. Concatenação e Interpolação</h3>
    <p>
        <?php
            // Concatenação
            $cidade = "São Paulo";
            echo "Eu moro em " . $cidade . ".";

            // Interpolação
            echo "<br>Eu moro em $cidade.";
        ?>
    </p>

    <h3>7. Tipos de Dados</h3>
    <p>
        <?php
            $inteiro = 10; // Inteiro
            $decimal = 10.5; // Float
            $texto = "PHP é legal!"; // String
            $booleano = true; // Booleano

            echo "Tipos de dados: $inteiro, $decimal, $texto, e um booleano que é " . ($booleano ? "verdadeiro" : "falso") . ".";
        ?>
    </p>

    <h3>8. Estruturas de Controle</h3>
    <p>
        <?php
            $numero = 10;
            if ($numero > 5) {
                echo "$numero é maior que 5.";
            } else {
                echo "$numero é menor ou igual a 5.";
            }

            // Exemplo de loop
            echo "<br>Contagem: ";
            for ($i = 1; $i <= 5; $i++) {
                echo "$i ";
            }
        ?>
    </p>

    <h3>9. Vetores. Matrizes. Dicionários</h3>
    <p>
        <?php
            // Vetores
            $frutas = ["Maçã", "Banana", "Laranja"];
            echo "Frutas: " . implode(", ", $frutas) . ".";

            // Dicionário
            $pessoa = ["nome" => "Kleber", "idade" => 25];
            echo "<br>Nome: " . $pessoa["nome"] . ", Idade: " . $pessoa["idade"];
        ?>
    </p>

    <h3>10. Principais Operadores</h3>
    <p>
        <?php
            $a = 10;
            $b = 20;

            // Operadores aritméticos
            $soma = $a + $b;
            $multiplicacao = $a * $b;
            echo "Soma: $soma, Multiplicação: $multiplicacao.";

            // Operadores lógicos
            echo "<br>" . (($a > $b) ? "$a é maior que $b" : "$a não é maior que $b.");
        ?>
    </p>

</body>
</html>
