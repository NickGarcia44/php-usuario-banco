<?php

echo "*****************\n";
echo "Calculadora IMC\n";
echo "*****************\n";

echo "Digite sua Altura (em metros): \n";
$altura = (float) fgets (STDIN);

echo "Digite seu peso (em quilos)\n";
$peso = (float) fgets(STDIN);

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . $imc . "\n";