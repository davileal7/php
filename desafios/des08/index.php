<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio8</title>
</head>
<body>
    <?php 
    $numero = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="" method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <?php 
        $quadrada = sqrt($numero);
        $cubica = pow($numero, 1/3)  ;
        ?>

        <h2>Resultado final</h2>
        <?php 
        echo "Analisando o <strong>número $numero </strong>,temos:
        <li>A sua raiz quadrada é <strong> ". number_format($quadrada,3,",",".") ."</strong></li>
        <li>A sua raiz cúbica é <strong> ". number_format($cubica,3)." </strong></li>"
        ?>

    </section>
    
</body>
</html>