<div class="titulo">Argumentos variaveis</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo Soma(14, 15) . '<br>';

function somaComplta(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaComplta(1,2,3,4,5);
echo '<br>';

function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dep) {
        echo "Dependentes: $dep <br>";
        }
    }
}

echo '<br>';
membros('Carlos', 'Rose', 'Caio','Manuela');
