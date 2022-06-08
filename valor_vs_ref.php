<div class="titulo">valor vs referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

//Atribuição por Valor
$variavelvalor = $variavel;
echo "<br>$variavelvalor";
$variavelvalor = 'novo valor';
echo "<br>$variavel";
echo " $variavelvalor";

//Atribuição por Referência
$variavelreferencia = $variavel;
$variavelreferencia = 'mesma referencia';

echo  "<br>$variavel $variavelreferencia";



