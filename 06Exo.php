<h1>Exo 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, 
   son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante
à partir d'un tableau de valeurs.
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);</p>

<H2>Le résultat</H2>

<?PHP

$text = "Le montant de la facture à régler est de :";
$prixU = 9.99;
$quant = 5;

$horsTax = ($prixU * $quant);
$tTva = 0.2;
$prixT = ($horsTax * $tTva);

$total = ($prixT + $horsTax);


echo "$text $total €";
