<div class="titulo">Desafio Palindromo</div>

<?php
 function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
 }

 echo palindromo('arara') . "<br>";
 echo palindromo('Carlos') . "<br>";
 echo palindromo('ana') . "<br>";
 echo palindromo('abccba') . "<br>";
echo '<br>';

 function palindromoSim($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não';

 }

 echo palindromo('arara') . ' ';
 echo palindromo('Carlos') . ' ';
 echo palindromo('ana') . ' ';
 echo palindromo('abccba') . ' ';

