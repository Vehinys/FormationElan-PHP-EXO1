<h1>Exo 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le 
lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra 
s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme : https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];</p>

<H2>Le résultat</H2>

<?PHP

$phrase = "Engage le jeu que je le gagne";
$suppEspace = str_replace(" ","", $phrase);
$suppAll = strtolower($suppEspace);
$phraseFinal = strrev($suppAll); 

if ($phraseFinal == $suppAll) {
   $pali = "est un palindrome";
} else { 
   $pali = "n'est pas un palindrome";
}

echo "$phrase $pali.";


