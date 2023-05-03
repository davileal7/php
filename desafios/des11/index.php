<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 11</title>
</head>
<body>
    <?php 
    $preco = $_GET['valor'] ?? 0;
    $percentual = $_GET['per'];
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Preço do Produto (R$)</label>
            <input type="number" name="valor" id="valor" value="<?=$preco?>">
            <label for="per"> Qual será o percentual de reajuste? <strong>(<span id="display"></span>%)</strong> </label>
            <input type="range" name="per" id="per" value="per" min="0" max="100">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
    <h2>Resultado do Reajuste</h2>

        <?php 
        $resultado =  ($percentual * $preco) / 100;
        $juros = $preco + $resultado;
        $desconto = $preco - $resultado;

        echo "O produto que custa <strong>R$".number_format($preco,2,",",".")."</strong>,
         com <strong>$percentual% de aumento</strong> vai passar a custar<strong> 
         R$".number_format($juros,2,",",".")."</strong> e com desconto custará<strong>  
         R$".number_format($desconto,2,",",".")."</strong> valor da porcentagem <strong>R$".number_format($resultado,2,",",".")."</strong>."
        ?>
    </section>
    <script src="script.js"></script>
</body>
</html>