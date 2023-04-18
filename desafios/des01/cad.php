<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultado</title>
</head>
<body>
    <div class="container">
        <h1>Resultado</h1>
        <main>
            <?php
            $numero = $_GET["numero"];
            $antes = $numero - 1;
            $apos = $numero + 1;
            
            echo "<p>O número enviado foi $numero enviado</p>
            <p>um número antes é $antes</p>
            <p>e depois é $apos</p>"
            ?>
        </main>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </div>
</body>
</html>