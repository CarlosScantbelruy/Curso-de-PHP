<div class="titulo">Op. logicos</div>

<?php
echo "<p>V ou F</p><hr>";
var_dump(true);
echo('<br>');
var_dump(!true); //not

echo"<p>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true); //AND
var_dump(false && false);

echo"<p>Tabela verdade 'OR' (ou)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true); //OR
var_dump(false || false); 

echo"<p>Tabela verdade 'XOR' (ou)</p><hr>";
var_dump(true XOR true);
var_dump(true XOR false);
var_dump(false XOR true);
var_dump(false XOR false); //!=

echo"<p class='divisão'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'm';

$pagouPrevidencia = true;

$criteriohomen = ($idade >= 65 && $sexo === 'm');
$criteriomulher = ($idade >= 60 && $sexo === 'f');
$atingiuCriterio = $criteriohomen || $criteriomulher;
$podeseAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "pode se aposentar -> $podeseAposentar.<br>";

if($idade >= 60 && $sexo === 'f') {
    echo "pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'm') {
    echo "pode se aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar um pouco...";
}




?>

<style>
    p {
        margin-bottom: 0px;
        font-weight: bold;
    }
    hr {
        margin-top: 0px;
    }
</style>