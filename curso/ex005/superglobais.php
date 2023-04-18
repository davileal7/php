<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
</head>
<body>
    <main>
        <pre>
            <?php
            
            setcookie("dia-da-semana", "Segunda", time() + 3600);

            session_start();
            $_SESSION["teste"] = "FUNCIONOU!";

            echo "<h1>Superglobal GET</h1>";  //Query String - solicitação pela URL ?nome=davi&
            var_dump($_GET);

            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);

            echo "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>Supergolbal COOKIE</h1>";
            var_dump($_COOKIE);

            echo "<h1>Supergolbal SESSION</h1>";
            var_dump($_SESSION);

            echo "<h1>Supergolbal SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1>Supergolbal GLOBALS</h1>";
            var_dump($GLOBALS);

            ?>
        </pre>
    </main>
    
</body>
</html>