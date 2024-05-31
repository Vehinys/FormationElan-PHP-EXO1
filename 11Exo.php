<h1>Exo 11</h1>

<H2>Le résultat</H2>

<?php

$text1 = "Il y a ";                                                            // texte 1
$text2 = "marques de voitures dans le tableau :";                              // texte 2

$voiture = array("Peugeot","Renault","BMW","Mercedes<br>");                    // Tableau avec des types de marque
$count = count($voiture);                                                      // compte le nombre de marque (4)

echo "$text1 $count $text2<br>";                                               // afficher texte 1 avec le nombre de marque + le texte 2

echo "$voiture[0]<br> $voiture[1]<br> $voiture[2]<br> $voiture[3]<br>";        // afficher les differents marque de voiture 
                                


foreach ($voiture as $afficher) {                                              // afficher les differents marque de voiture par foreach
  echo "$afficher <br>";
}

echo $affMarque = implode("<br>", $voiture);                                  // afficher différament les differents marque de voiture

