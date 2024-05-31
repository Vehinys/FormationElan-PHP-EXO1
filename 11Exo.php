<h1>Exo 11</h1>

<p>Initialiser un tableau de x marques de voitures. 
   Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). 
   Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau..</p>

<H2>Le résultat</H2>

<?php

$text1 = "Il y a ";                                                            // texte 1
$text2 = "marques de voitures dans le tableau :";                              // texte 2

$voiture = array("Peugeot","Renault","BMW","Mercedes");                        // Tableau avec des types de marque
$count = count($voiture);                                                      // compte le nombre de marque (4)

echo "$text1 $count $text2<br>";                                               // afficher texte 1 avec le nombre de marque + le texte 2

echo "$voiture[0]<br> $voiture[1]<br> $voiture[2]<br> $voiture[3]<br><br>";    // afficher les differents marque de voiture 
echo $affMarque = implode("<br>", $voiture);                                   // afficher différament les differents marque de voiture



