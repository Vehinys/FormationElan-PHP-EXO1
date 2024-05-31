<h1>Exo 12</h1>

<p> a partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), 
   dire bonjour aux différentes personnes dans leur 
   langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.
   Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG</p>

<H2>Le résultat</H2>

<?php

$langues = array("Mickael" => "français", "Virgile" => "espagnol", "Marie-Claire" => "anglais");     // Création du tableau associatif des prénoms avec leurs langues

ksort($langues);                                                                                     // Tri des prénoms par ordre alphabétique

foreach ($langues as $prenom => $langue) {                                                           // Parcours du tableau et salutation en fonction de la langue
   switch ($langue) {
       case "français":
           echo "Salut $prenom<br>";                                                                 // Saluer en français
           break;
       case "espagnol":
           echo "Hola $prenom<br>";                                                                  // Saluer en espagnol
           break;
       case "anglais":
           echo "Hello $prenom<br>";                                                                 // Saluer en anglais
           break;
       default:
           echo "Bonjour, $prenom<br>";                                                              // Par défaut, saluer en français
           break;
   }
}



