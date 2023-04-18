<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style03.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            $cotacao = 5.28;
            $real = $_GET["din"];
            $dolar = $real / $cotacao;
            //echo "Seu valor R$" .number_format($real, 2, ",","."). " equivalem a U$". number_format($dolar,2, ",",".");
            $padrao = numfmt_create("us", NumberFormatter::CURRENCY);
            echo "Seu " . numfmt_format_currency($padrao, $real, "BRL") . " equivale a ".
            numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </div>
</body>
</html>