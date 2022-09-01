<?php
$num1 = $_POST['num1']; 
$num2 = $_POST['num2']; 
$calculo = $_POST['opcoes']; 

switch($calculo){ 
    case 'adicao':
        $resultado = $num1 + $num2;
        echo "O resultado de $num1 + $num2 é: $resultado";
        break;
    case 'subtracao': 
        $resultado = $num1 - $num2;
        echo "O resultado de $num1 - $num2 é: $resultado";
        break;
    case 'multiplicacao':  
        $resultado = $num1 * $num2;
        echo "O resultado de $num1 * $num2 é: $resultado";
        break;
    case 'divisao':
        $resultado = $num1 / $num2;
        echo "O resultado de $num1 / $num2 é: $resultado";
        break;
    default:
        echo "Selecione uma opção";
    }

