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
            $inicio = date("m-d-Y", strtotime("-8 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'.$inicio.'%27&@dataFinalCotacao=%27'.$fim.'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];


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