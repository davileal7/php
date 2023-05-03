<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 10</title>
</head>
<body>
    <?php 
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>" min="1900" max="<?=($atual-1)?>">
            <label for="idade">Quer saber sua idade em que ano? (atualmente estamos em <strong> <?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>" min="1900">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
        $idade = $ano - $nasc;
        
        ?>
        <h2>Resultado</h2>
            <?php
            print "Quem nasceu em $nasc vai ter <strong>$idade anos</strong> em $ano!"
            ?>
        </section>
    
</body>
</html>