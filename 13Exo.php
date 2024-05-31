<h1>Exo 13</h1>

<p> Calculer la moyenne générale d'un élève dont les notes sont renseignées dans 
   un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<H2>Le résultat</H2>

<?php
                                                           
$text1 = "Les notes obtenues par l’élève sont :";    // texte 1
$text2 = "Sa moyenne générale est donc de : ";       // texte 2

$notes = array(10,12,8,19,3,16,11,13,9,);            // Tableaux avec les notes de l'éleve
$sum = array_sum($notes);                            // La somme des notes

$moyenne = $sum / $count = count($notes);            // la moyenne de ces notes = La somme des notes / par le nombre de notre recu
$total = round($moyenne,2);                          // la moyenne avec 2 decimale

$affNote = implode(", ", $notes);                    // Affiche les éléments d'un tableau

echo "$text1 $affNote<br> $text2 $total";            // afficher le texte1 avec les élémemts du tableau - afficher le texte2  avec le total de la moyenne avec 2 decimal


// $somme = $notes[0] + $notes[1] + $notes[2] + $notes[3] + $notes[4] + $notes[5] + $notes[6] + $notes[7] + $notes[8]
