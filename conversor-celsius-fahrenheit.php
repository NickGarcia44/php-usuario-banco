<?php

echo "*****************\n";
echo "Conversor\n";
echo "*****************\n";

echo "O que deseja fazer? \n";
echo "\n";
echo "1. Celsius para Fahrenheit\n";
echo "2. Fahrenheit para Celsius\n";
echo "\n";

$opcao = (int) fgets (STDIN);

switch ($opcao) {
    case 1:
        echo "Digite um valor: \n";
        $celsius = (float) fgets(STDIN);
        $celToFah = ($celsius * 1.8) + 32;
        echo $celsius . " Celsius é " . $celToFah . " Fahrenheit \n";
        break;
    
    case 2:
        echo "Digite um valor: \n";
        $fah = (float) fgets(STDIN);
        $fahToCel = ($fah - 32) / 1.8;
        echo $fah . " Fahrenheit é " . $fahToCel . " Celsius \n";
        break;
    
    default:
        echo "Opção inválida";
        break;
}