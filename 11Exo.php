<h1>Exo 11</h1>

<H2>Le résultat</H2>

<?php

$text1 = "Il y a ";                                                            // texte 1
$text2 = "marques de voitures dans le tableau :";                              // texte 2

$voitures = array("Peugeot","Renault","BMW","Mercedes<br>");                    // Tableau avec des types de marque
$count = count($voitures);                                                      // compte le nombre de marque (4)

echo "$text1 $count $text2<br>";                                               // afficher texte 1 avec le nombre de marque + le texte 2

echo "$voitures[0]<br> $voitures[1]<br> $voitures[2]<br> $voitures[3]<br>";        // afficher les differents marque de voiture 

Echo "*******************<br>";

echo $affMarque = implode("<br>", $voitures);                                   // afficher différament les differents marque de voiture   

Echo "*******************<br>";

foreach ($voitures as $voiture) {                                              // afficher les differents marque de voiture par foreach
  echo "$voiture <br>";
}
Echo "*******************";


