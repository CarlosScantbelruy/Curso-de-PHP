<div class="titulo">Op. Relacionais</div>

<?php
var_dump(1 == 1); //true
var_dump(1 > 1);  //false
var_dump(1 >= 1); //true
var_dump(1 < 23); //true
var_dump(1 <= 7); //true
var_dump(1 != 1); //false
var_dump(1 <> 1); //false

var_dump(111 == '111'); //true
var_dump(111 === '111');//false
var_dump(111 != '111');//false
var_dump(111 !== '111');//true

echo"<p>Relacionais no if/else</p><hr>";
$idade = 45;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if($idade < 65) {
    echo "Adultou = $idade anos<br>";
} else {
    echo "terceira idade = $idade!";
}

echo'<p>SpacaShip</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

?>

<style>
    p {
        margin-bottom: 0px;
    }
    hr {
        margin-top: 0px;
    }
</style>