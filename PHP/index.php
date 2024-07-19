<?php
    $num1 = 0;
    $num2 = 3;
    $resto = "";
    $d = "";
    $resultado = "";
    
    

    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do somar 

    function subtrair($num1,$num2){
        return $num1 - $num2;
    }//fim do subtrair 

    function multiplicar($num1,$num2){
        return $num1 * $num2;
    }//fim do somar 

    function dividir($num1,$num2){
        if($num2 <= 0){
            return "Impossivel dividir por ZERO";
    
        }else{
            return $num1 / $num2;
        }
    }//fim do dividir
    
    function escolha($num1){
        switch($num1){
            case 1:
                return "Rosa";
                break;
            case 2:
                return "Preto";
                break;
            case 3:
                return "White ";
                break;
            default:
                return "Cor não identificada";
        }//fim do switch 
        
    }
    function inteiroParaBinario($d){
        $binario = "";
       
        while ($d >1){
            $binario .= $d % 2;
            $d = $d / 2;
            
        }
        return  strrev ($binario);

    }//fim do binario 
    function binarioParaInteiro($binario){
        $tamanho = strlen($binario);
        $j = $tamanho -1;
        $i = 0;
        $decimal = 0;
            while($i < $tamanho){
                if(substr($binario,$i,1) == "1" ){
                    $decimal += pow(2,$j);
                }
                $j--;
                $i++;
            }
        return $decimal;
         
    }//fim da function
    
    function decimalHexa($d){
        $hexa = "";
        $resto = 0;

        while ($d >= 1){

            $resto = $d % 16;
            $d = $d / 16;

            switch($resto){
                case 10:
                    $hexa .= "A";
                    break;
                case 11:
                    $hexa .= "B";
                    break;
                case 12:
                    $hexa .= "C";
                    break;
                case 13:
                    $hexa .= "D";
                    break;
                case 14:                    
                    $hexa .= "E";       
                    break;
                case 15:
                    $hexa .= "F";
                    break;
                default:
                    $hexa .= $resto;    
                break;

            }//fim do switch
        }//fim do while

        return strrev ($hexa);
         
    }//fim do método



    //Imprimir os dados na tela
    echo "<br>A soma dos números é: ".somar(5,6);
    echo "<br>A subtração dos números é: ".subtrair(5,6);
    echo "<br>A multiplicação dos números é: ".multiplicar(5,6);
    echo "<br>A divisão dos números é: ".dividir(90,7);
    echo "<br>A escolha é: ".escolha(2);
    echo "<br>A conversão do número $d em binario é: ".inteiroParaBinario(257);
    echo "<br>A conversão em binario para decimal é: ".binarioParaInteiro(11001);
    echo "<br>A conversão de decimal em hexa é: ".decimalHexa(255);
?>