<h1>Exo 10</h1>

<H2>Le résultat</H2>

<?php

$phrase1 = "Montant à payer :";                // Initialisation des phrases.
$phrase2 = "Montant versé :";                  // Initialisation des phrases.
$phrase3 = "Reste à payer :";                  // Initialisation des phrases.
$phrase4 = "Rendu de monnaie :";               // Initialisation des phrases.

$montAPayer = 152;                             // Montant à payer
$montVerser = 200;                             // Montant versé par le client
$reste = $montVerser - $montAPayer;            // Calcul du reste à rendre

echo "$phrase1 $montAPayer €<br>";             // afficher les montants et texte.
echo "$phrase2 $montVerser €<br>";             // afficher les montants et texte.
echo "$phrase3 $reste €<br>";                  // afficher les montants et texte.
echo "* * * * * * * * * * * * * * * *<br>";    // afficher un séparateur
echo "$phrase4<br>";                           // afficher les montants et texte.

$compteurBilletDix  = 0;                       // Compteur pour les billets de 10 €
$compteurBilletCinq = 0;                       // Compteur pour les billets de 5 €
$compteurPieceDeux  = 0;                       // Compteur pour les pièces de 2 €
$compteurPieceUn    = 0;                       // Compteur pour les pièces de 1 €

if ($reste >= 10) {
    $compteurBilletDix = intdiv($reste, 10);   // Calcul du nombre de billets de 10 €
    $reste %= 10;                              // Mise à jour du reste
}

if ($reste >= 5) {
    $compteurBilletCinq = intdiv($reste, 5);   // Calcul du nombre de billets de 5 €
    $reste %= 5;                               // Mise à jour du reste
}

if ($reste >= 2) {
    $compteurPieceDeux = intdiv($reste, 2);    // Calcul du nombre de pièces de 2 €
    $reste %= 2;                               // Mise à jour du reste
}

if ($reste >= 1) {
    $compteurPieceUn = $reste;                 // Calcul du nombre de pièces de 1 €
    $reste = 0;                                // Mise à jour du reste
}

echo "$compteurBilletDix Billets de 10 € - ";  // afficher la manière dont le rendu de monnaie doit être effectué, en utilisant des billets de 10 €, 5 €, et des pièces de 2 € et 1 €.
echo "$compteurBilletCinq Billets de 5 € - ";  // afficher la manière dont le rendu de monnaie doit être effectué, en utilisant des billets de 10 €, 5 €, et des pièces de 2 € et 1 €.
echo "$compteurPieceDeux Pièces de 2 € - ";    // afficher la manière dont le rendu de monnaie doit être effectué, en utilisant des billets de 10 €, 5 €, et des pièces de 2 € et 1 €.
echo "$compteurPieceUn Pièces de 1 €. ";       //  afficher la manière dont le rendu de monnaie doit être effectué, en utilisant des billets de 10 €, 5 €, et des pièces de 2 € et 1 €.



