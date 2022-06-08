<div class="titulo">Op. Aritiméticas</div>

<?php
echo 1 + 1, '<br>';

 var_dump(1 + 1);
 echo"<br>";

echo 1 + 2.5, '<br>'; // soma
echo 10 - 2, '<br>'; // subtração
echo 2 * 5, '<br>'; // multiplicão
echo 7 / 4, '<br>'; // divisão
echo intdiv(7, 4), '<br>'; // função arredondar pra menos
echo round(7 / 4), '<br>'; // funçao arrendondar pra mais
echo 7 % 4, '<br>'; // impar
echo 7 % 2, '<br>'; // impar
echo 8 % 2, '<br>'; // se for par o result é zero
//echo intdiv(7, 0), '<br>'; #erro
echo 4 **2, '<br>';

//() <= => / * % => + -

echo '<p>Precedência</p>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 **2, '<br>';
echo ((2 + 3) * 4) **2, '<br>';