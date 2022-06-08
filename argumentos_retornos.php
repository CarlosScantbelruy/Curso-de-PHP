<div class="titulo">Argumetos e Retornos</div>

<?php

function obterMensagem() {
    return 'Seja bem vindo';
}
//echo chama a função
 obterMensagem();
 $m = obterMensagem();
 echo $m;
 echo "<br>", obterMensagem();
 echo "<br>";
 var_dump(obterMensagem());

 function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo "<br>", obterMensagemComNome('Carlos Cristovão');
echo "<br>", obterMensagemComNome('Rose');
echo "<br>", obterMensagemComNome('Caio Cristovão');
echo "<br>", obterMensagemComNome('Manuela');

function soma($a, $b) {
    return $a + $b;
}
$x = 49;
$y = 60;
echo '<br>', soma(4,5);
echo '<br>', soma($x,$y);

function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

function trocaValordeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}
//bug&
trocaValordeVerdade($variavel, 5000);
echo '<br>', $variavel;