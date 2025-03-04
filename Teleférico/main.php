<?php
$c = 100;
$a = 87;

$quociente = $a / ($c-1);
$resto = $a % ($c-1);

$resposta = $quociente;

if ($resto > 0) {
    $resposta += 1;
}

echo (int) $resposta;
//int por garantia para deixar os numeros inteiros