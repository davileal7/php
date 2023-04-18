<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ex01</title>
</head>
<body>
    <div class="container">
        <form action="index.php" method="get">
            <h1>Sortear um número de 1 a 100</h1>
            Clique para sortear:
            <input type="submit" value="Sortear">
        </form>
        <?php

        $sorteio1 = rand(0,100); //1951
        $sorteio2 = mt_rand(0,100); //1997 o mais indicado
        $sorteio3 = random_int(0,100); //mais lento, é para num criptograficamente seguros
            echo "<strong>$sorteio2</strong";
           
            ?>
    </div>
</body>
</html>