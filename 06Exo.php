<h1>Exo 6</h1>

<H2>Le résultat</H2>

<?php

$text = "Le montant de la facture à régler est de :";
$prixU = 9.99;
$quant = 5;

$horsTax = ($prixU * $quant);
$tTva = 0.2;
$prixT = ($horsTax * $tTva);

$total = ($prixT + $horsTax);


echo "$text $total €";
