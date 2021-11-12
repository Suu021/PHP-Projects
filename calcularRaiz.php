<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular raíz quadrada</title>
</head>
<body>
<h1>Vamos calcular a raíz quadrada!</h1>
    <form method="get" action="calcularRaiz.php">
        Valor:<input name="v" type="number" />
        <input type="submit" value="Calcular Raíz">
    </form>
    <?php 
    $valor = isset($_GET["v"])? $_GET["v"]:0;
    echo "A raíz quadrada de $valor é ". number_format(sqrt($valor), 2);
    ?>
</body>
</html>