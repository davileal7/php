<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delimitação de código PHP</title>
</head>
<body>
    <?php ?>
    <? ?>
    <% %> <!--não funciona mais -->
    <h1>Exemplo de PHP</h1>

    <?php
    //date_default_timezone_set("America/Sao_Paulo");  //GMT-3
    echo "Hoje é dia " . date("d/m/y");
    echo " e a hora atual é " . date("G:i:s T");
    ?>

    <?php 
    $nome = "Davi";
    echo  "<p>Oi $nome<p>"
    ?>
    
</body>
</html>