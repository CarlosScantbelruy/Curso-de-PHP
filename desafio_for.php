<div class="titulo">Desafio_For</div>

<?php
//<!--
#
##
###
####
#####

$array = ['#', '##', '###', '####',
'#####'];

print_r($array);

echo "<hr>";

for($i = 0; $i <= count($array); $i++) {
    echo "{$array[$i]} <hr>";
}

echo '<br>';

for($cont = 0; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo"$impressao <br>";
}


