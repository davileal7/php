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
    //OREDEM DE PRECEDÊNCIA  ---- muda a ordem se tiver ()
    // **
    // *  /  %
    // +  -
    $resposta2 = "2" . "2"; //operador string concatenação
    $resposta = "2" + "2";
    $res = 50 / 2 + 3 ** 2;
    
    var_dump($resposta);
    var_dump($resposta2);

    echo "<p> $resposta </p>";
    echo "<p> $res </p>"
    
    ?>
    
</body>
</html>