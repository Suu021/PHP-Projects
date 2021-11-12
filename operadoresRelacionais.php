<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <?php 
    echo "<h1>Exercícios sobre operadores relacionais</h1>";
    echo "<h2>Exercício 1 - Operador Ternário</h2>";
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $media = ($nota1+$nota2)/2;
    echo "A média das notas $nota1 e $nota2 é de $media";
    echo "<br>A situação do aluno é ". ($media>=6? "APROVADO":"REPROVADO");

    echo "<h2>Exercício 2 - Operador Ternário</h2>";
    $idade = $_GET["i"];
    echo "A pessoa tem $idade anos e tem ". ($idade <= 65 && $idade>=18? "VOTO OBRIGATÓRIO": "VOTO NÃO OBRIGATÓRIO");
    ?>
</body>
</html>