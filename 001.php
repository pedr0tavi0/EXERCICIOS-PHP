<?php
/*
Variáveis 
*/

$variavel_1 = 'texto';
// Imprimir o valor a variável e o seu tipo
echo $variavel_1;
echo ' ';
echo gettype ($variavel_1);
echo '<br>';

$variavel_2 = 123;
// Imprimir o valor a variável e o seu tipo
echo $variavel_2;
echo ' ';
echo gettype($variavel_2);
echo '<br>';

$variavel_3 = 1;
// Imprimir o valor a variável e o seu tipo
echo $variavel_3;
echo ' ';
echo gettype($variavel_3);
echo '<br>';

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
// Imprimir o valor a variável e o seu tipo
var_dump($array);
echo '<br><br>';
print_r($array);
?>