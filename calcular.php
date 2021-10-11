<?php

$dinheiro = $_POST['1num'];
$tempo = $_POST['2num'];
$pct= $_POST['pct'];

require_once 'operacao.php';

// Instanciando o objeto

$juros = new Operacao();

$juros->setDinheiro($dinheiro);
$juros->setTempo($tempo);
$juros->setPctJuros($pct);
$juros->CalcularJuros();

echo "A divida total será: R$" . $juros->getDivida() . " reais com o valor inicial da divida em R$$dinheiro reais " . " e com um acréscimo de R$" . ($juros->getJuros() / $tempo) . " reais por mês ao longo de " . "$tempo meses";
echo "<hr>";
echo "Ou seja " . ($juros->getJuros() / $tempo) . "x" . $tempo . " = R$" . $juros->getJuros() . " reais";
// Marcha