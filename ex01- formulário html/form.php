<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML</title>
</head>
<body>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"NÃO INFORMADO";
    $ano = isset($_GET["ano"])?$_GET["ano"]:0;
    $idade = date("Y") - $ano;
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"SEM GÊNERO";
    echo "Olá, $nome! você é $sexo e tem $idade anos.";
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>