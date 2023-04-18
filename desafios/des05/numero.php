<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style03.css">
    <title>Desafio05</title>
</head>
<body>
    <main>
        <h1>Analisador de Número</h1>
        <?php 
        $num = $_POST["n"] ?? 0;

        echo "<p>Analisando o número <strong>".number_format($num, 3, ",", ".") ."</strong> informado pelo usuário</p>";

        $int = (int) $num;
        $fra = $num - $int ;

        echo "<ul>
        <li>
        A parte inteira do número é <strong>".number_format($int, 0, ",",".")." </strong>
        </li>";

        echo "<li>
        O número fracionado é <strong>".number_format($fra, 3 ,",", ".")." </strong>
        </li>
        </ul>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    
</body>
</html>