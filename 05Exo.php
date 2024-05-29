<h1>Exo 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>
<p>Créer une fonction personnalisée permettant
de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);</p>

<H2>Le résultat</H2>

<?PHP

$phrase1 = "Montant en francs :";
$phrase2 = "francs =";
$num1 = 100;
$tChange = 6.55957;
$conver = ($num1 / $tChange);
$total = round($conver,2);


echo "$phrase1 $num1 <br>";
echo "$num1 $phrase2 $total €";


