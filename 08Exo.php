<h1>Exo 8</h1>

<H2>Le résultat</H2>

<?php

$i = 8;                                  // lire le chiffre $i = 8

echo "Table de $i : <br><br>";           // afficher table de 8 : 

for ($j = 1 ; $j <= 10; $j++) {          // Pour la variable $j initialisée à 1, tant que $j est inférieure ou égale à 10, incrémente $j de 1 à chaque itération.

   echo $i.' x '.$j.' = '.$i*$j.'<br>';  // Afficher la valeur de 8, suivie de ' x ', suivie de la valeur de $j, suivie de ' = ', suivie du produit de $i et $j,

}



