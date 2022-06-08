<div class="titulo">Argumentos Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(NULL);
saudacao(NULL, NULL);
saudacao('Carlos', 'Scantbelruy');

function anotarPedido($comida, $bebida = 'Coca-Cola') {
    echo "Para Comer, $comida <br>";
    echo "Para Comer, $bebida <br>";
}

anotarPedido('Pizza');
echo '<hr>';
anotarPedido('Big Mac', 'Fanta Laranja');
