<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de atribuição de variáveis</title>
</head>
<body>
    <?php 
    echo "<h1>Exercícios de atribuição de variáveis</h1>";
    echo "<h2>Exercício 1 - Aumentos e descontos</h2>";
    $v1 = $_GET["v"];
    echo "O preço do produto é de R$". number_format($v1, 2, ",", ".");
    $v1 *= 1.1;
    echo "<br> Com um aumento de 10% fica R$". number_format($v1, 2, ",", ".");
    $v1 *= 0.9;
    echo "<br> Com um desconto de 10% fica R$". number_format($v1, 2, ",", ".");
    
    echo "<h2>Exercício 2 - descréscimo antes da variável</h2>";
    $ano = $_GET["a"];
    echo "Esse ano é $ano, ano passado foi ". --$ano;

    echo "<h2>Exercício 3 - Variáveis referenciadas</h2>";
    $n1 = 3;
    $n2 = 5;
    echo "O valor n1 é $n1 e o valor n2 é $n2";
    $n2 = &$n1;
    $n1 += 10; 
    echo "<br>Agora o valor n1 é $n1 e o valor n2 também é $n2";

    echo "<h2>Exercício 4 - Variáveis de variáveis</h2>";
    $site = "cursoemvideo";
    $$site = "curso de PHP";
    echo "No site do $site tem o $cursoemvideo";
    ?>
</body>
</html>