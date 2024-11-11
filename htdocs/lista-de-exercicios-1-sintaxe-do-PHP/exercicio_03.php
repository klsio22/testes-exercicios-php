<?php
echo "Digite a quantidade de fitas que a locadora possui: ";
$quantidadeFitas = (int)trim(readline());

echo "Digite o valor que a locadora cobra por cada aluguel: ";
$valorAluguel = (float)trim(readline());

$fitasAlugadasPorMes = floor(($quantidadeFitas / 3));
$faturamentoMensal = $fitasAlugadasPorMes * $valorAluguel;
$faturamentoAnual = $faturamentoMensal * 12;

$fitasComAtrasoPorMes = floor($fitasAlugadasPorMes * 0.10);
$valorMultasMensal = $fitasComAtrasoPorMes * ($valorAluguel * 0.10);

$fitasEstragadas = $quantidadeFitas * 0.02;
$fitasReposicao = $quantidadeFitas * 0.10;
$fitasFinalAno = $quantidadeFitas - $fitasEstragadas + $fitasReposicao;

echo "Faturamento anual: R$" . number_format($faturamentoAnual, 2, '.', '') . "\n";
echo "Valor multas mensal: R$" . number_format($valorMultasMensal, 2, '.', '') . "\n";
echo "Total de fitas ao final de 1 ano: " . number_format($fitasFinalAno, 2, '.', '') . "\n";
