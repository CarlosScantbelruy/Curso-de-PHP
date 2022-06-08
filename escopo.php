<div class="titulo">Função Escopo</div>

<?php
function imprimiMensagem() {
    echo "Ola ";
    echo "Ate a proxima!<br>";

}

imprimiMensagem();
imprimiMensagem();
imprimiMensagem();
imprimiMensagem();

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função $variavel <br>";
}

echo "Antes $variavel <br>";
trocaValor();
echo "Depois $variavel <br>";

var_dump(trocaValor());