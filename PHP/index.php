<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Cálculos</h1>
    <form method="POST">
    <?php 
        include 'funcoes.php';//Conectando com o arquivo de funções.
    ?>

        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"/><br><br>

        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2"/><br><br>

        <button> Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                
            ?>        
        </button><br><br>

        
        <textArea rows="100" cols="40" readOnly>
            <?php
                echo "\nSomar: ".somar($num1,$num2). 
                    "\nSubtrair: ".subtrair($num1,$num2).
                    "\nDividir: ".dividir($num1,$num2).
                    "\nMultiplicar: ".multiplicar($num1,$num2).
                    "\nEscolher: ".escolher($num1,$num2).
                    "\nDecimal -> Binário: ".converterBinario($num1).
                    "\nDecimal -> Binário: ".converterBinario($num2).
                    "\nDecimal -> Hexadecimal: ".converterDecimalHexa($num1).
                    "\nDecimal -> Hexadecimal: ".converterDecimalHexa($num2);
            ?>
        </textArea>
    </form>
</body>
</html>