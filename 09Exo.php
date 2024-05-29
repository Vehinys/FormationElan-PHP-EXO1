<h1>Exo 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
   Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans,
   alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

   // Si la femme est égale ou plus grand que 18 et qu'elle est égale ou plus petit que 35 ans, elle est imposable
// Si l'homme est égale ou plus grand que 20 ans, il est imposable, 
// Sinon non impossable
<p>Créer une fonction personnalisée permettant 
d’afficher des boutons radio avec un tableau de valeurs 
en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>

<H2>Le résultat</H2>

<?php

$age = 32; //La variable $age est initialisée à 32.
$sexe ="Femme"; // La variable $sexe est initialisée à "Femme".

echo " Age : $age <br> Sexe : $sexe <br> La personne " ;  // Afficher  "Âge : " suivie de la valeur de $age, "Sexe : " suivie de la valeur de $sexe, et "La personne "

if ($sexe == "Femme" && $age >= 18 && $age <= 35) { //Si $sexe est "Femme" et que $age est compris entre 18 et 35 inclus
    echo "êtes imposable."; //Afficher "êtes imposable.".

} elseif ($sexe == "Homme" && $age >= 20 ) { // Sinon, si $sexe est "Homme" et que $age est supérieur ou égal à 20 :
    echo "êtes imposable."; //Afficher "êtes imposable.".

} else {
    echo "n'êtes pas imposable."; //Affiche "n'êtes pas imposable.".

}



