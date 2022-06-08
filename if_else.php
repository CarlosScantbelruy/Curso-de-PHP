<div class="titulo">If Else</div>

<?php

if(true) {
    echo "Serei impresso?<br>";
}

if(false) {
    echo "verdadeiro - parte A<br>";
    echo "verdadeiro - parte B<br>";

} else {    
    echo "falso - parte A<br>";
    echo "falso - parte B<br>";
}

if(false) {
    echo "passo A<br>";
} else if(true) {    
    echo "passo B<br>";
} else {
    echo "ultimo passo<br>";
}

echo "Fim<br>";