<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 9</title>
</head>
<body>
    <?php 
    $valor1 = $_GET['n1'] ?? 0;
    $valor2 = $_GET['n2'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 1;
    $peso2 = $_GET['peso2'] ?? 1;

    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="" method="get">
            <label for="n1">1° Valor</label>
            <input type="number" name="n1" id="n1" value="<?=$valor1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" min="1">
            <label for="n1">2° Valor</label>
            <input type="number" name="n2" id="n2" value="<?=$valor2?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2"  value="<?=$peso2?>" min="1">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
            <h2>Cálculo das Médias</h2>
            <?php
            $simples = ($valor1 + $valor2) / 2;
            $p1 = ($valor1 * $peso1) + ($valor2 * $peso2);
            $denominador = $peso1 + $peso2;
            $ponderada = $p1 / $denominador;

            
            echo "Analisando os valores $valor1 e $valor2:
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($simples,2,",","."). "</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $ponderada". number_format($ponderada,0,",",".")."</li>
            "
            ?>
    </section>
</body>
</html>