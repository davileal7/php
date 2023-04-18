<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valorN1 = $_GET['d1'] ?? 0;
    $valorN2 = $_GET['d2'] ?? 1;
    
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>   
       <form action="" method="get">
            <label for="n1">Dividendo</label>
            <input type="number" name="d1" id="d1" min="0" value="<?=$valorN1?>">
            <label for="n2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$valorN2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
         $resultado = intdiv($valorN1, $valorN2);
         $resto = $valorN1 % $valorN2;

         echo "<ul>";
         echo "<li>Dividendo: $valorN1</li>";
         echo "<li>Divisor: $valorN2</li>";
         echo "<li>Quociente: $resultado</li>";
         echo "<li>Resto: $resto</li>";
         echo " O dividendo $valorN1 e o divisor $valorN2 é = $resultado e o resto divisão é $resto.";

         echo "</ul>";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$valorN1?></td>
                <td><?=$valorN2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
    </section>
</body>
</html>