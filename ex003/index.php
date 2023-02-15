
<?php
//Váriaveis e Constantes 

$nome = "Davi";
$sobrenome = "Leal";
const idade = 36 . " anos";
const PAIS = "Brasil";

$nomeCompletoCliente = "Camel Case";
$telefonte_contato_fornecedor = "Snake Case";


echo "Muito prazer $nome $sobrenome e tem " . idade . "! <p> Você mora no " . PAIS;

echo "<p>$nomeCompletoCliente  $telefonte_contato_fornecedor";


// 0x = hexadecimal 
// 0b = binário 0 = Octal
$num = 0x1A;
$num2 = 3e2; // 3x 10²
$num3 = (int) "250";
echo "<p>O valor da variável da $num,  $num2,  $num3 <p/>";

$v = "tipo primitivo";
var_dump($v);

$time = true;
var_dump("<p>$time</p>");


?>