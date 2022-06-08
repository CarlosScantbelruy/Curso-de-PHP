<div class="titulo">Variáveis variaveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a}";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
echo "$epa {$opa}";