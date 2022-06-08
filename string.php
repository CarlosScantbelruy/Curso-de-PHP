<div class="titulo"> Tipo String</div>

<?php
echo'Eu sou um string';
echo'<br>';
var_dump("Eu também");
echo'<br>';

// concatenação
echo"Nós também" . ' somos'; // . faz a concatenação
echo'<br>', "Também aceito", " virgulas";
echo'<br>';

echo"'Nós também' " . ' "somos" '; // . faz a concatenação

// Algumas Funções
echo'<br>' . strtoupper('maximizado');
echo'<br>' . strtolower('MINIMIZADO');
echo'<br>' . ucwords('todas as letras');
echo'<br>' . ucfirst('só a primeira letra');
echo'<br>' . strlen('Quantas letras?');
echo'<br>' . mb_strlen("Eu também", "utf-8" );
echo'<br>' . substr('Só uma parte mesmo', 7, 6);
//echo'<br>' . substr('Só uma parte mesmo', 7, ); vai ate o final

