<div class="titulo">Laço_For</div>

<?php
for($cont = 0; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

for(; $cont <= 10; $cont++){
    echo "$cont <br>";
}
for(; $cont <= 15; ){
    echo "$cont <br>";
    $cont++;
}

$array = ['domingo', 'segunda', 'terça', 'quarta',
'quinta', 'sexta', 'sábado'];

print_r($array);

echo "<hr>";

for($i = 0; $i <= count($array); $i++) {
    echo "{$array[$i]} <hr>";
}    

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']   
];

echo "<br>";

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $J < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}




