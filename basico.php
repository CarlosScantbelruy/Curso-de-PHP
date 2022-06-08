<div class="titulo">Variáveis</div>

<?php
$numeroA=13;    
echo $numeroA, '<br>';
var_dump($numeroA);  

echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

unset($soma);
echo '<br>';
var_dump($numeroA);  

$variavel = "Agora sou uma string";
echo '<br>' , $variavel;

// Nomes de variavel
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';

echo '<br>';
var_dump($_SERVER(''));

