<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 7</title>
</head>
<body>
    <?php 
    $salario = $_GET['n1'] ?? 0;
    $soma = $salario * 1380;

    $numSalario = $salario / 1380;
    $sobra = number_format($numSalario,0) * 1380;
    $somar = $salario - $sobra; 
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="n1">Salário</label>
        <input type="number" name="n1" id="n1">
        <p>
            Considerando o salário mínimo de <strong>R$1.380,00</strong> 
        </p>
        <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?= 
        "Quem recebe um salário de R$".number_format($salario,2,",",".")." ganha até <strong>".number_format($numSalario,0)." salários minimos + </strong>  R$".number_format($somar,2,",",".")."."
        ?>

    </section>
    
</body>
</html>