<?php
$numeros = [];

do {
    $input = readline("Digite um número (0 para sair): ");
    $numero = (int) $input;

    if ($input === '' || $numero == 0) {
        break;
    }

    $numeros[] = $numero;
} while (true);

echo "\n";
echo "Números na ordem inversa:\n";

foreach (array_reverse($numeros) as $num) {
    echo $num . "\n";
}
