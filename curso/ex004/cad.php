<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"] ?? "sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
        echo "<p>Olá <strong>$nome $sobrenome</strong> tudo bem seja bem-vindo!</p>"

        //var_dump($_GET);  //Requestet = Get, Post, Cookies
        
        ?>
        <a href="javascript:history.go(-1)">Volta para página anteriror</a>
    </main>
    
</body>
</html>