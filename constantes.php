<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!';
//TAXA_DE_JUROS = 2.5;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorvariavel = 2.8;
define('NOVISSIMA_TAXA', $valorvariavel);
//cons NOVISSIMA_TAXA = $valorvariavel;
//onst NOVISSIMA_TAXA = 2.8 + 1.2;
echo'<br>' . NOVISSIMA_TAXA; 


echo '<br> linha; ' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;
