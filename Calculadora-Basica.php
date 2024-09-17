<?php

echo "*******************\n";
echo "Calculadora\n";
echo "*******************\n";

echo "O que deseja fazer?\n";

echo "1. Somar\n";
echo "2. Subitrair\n";
echo "3. Dividir\n";
echo "4. Multiplicar\n";

$opcao = (int) fgets(STDIN);

switch ($opcao) {
    case 1:
        echo "Digite o primeiro número: \n";
        $num1soma = (float) fgets (STDIN);
        echo "Digite o segundo número: \n";
        $num2soma = (float) fgets (STDIN);

        $soma = $num1soma + $num2soma;

        echo "Resultado: " . $soma;

        break;

    case 2:
        echo "Digite o primeiro número: \n";
        $num1sub = (float) fgets (STDIN);
        echo "Digite o segundo número: \n";
        $num2sub = (float) fgets (STDIN);

        $sub = $num1sub - $num2sub;

        echo "Resultado: " . $sub;

        break;

    case 3:
        echo "Digite o primeiro número: \n";
        $num1div = (float) fgets (STDIN);
        echo "Digite o segundo número: \n";
        $num2div = (float) fgets (STDIN);

        $div = $num1div / $num2div;

        echo "Resultado: " . $div;

        break;

    case 4:
        echo "Digite o primeiro número: \n";
        $num1mult = (float) fgets (STDIN);
        echo "Digite o segundo número: \n";
        $num2mult = (float) fgets (STDIN);

        $mult = $num1mult * $num2mult;

        echo "Resultado: " . $mult;

        break;
    
    default:
        # code...
        break;
}