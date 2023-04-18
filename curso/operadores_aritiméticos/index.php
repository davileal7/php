<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //OREDEM DE PRECEDÊNCIA  ---- muda a ordem se tiver ( )
    // **
    // *  /  %
    // +  -
    $resposta = "2" . "2"; //operador string concatenação
    $resposta2 = "2" + "2";
    $res = 50 / 2 + 3 ** 2;
    

    $div = intdiv(5,2);
    $max = max(10, 3, 5, 3, 13 ,8);
    $min = min(2, 5, 6, 12);
    $potencia = pow(12, 2);
    $raiz = sqrt(10);
    $raizCubica = pow($max, 1/3);

    
    var_dump($resposta);
    var_dump($resposta2);

    echo "<p> $resposta </p>";
    echo "<p> $raizCubica </p>"
    
    ?>
    
</body>
</html>