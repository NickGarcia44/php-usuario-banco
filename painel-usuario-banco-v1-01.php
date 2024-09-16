<?php

$saldo = 1_000;
$titular = 'Nicollas Garcia';

echo "***************\n";
echo "Titular :" . $titular . "\n";
echo "Saldo da conta: R$ " . $saldo . "\n";
echo "***************\n";

do{

    echo "1. Consultar Saldo \n";
    echo "2. Sacar valor \n";
    echo "3. Depositar valor \n";
    echo "4. Sair \n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        
        case 1:
            
            echo "***************\n";
            echo "Titular :" . $titular . "\n";
            echo "Saldo da conta: R$" . $saldo . "\n";
            echo "***************\n";
            break;

        case 2:
            
            echo "Qual valor deseja sacar?: \n";
            $valorSaque = (float) fgets(STDIN);
            if ($valorSaque > $saldo){
                echo "Saldo insuficiente\n";
            } elseif ($valorSaque < 0){
                echo "O valor não pode ser negativo\n";
            }
            
            else {
                $saldo -= $valorSaque;
            }
            break;

        case 3:
            
            echo "Quanto deseja depositar?: \n";
            $valorDepositar = (float) fgets(STDIN);
            if ($valorDepositar < 0){
                echo "O valor não pode ser negativo\n";
            } else{
                $saldo += $valorDepositar;
            }
            break;

        case 4:
            
            echo "Adeus \n";
            break;

        default:
            echo "Opção inválida \n";
            break;
    }
} while ($opcao != 4);