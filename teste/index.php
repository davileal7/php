<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Interpretação das ASPAS</h1>

<?php 
$nome = "Davi";
$sobrenome = 'Leal';
$profissao = "programador";

const Estado = "SP";


echo "$nome \t$profissao\t $sobrenome"; //INTERPRETA
echo '$nome $sobrenome';

//Sintaxe HERODOC  --- NOWDOC 'Frase'
echo <<< Frase
Oi galera blz
apenas teste ok $nome
Frase

?>
    
</body>
</html>