<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Formatado</title>
    <?php
    $fonte = isset($_GET["fonte"])?$_GET["fonte"]:"Arial";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"14pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <style>
    span.texto {
        font-family: '<?php echo $fonte; ?>';
        font-size: <?php echo $tam; ?>pt;
        color: <?php echo $cor; ?>;
    }
    </style>
</head>
<body>
    <h1>Texto Formatado:</h1>
    <?php
    $texto = isset($_GET["txt"])?$_GET["txt"]:"Texto de exemplo";
    echo "<span class='texto'>$texto</span>";
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>