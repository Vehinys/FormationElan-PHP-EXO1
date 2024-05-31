<h1>Exo 9</h1>

<H2>Le résultat</H2>

<?php

$age = 32;                                                     // La variable $age est initialisée à 32.
$sexe ="Femme";                                                // La variable $sexe est initialisée à "Femme".

echo " Age : $age <br> Sexe : $sexe <br> La personne " ;       // Afficher  "Âge : " suivie de la valeur de $age, "Sexe : " suivie de la valeur de $sexe, et "La personne "

if ($sexe == "Femme" && $age >= 18 && $age <= 35) {            // Si $sexe est "Femme" et que $age est compris entre 18 et 35 inclus
    echo "êtes imposable.";                                    // Afficher "êtes imposable.".

} elseif ($sexe == "Homme" && $age >= 20 ) {                   // Sinon, si $sexe est "Homme" et que $age est supérieur ou égal à 20 :
    echo "êtes imposable.";                                    // Afficher "êtes imposable.".

} else {
    echo "n'êtes pas imposable.";                              // Affiche "n'êtes pas imposable.".

}