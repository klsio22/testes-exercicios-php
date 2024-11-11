<?php
echo "Digite um número no formato CDU (centena, dezena, unidade): ";
$numero = trim(fgets(STDIN));

if (strlen($numero) == 3 && ctype_digit($numero)) {
    $centena = $numero[0];
    $dezena = $numero[1];
    $unidade = $numero[2];

    echo "C - $centena\n";
    echo "D - $dezena\n";
    echo "U - $unidade\n";
} else {
    echo "Erro: Por favor, insira um número com exatamente 3 dígitos.\n";
}
