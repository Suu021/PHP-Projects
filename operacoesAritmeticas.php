<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritméticas</title>
</head>
<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h1>Foram obtidos os valores $n1 e $n2</h1>";
    echo "<h2>Operações Aritméticas</h2>";
    echo "A soma de $n1 + $n2 é ". ($n1 + $n2);
    echo "<br>A subtração de $n1 - $n2 é ". ($n1 - $n2);
    echo "<br>A multiplicação de $n1 * $n2 é ". ($n1 * $n2);
    echo "<br>A divisão de $n1 / $n2 é ". ($n1 / $n2);
    echo "<br>O módulo de $n1 % $n2 é ". ($n1 % $n2);
    echo "<br>A média de $n1 e $n2 é ". (($n1 + $n2)/2);
    
    echo "<h2>Funções matemáticas</h2>";
    echo "O valor absoluto de $n2 é ". abs($n2);
    echo "<br>$n1 elevado a $n2 é ". pow($n1, $n2);
    echo "<br>A raíz de $n1 é ". sqrt($n1);
    echo "<br>O valor arredondado de $n1 é ". round($n1); //ceil (sempre para cima), floor (sempre para baixo)
    echo "<br>O valor inteiro de $n1 é ". intval($n1);
    echo "<br>O valor de $n1 formatado em moeda é de R$". number_format($n1, 2, ",", ".");
    ?>

</body>
</html>